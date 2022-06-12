<?php
 $name = $_POST['name'];
 $quefestejas = $_POST['quefestejas'];
 $telefono = $_POST['telefono'];
 $mail = $_POST['mmail'];
 $motivo = $_POST['motivo'];
 $msg = $_POST['msg'];


$header = 'From: '. $mail . " \r\n";
$header = "X-Mailer: PHP/". phpversion() . " \r\n";
$header = "Mime-Version: 1.0 \r\n";
$header = "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $name . "\r\n";
$message = "Su e-mail es: " . $mail . "\r\n";
$message = "Telefono de contacto: " . $telefono . "\r\n";
$message = "Festeja: " . $quefestejas . "\r\n";
$message = "El dia es: " . $motivo . "\r\n";
$message = "Mensaje: " . $_POST['msg'] . "\r\n";
$message = "Enviado el: " . date('d/m/Y', time());

$para = 'emiliogauna@gmail.com';
$asunto = 'asunto del mensaje';

mail($para, $asunto, utf8_decode($msg), $header);

header("Location:index.html")
?>
