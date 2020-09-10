<?php

use PHPMailer\PHPMailer\PHPMailer;

require 'base.php';
require 'PHPMailer/src/PHPMailer.php';

validateRecaptcha();

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

// messages
$success_message = isset($_POST['message_success']) ? $_POST['message_success'] : 'Your message has been sent. We\'ll get back to you soon.';
$error_message = isset($_POST['message_error']) ? $_POST['message_error'] : 'Failed to send your message. Please try later or contact administrator by other way.';

// Only process POST requests.
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get the form fields
    $fields = array(
        'name'      => array(
            'label'     => 'Name',
            'required'  => true
        ),
        'phone'     => array(
            'label'     => 'Phone',
            'required'  => true
        ),
        'email'     => array(
            'label'     => 'Email',
            'required'  => true
        ),
        'message'   => array(
            'label'     => 'Message',
            'required'  => true
        ),
    );
    $data = [];
    $has_error = false;

    foreach( $fields as $name => $field ) {
        if (isset($_POST[$name])) {
            $data[$name] = htmlspecialchars(trim($_POST[$name]));

            if ($name == 'email') {
                $data[$name] = filter_var($data[$name], FILTER_SANITIZE_EMAIL);

                if (!filter_var($data[$name], FILTER_VALIDATE_EMAIL)) {
                    $has_error = true;
                }
            }

            if ($field['required'] && empty($data[$name]) ) {
                $has_error = true;
            }
        } else if ($field['required']) {
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
    $mail->setFrom('noreply@himarkisland.com', $data['name']);
    $mail->addAddress('info@himarkip.com', 'Himark Island');
    $mail->addReplyTo($data['email'], $data['name']);

    // Content
    $mail->isHTML(true);
    $mail->Subject = "{$data['name']} via HimarkIsland.com Contact Form";

    // Build the email content.
    $body = "<strong>Name</strong>: {$data['name']}\n";
    $body .= "<strong>Phone</strong>: {$data['phone']}\n";
    $body .= "<strong>Email</strong>: {$data['email']}\n\n";
    $body .= "<strong>Message</strong>:\n{$data['message']}";

    $mail->Body = nl2br($body);

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