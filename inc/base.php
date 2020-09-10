<?php

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

define('BASE_URL', (is_https() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . '/');
define('RECAPTCHA_SITE_KEY', '6LcrPd4UAAAAAGlV_VQY-S2yIye6h3zS3ZEGZ9Cp');
define('RECAPTCHA_SECRET', '6LcrPd4UAAAAAAUL0Il4oyVlbsyh6963bzTV1LgI');

function validateRecaptcha() {
    if (isset($_POST['g-recaptcha-response'])) {
        $url = "https://www.google.com/recaptcha/api/siteverify";

        $post_data = http_build_query(
            array(
                'secret' => RECAPTCHA_SECRET,
                'response' => $_POST['g-recaptcha-response'],
                'remoteip' => $_SERVER['REMOTE_ADDR'],
            )
        );

        $options = array(
            'ssl' => array(
                'verify_peer'       => false,
                'verify_peer_name'  => false,
            ),
            'http' => array(
                'method'  => 'POST',
                'header'  => 'Content-type: application/x-www-form-urlencoded',
                'content' => $post_data
            ),
        );

        $context = stream_context_create( $options );
        $result = file_get_contents( $url, false, $context );
        $response = json_decode($result);

        if ($response->success === false) {
            $captchaResult = ['success' => false, 'response' => $response];
            echo json_encode($captchaResult);

            exit;
        }
    } else {
        $captchaResult = ['success' => false, 'response' => 'Spam alert! Invalid form data.'];
        echo json_encode($captchaResult);

        exit;
    }
}

function ends_with($haystack, $needle)
{
    $length = strlen($needle);
    if ($length == 0) {
        return true;
    }

    return (substr($haystack, -$length) === $needle);
}

function is_https() {
	return ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443);
}