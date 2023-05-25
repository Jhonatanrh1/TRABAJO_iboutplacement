<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

function DateGet()
{
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
}

if (isset($_POST["nombrecompleto-coaching"])) {
    $nombrecompleto = $_POST["nombrecompleto-coaching"];
} else {
    $nombrecompleto = null;
};
if (isset($_POST["correo-coaching"])) {
    $correo = $_POST["correo-coaching"];
} else {
    $correo = null;
};
if (isset($_POST["telefono-coaching"])) {
    $telefono = $_POST["telefono-coaching"];
} else {
    $telefono = null;
};

$fecha = '<strong>Fecha: </strong>' . DateGet();
$subject = 'VIDEO COACHING';

if($nombrecompleto!=null && $correo!=null && $telefono!=null){
    $mail = new PHPMailer(true);

    try {
        $mail->SMTPDebug = 0;
        $mail->CharSet= 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'mail.corpibgroup.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cm.outplacement.coaching@corpibgroup.com';
        $mail->Password   = 'outplacement2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        $mail->setFrom('cm.outplacement.coaching@corpibgroup.com', 'CORPORACION IBGROUP');
        $mail->addAddress('luisguitierrezarone@gmail.com');
        $mail->addAddress('valcorinv@gmail.com');
        
        $mail->isHTML(true);                                
        $mail->Subject = $subject;
        $mail->Body    = "
        $fecha <br><strong>From: </strong>CORPORACION IBGROUP <cm.outplacement.coaching@corpibgroup.com>"."\n"
        ."<br>" ."<br>".
        "<strong>Nombre Completo:</strong> $nombrecompleto  <br>
        <strong>Teléfono :</strong> $telefono  <br>
        <strong>Correo :</strong> $correo";

        $mail->send();
        echo 'exito';
    } catch (Exception $e) {
        echo "Message no enviado: {$mail->ErrorInfo}";
    }
}