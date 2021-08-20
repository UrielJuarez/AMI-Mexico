<?php
$name = $_POST['name'];
$company = $_POST['company'];
$company = $_POST['cargopuesto'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$message = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n" . "De la compañia: " . $company . " \r\n" . "Con el cargo o puesto: " . $cargopuesto . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n" . "De la ciudad: " . $city . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'info@amimexico.com.mx';
$asunto = 'Mensaje de la pagina AMI Mexico';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

?>