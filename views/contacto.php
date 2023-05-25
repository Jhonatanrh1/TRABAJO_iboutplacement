<?php

$nombre = $_POST['nombre'];
$apellido = $_POST['ape'];
$cargo = $_POST['cargo'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$servicos = $_POST['servicos'];
$conoc = $_POST['conoce'];
$comentario = $_POST['mensaje'];
$para      = 'cm.outplacement.coaching@corpibgroup.com';
$titulo    = 'Contacto Web';
$msj1   = 'Nombres y Apellidos: ' . $nombre ." ".$apellido. "\r\n" . 'Cargo: ' . $cargo . "\r\n" . 'E-mail: ' . $email . "\r\n" . 'Telefono: ' . $telefono . "\r\n" . 'Servicios: ' . $servicos . "\r\n" . 'Conoce: ' . $conoc  . "\r\n". 'Mensaje: ' . $comentario;
$mensaje = '' . $msj1;
$cabeceras = 'From: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
    'Reply-To: cm.outplacement.coaching@corpibgroup.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

//mail($para, $titulo, $mensaje, $cabeceras);

if (isset($_POST['submit'])) {

    if (mail($para, $titulo, $mensaje, $cabeceras)) {

    echo "<script language='javascript'>
    alert('Mensaje enviado, muchas gracias por contactarte con nosotros.'); window.location.href='http://www.corpibgroup.com';
    </script>";
 
    }else{
        echo 'Fall܇ el envio';
    }

}

?>