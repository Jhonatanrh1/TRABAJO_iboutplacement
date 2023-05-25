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

if (isset($_POST["nombre_apellido_empresa"])) {
    $nombres = $_POST["nombre_apellido_empresa"];
} else {
    $nombres = null;
};
if (isset($_POST["celularempresa"])) {
    $celular = $_POST["celularempresa"];
} else {
    $celular = null;
};
if (isset($_POST["nombreempresa"])) {
    $empresa = $_POST["nombreempresa"];
} else {
    $empresa = null;
};
if (isset($_POST["rucempresa"])) {
    $ruc = $_POST["rucempresa"];
} else {
    $ruc = null;
};
if (isset($_POST["nivel_servicio"])) {
    if ($_POST["nivel_servicio"] != "") {
        $nservicios = $_POST["nivel_servicio"];
    }
} else {
    $nservicios = null;
};
if (isset($_POST["telefonoempresa"])) {
    $telefono = $_POST["telefonoempresa"];
} else {
    $telefono = null;
};
if (isset($_POST["emailempresa"])) {
    $email = $_POST["emailempresa"];
} else {
    $email = null;
};
if (isset($_POST["rubroempresa"])) {
    if ($_POST["rubroempresa"] != "") {
        $rubro = $_POST["rubroempresa"];
    }
} else {
    $rubro = null;
};
if (isset($_POST["cargoempresa"])) {
    $cargo = $_POST["cargoempresa"];
} else {
    $cargo = null;
};
if (isset($_POST["nivel_personal_servicio_empresa"])) {
    if ($_POST["nivel_personal_servicio_empresa"] != "") {
        $personal = $_POST["nivel_personal_servicio_empresa"];
    }
} else {
    $personal = null;
};
if (isset($_POST["mensajeempresa"])) {
    $mensaje = $_POST["mensajeempresa"];
} else {
    $mensaje = null;
};

$fecha = '<strong>Fecha: </strong>' .  DateGet();
$subject = $nombres.' - Cargo: '.$cargo;
if ($nombres != null && $celular != null && $empresa != null && $ruc != null && $nservicios != null && $telefono != null && $email != null && $rubro != null && $cargo != null && $personal != null && $mensaje != null) {
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->CharSet= 'UTF-8';
        $mail->isSMTP();
        $mail->SMTPAuth   = true;
        $mail->Host       = 'mail.corpibgroup.com';
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
          "<strong>Nombres y Apellidos :</strong> $nombres  <br>
         <strong>Celular :</strong> $celular <br>
         <strong>Empresa :</strong> $empresa <br>
         <strong>Ruc :</strong> $ruc<br>
         <strong>Nivel de personal objeto del Servicio :</strong> $nservicios <br>         
         <strong>Telefono :</strong> $telefono <br>
         <strong>Email :</strong> $email <br>
         <strong>Rubro de Empresa :</strong> $rubro<br>
         <strong>Cargo :</strong> $cargo <br>
         <strong>Nivel de personal objeto del Servicio :</strong> $personal <br>
         <strong>Mensaje :</strong> $mensaje";
 
         $mail->send();
         echo 'exito';

    } catch (Exception $e) {
        echo "Message no enviado: {$mail->ErrorInfo}";
    }
}
?>