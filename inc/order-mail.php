<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'base.php';
require 'PHPMailer/src/PHPMailer.php';

validateRecaptcha();

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// messages
$success_message = isset($_POST['message_success']) ? $_POST['message_success'] : 'Your order has been created. We\'ll get back to you soon.';
$error_message = isset($_POST['message_error']) ? $_POST['message_error'] : 'Failed to create your order. Please try later or contact administrator directly.';

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form fields
    $fields = array(
        'customer_name'                 => array(
            'label'         => 'Customer name',
            'required'      => true
        ),
        'project_name'                  => array(
            'label'         => 'Project name',
            'required'      => true
        ),
        'order_date'                    => array(
            'label'         => 'Order date',
            'required'      => true
        ),
        'ship_date'                     => array(
            'label'         => 'Ship date',
            'required'      => true
        ),
        'delivery_address'              => array(
            'label'         => 'Delivery address',
            'required'      => true
        ),
        'dealer'                        => array(
            'label'         => 'Dealer',
            'required'      => false
        ),
        'contact_person'                => array(
            'label'         => 'Contact person',
            'required'      => true
        ),
        'sales_person'                  => array(
            'label'         => 'Sales person',
            'required'      => true
        ),
        'phone_number'                  => array(
            'label'         => 'Phone number',
            'required'      => true
        ),
        'email'                         => array(
            'label'         => 'Email',
            'required'      => true
        ),

        'product_code'                  => array(
            'label'         => 'Product code',
            'required'      => true
        ),
        'product_code_other'            => array(
            'label'         => 'Product code (other)',
            'required'      => false
        ),
        'product_table_height'          => array(
            'label'         => 'Product table height',
            'required'      => true
        ),
        'product_table_height_other'    => array(
            'label'         => 'Product table height (other)',
            'required'      => false
        ),
        'product_paint'                 => array(
            'label'         => 'Product paint',
            'required'      => true
        ),
        'product_side'                  => array(
            'label'         => 'Product side',
            'required'      => true
        ),
        'panel_fabric'                  => array(
            'label'         => 'Panel fabric',
            'required'      => true
        ),
        'panel_fabric_other'            => array(
            'label'         => 'Panel fabric (other)',
            'required'      => false
        ),
        'comments'                      => array(
            'label'         => 'Comments',
            'required'      => false
        ),
        'order_copy'                    => array(
            'label'         => 'Order Copy',
            'required'      => false
        ),
        'order_copy_email'              => array(
            'label'         => 'Order copy email',
            'required'      => false
        ),
    );
    $data = [];
    $has_error = false;

    foreach( $fields as $name => $field ) {
        if (isset($_POST[$name])) {
            if (empty($_POST[$name])) {
                $data[$name] = '';
            } else {
                $data[$name] = htmlspecialchars(trim($_POST[$name]));

                if ($name == 'email' || $name == 'order_copy_email') {
                    $data[$name] = filter_var($data[$name], FILTER_SANITIZE_EMAIL);

                    if (!filter_var($data[$name], FILTER_VALIDATE_EMAIL)) {
                        $has_error = true;
                    }
                }

                if ($field['required'] && empty($data[$name]) ) {
                    $has_error = true;
                }
            }
        } else if ($name == 'order_copy') {
            $data[$name] = 'off';
        } else if ($field['required']) {
            $has_error = true;
        }

        if ($name == 'email' && empty($data['email'])) {
            $has_error = true;
        }

        // if order_copy is request, treat order_copy_email required
        if (($name == 'order_copy_email') && ($data['order_copy'] == 'on') && empty($data['order_copy_email'])) {
            $has_error = true;
        }
    }

    if ( $has_error ) {
        // Set a 400 (bad request) response code and exit.
        http_response_code(400);
        echo $error_message;
        exit;
    }

    //Recipients
    $mail->setFrom('noreply@himarkisland.com', $data['customer_name']);
    $mail->addAddress('info@himarkip.com', 'Himark Island');
    $mail->addReplyTo($data['email'], $data['contact_person']);

    // If want ot receive a copy of order
    if($data['order_copy'] == 'on'){
        $mail->addCC($data['order_copy_email']);
    }

    // Content
    $mail->isHTML(true);
    $mail->Subject = "Custom Order from {$_POST['customer_name']} via HimarkIsland.com";

    // Build the email content.
    $body = '';

    foreach($data as $name => $value){

        // skip if field is "order_copy" or "order_copy_email"
        if (in_array($name, ['order_copy', 'order_copy_email'])) {
            continue;
        }

        // skip if "product_table_height*" has value but "product_code" is not "Private Island"
        if (in_array($name, ['product_table_height', 'product_table_height_other']) && ($data['product_code'] != 'Private Island')) {
            continue;
        }

        // skip if there's a value in "*_other" field but main field value is not "other"
        if (ends_with($name, '_other')) {
            $main = str_replace('_other', '', $name);

            if ($data[$main] != 'other') {
                continue;
            }
        }

        // add double line breaks between sections of information
        if (in_array($name, ['product_code', 'comments'])) {
            $body .= "<br><br>";
        }

        $body .= "<strong>{$fields[$name]['label']}</strong>: {$value}<br>";
    }

    $mail->Body = $body;

    if(!$mail->send()) {
        http_response_code(500);
        echo $error_message;
    } else {
        http_response_code(200);
        echo $success_message;
    }

    exit;
} else {
    // Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo $error_message;
}