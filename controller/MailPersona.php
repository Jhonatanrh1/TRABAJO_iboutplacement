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

if (isset($_POST["nombrespersona"])) {
    $nombres = $_POST["nombrespersona"];
} else {
    $nombres = null;
};
if (isset($_POST["apellidospersona"])) {
    $apellidos = $_POST["apellidospersona"];
} else {
    $apellidos = null;
};
if (isset($_POST["cargopersona"])) {
    if ($_POST["cargopersona"] != "") {
        $cargo = $_POST["cargopersona"];
    }
} else {
    $cargo = null;
};
if (isset($_POST["emailpersona"])) {
    $email = $_POST["emailpersona"];
} else {
    $email = null;
};
if (isset($_POST["paispersona"])) {
    $pais = $_POST["paispersona"];
} else {
    $pais = null;
};
if (isset($_POST["ciudadpersona"])) {
    $ciudad = $_POST["ciudadpersona"];
} else {
    $ciudad = null;
};
if (isset($_POST["telefonopersona"])) {
    $telefono = $_POST["telefonopersona"];
} else {
    $telefono = null;
};
if (isset($_POST["trabajo_actual_persona"])) {
    if ($_POST["trabajo_actual_persona"] != "") {
        $trabajo_actual = $_POST["trabajo_actual_persona"];
    }
} else {
    $trabajo_actual = null;
};
if (isset($_POST["servicio_requerido"])) {
    if ($_POST["servicio_requerido"] != "") {
        $servicio_requerido = $_POST["servicio_requerido"];
    }
} else {
    $servicio_requerido = null;
};
if (isset($_POST["salarioPersona"])) {
    if ($_POST["salarioPersona"] != "") {
        $salarioPersona = $_POST["salarioPersona"];
    }
} else {
    $salarioPersona = null;
};
if (isset($_POST["mensajePersona"])) {
    $mensajePersona = $_POST["mensajePersona"];
} else {
    $mensajePersona = null;
};

$fecha = '<strong>Fecha: </strong>' . DateGet();
$subject = $apellidos.', '.$nombres.' - Cargo: '.$cargo;


if ($nombres != null && $apellidos != null && $cargo != null && $email != null && $pais != null && $ciudad != null && $telefono != null && $trabajo_actual != null && $servicio_requerido != null && $salarioPersona != null && $mensajePersona != null) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->CharSet= 'UTF-8';
        $mail->isSMTP();
        $mail->Host       = 'mail.corpibgroup.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'cm.outplacement.coaching@corpibgroup.com';
        $mail->Password   = 'outplacement2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('cm.outplacement.coaching@corpibgroup.com', 'CORPORACION IBGROUP');
        $mail->addAddress('jruiz@corpibgroup.com');
        //Content
        $mail->isHTML(true);                                
        $mail->Subject = $subject;
        $mail->Body    = "
        $fecha <br>
        <strong>From: </strong>CORPORACION IBGROUP <cm.outplacement.coaching@corpibgroup.com>"."\n"
         ."<br>" ."<br>".
         "<strong>Nombre :</strong> $nombres  <br>
        <strong>Apellidos :</strong> $apellidos <br>
        <strong>Cargo :</strong> $cargo <br>
        <strong>Email :</strong> $email<br>
        <strong>Pais :</strong> $pais <br>
        <strong>Ciudad :</strong> $ciudad <br>
        <strong>Telefono :</strong> $telefono <br>
        <strong>Trabajo actual :</strong> $trabajo_actual<br>
        <strong>Servicio requerido :</strong> $servicio_requerido <br>
        <strong>Salario :</strong> $salarioPersona <br>
        <strong>Mensaje :</strong> $mensajePersona";

        $mail->send();
        echo 'exito';
        
    } catch (Exception $e) {
        echo "Message no enviado: {$mail->ErrorInfo}";
    }
}?>