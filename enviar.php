<?php
$name = $_POST['name'];
$company = $_POST['company'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$city = $_POST['city'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . " \r\n";
$message = "De la compañia: " . $company . " \r\n";
$message .= "Su e-mail es: " . $mail . " \r\n";
$message .= "Teléfono de contacto: " . $phone . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message = "De la ciudad de : " . $city . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'ujjuarezr@gmail.com';
$asunto = 'Mensaje de la pagina AMI Mexico';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");

?>