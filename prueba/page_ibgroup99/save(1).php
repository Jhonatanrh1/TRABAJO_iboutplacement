<?php
    /*          Autor: Omar Sánchez         */ 

    //Declarando las variables

    $nombre = $_POST['Nombre'];
    $mail = $_POST['Email'];
    $comentario = $_POST['Mensaje'];

    //Preparando el mensaje

    $header = 'From: ' . $mail . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-type: text/plain";

    $mensaje =  "Este mensaje fue enviado por: ". $nombre . "\r\n";
    $mensaje .= "Su e-mail es: " . $mail . "\r\n";
    $mensaje .= "Su mensaje es: " . $_POST['Mensaje'] . "\r\n";
    $mensaje .= "Mensaje enviado el: " . date('d/m/y',time());

    //Declarando el correo para recepcionar los datos del formulario

    $para = 'omar.sanchez201999@gmail.com';
    $asunto = 'Mensaje de mi sitio web';

    //Concatenar todas las variables para el mensaje

    mail($para, $asunto, utf8_decode($mensaje),$header);

    header("Location:index.html");
?>