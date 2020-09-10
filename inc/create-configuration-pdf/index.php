<?php

require __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();

$productName = ( isset( $_GET['name'] ) ) ? $_GET['name'] : '';
$frameColor = ( isset( $_GET['frame'] ) ) ? $_GET['frame'] : '';
$interiorPanelColor = ( isset( $_GET['panel'] ) ) ? $_GET['panel'] : '';
$image = ( isset( $_GET['image'] ) ) ? '../../' . $_GET['image'] : '';
$download = ( isset( $_GET['download'] ) ) ? $_GET['download'] : false;
$language = ( isset( $_GET['language'] ) ) ? $_GET['language'] : 'en';

// Render html with variables
ob_start();

require("html/{$language}/index.php");
$html = ob_get_contents();

ob_get_clean();

$dompdf->set_option('enable_remote', TRUE);
$dompdf->set_option('enable_css_float', TRUE);
$dompdf->set_option('enable_html5_parser', FALSE);

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('design-center-configuration.pdf', array("Attachment" => $download));

exit;