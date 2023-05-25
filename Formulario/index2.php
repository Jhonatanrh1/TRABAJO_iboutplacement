<?php
$nombre = $_POST['nombre'];
$apellido = $_POST['apellidos'];
$telefono = $_POST['telefono'];
$mail = $_POST['email'];
$fecha = $_POST['fecha'];
$turno = $_POST['turno'];
$comentario = $_POST['mensaje'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . $apellido . ",\r\n";
$mensaje .= "Su e-mail es: " . $mail . " \r\n";
$mensaje .= "Fecha asistir: " . $fecha . "\r\n";
$mensaje .= "Turno asistir: " . $turno . "\r\n";
$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'tn.mark.yl@gmail.com';
$asunto = 'Registrar Usuario';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>