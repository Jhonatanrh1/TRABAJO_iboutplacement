<?php
function SubirArchivo($sfArchivo)
{
    $dir_subida = '../views/images/';
    $fichero_subido = $dir_subida . basename($_FILES[$sfArchivo]['name']);
    if (move_uploaded_file($_FILES[$sfArchivo]['tmp_name'], $fichero_subido)) {
        return $fichero_subido;
    } else {
        return "¡No se pudo subir el archivo\n";
    }
}
function DateGet()
{
    date_default_timezone_set('America/Lima');
    $hoy = date('Y-m-d h:i a');
    return $hoy;
}
function Nombres($n)
{
    $mensaje = "";
    if ($n != null) {
        $mensaje = "<strong>Nombres: </strong> $n <br>";
    }
    return $mensaje;
};
function Cargo($cargo)
{
    $mensaje = "";
    if ($cargo != null) {
        $mensaje = "<strong>Cargo: </strong> $cargo <br>";
    }
    return $mensaje;
};
function Celular($celular)
{
    $mensaje = "";
    if ($celular != null) {
        $mensaje = "<strong>Celular: </strong> $celular <br>";
    }
    return $mensaje;
};
function DNI($dni)
{
    $mensaje = "";
    if ($dni != null) {
        $mensaje = "<strong>DNI: </strong> $dni <br>";
    }
    return $mensaje;
};
function Email($email)
{
    $mensaje = "";
    if ($email != null) {
        $mensaje = "<strong>Email: </strong> $email <br><hr>";
    }
    return $mensaje;
};
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';


if (isset($_POST['numeropersonas'])) {
    $numero = $_POST['numeropersonas'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['nivel_personal_servicio'])) {
    $nivelPersonal = $_POST['nivel_personal_servicio'];
} else {
    return "¡No se pudo subir el archivo\n";
}

//Validad Nombres
if (isset($_POST['nombres'])) {
    $nombres = $_POST['nombres'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['nombres1'])) {
    $nombres1 = $_POST['nombres1'];
} else {
    $nombres1 = null;
}
if (isset($_POST['nombres2'])) {
    $nombres2 = $_POST['nombres2'];
} else {
    $nombres2 = null;
}
if (isset($_POST['nombres3'])) {
    $nombres3 = $_POST['nombres3'];
} else {
    $nombres3 = null;
}
if (isset($_POST['nombres4'])) {
    $nombres4 = $_POST['nombres4'];
} else {
    $nombres4 = null;
}
if (isset($_POST['nombres5'])) {
    $nombres5 = $_POST['nombres5'];
} else {
    $nombres5 = null;
}
if (isset($_POST['nombres6'])) {
    $nombres6 = $_POST['nombres6'];
} else {
    $nombres6 = null;
}
if (isset($_POST['nombres7'])) {
    $nombres7 = $_POST['nombres7'];
} else {
    $nombres7 = null;
}
if (isset($_POST['nombres8'])) {
    $nombres8 = $_POST['nombres8'];
} else {
    $nombres8 = null;
}
if (isset($_POST['nombres9'])) {
    $nombres9 = $_POST['nombres9'];
} else {
    $nombres9 = null;
}
if (isset($_POST['nombres10'])) {
    $nombres10 = $_POST['nombres10'];
} else {
    $nombres10 = null;
}
if (isset($_POST['nombres11'])) {
    $nombres11 = $_POST['nombres11'];
} else {
    $nombres11 = null;
}
if (isset($_POST['nombres12'])) {
    $nombres12 = $_POST['nombres12'];
} else {
    $nombres12 = null;
}
if (isset($_POST['nombres13'])) {
    $nombres13 = $_POST['nombres13'];
} else {
    $nombres13 = null;
}
if (isset($_POST['nombres14'])) {
    $nombres14 = $_POST['nombres14'];
} else {
    $nombres14 = null;
}
if (isset($_POST['nombres15'])) {
    $nombres15 = $_POST['nombres15'];
} else {
    $nombres15 = null;
}
if (isset($_POST['nombres16'])) {
    $nombres16 = $_POST['nombres16'];
} else {
    $nombres16 = null;
}
if (isset($_POST['nombres17'])) {
    $nombres17 = $_POST['nombres17'];
} else {
    $nombres17 = null;
}
if (isset($_POST['nombres18'])) {
    $nombres18 = $_POST['nombres18'];
} else {
    $nombres18 = null;
}
if (isset($_POST['nombres19'])) {
    $nombres19 = $_POST['nombres19'];
} else {
    $nombres19 = null;
}
if (isset($_POST['nombres20'])) {
    $nombres20 = $_POST['nombres20'];
} else {
    $nombres20 = null;
}

//Validar Cargo
if (isset($_POST['cargo'])) {
    $cargo = $_POST['cargo'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['cargo1'])) {
    $cargo1 = $_POST['cargo1'];
} else {
    $cargo1 = null;
}
if (isset($_POST['cargo2'])) {
    $cargo2 = $_POST['cargo2'];
} else {
    $cargo2 = null;
}
if (isset($_POST['cargo3'])) {
    $cargo3 = $_POST['cargo3'];
} else {
    $cargo3 = null;
}
if (isset($_POST['cargo4'])) {
    $cargo4 = $_POST['cargo4'];
} else {
    $cargo4 = null;
}
if (isset($_POST['cargo5'])) {
    $cargo5 = $_POST['cargo5'];
} else {
    $cargo5 = null;
}
if (isset($_POST['cargo6'])) {
    $cargo6 = $_POST['cargo6'];
} else {
    $cargo6 = null;
}
if (isset($_POST['cargo7'])) {
    $cargo7 = $_POST['cargo7'];
} else {
    $cargo7 = null;
}
if (isset($_POST['cargo8'])) {
    $cargo8 = $_POST['cargo8'];
} else {
    $cargo8 = null;
}
if (isset($_POST['cargo9'])) {
    $cargo9 = $_POST['cargo9'];
} else {
    $cargo9 = null;
}
if (isset($_POST['cargo10'])) {
    $cargo10 = $_POST['cargo10'];
} else {
    $cargo10 = null;
}
if (isset($_POST['cargo11'])) {
    $cargo11 = $_POST['cargo11'];
} else {
    $cargo11 = null;
}
if (isset($_POST['cargo12'])) {
    $cargo12 = $_POST['cargo12'];
} else {
    $cargo12 = null;
}
if (isset($_POST['cargo13'])) {
    $cargo13 = $_POST['cargo13'];
} else {
    $cargo13 = null;
}
if (isset($_POST['cargo14'])) {
    $cargo14 = $_POST['cargo14'];
} else {
    $cargo14 = null;
}
if (isset($_POST['cargo15'])) {
    $cargo15 = $_POST['cargo15'];
} else {
    $cargo15 = null;
}
if (isset($_POST['cargo16'])) {
    $cargo16 = $_POST['cargo16'];
} else {
    $cargo16 = null;
}
if (isset($_POST['cargo17'])) {
    $cargo17 = $_POST['cargo17'];
} else {
    $cargo17 = null;
}
if (isset($_POST['cargo18'])) {
    $cargo18 = $_POST['cargo18'];
} else {
    $cargo18 = null;
}
if (isset($_POST['cargo19'])) {
    $cargo19 = $_POST['cargo19'];
} else {
    $cargo19 = null;
}
if (isset($_POST['cargo20'])) {
    $cargo20 = $_POST['cargo20'];
} else {
    $cargo20 = null;
}
//Validar Celular
if (isset($_POST['celular'])) {
    $celular = $_POST['celular'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['celular1'])) {
    $celular1 = $_POST['celular1'];
} else {
    $celular1 = null;
}
if (isset($_POST['celular2'])) {
    $celular2 = $_POST['celular2'];
} else {
    $celular2 = null;
}
if (isset($_POST['celular3'])) {
    $celular3 = $_POST['celular3'];
} else {
    $celular3 = null;
}
if (isset($_POST['celular4'])) {
    $celular4 = $_POST['celular4'];
} else {
    $celular4 = null;
}
if (isset($_POST['celular5'])) {
    $celular5 = $_POST['celular5'];
} else {
    $celular5 = null;
}
if (isset($_POST['celular6'])) {
    $celular6 = $_POST['celular6'];
} else {
    $celular6 = null;
}
if (isset($_POST['celular7'])) {
    $celular7 = $_POST['celular7'];
} else {
    $celular7 = null;
}
if (isset($_POST['celular8'])) {
    $celular8 = $_POST['celular8'];
} else {
    $celular8 = null;
}
if (isset($_POST['celular9'])) {
    $celular9 = $_POST['celular9'];
} else {
    $celular9 = null;
}
if (isset($_POST['celular10'])) {
    $celular10 = $_POST['celular10'];
} else {
    $celular10 = null;
}
if (isset($_POST['celular11'])) {
    $celular11 = $_POST['celular11'];
} else {
    $celular11 = null;
}
if (isset($_POST['celular12'])) {
    $celular12 = $_POST['celular12'];
} else {
    $celular12 = null;
}
if (isset($_POST['celular13'])) {
    $celular13 = $_POST['celular13'];
} else {
    $celular13 = null;
}
if (isset($_POST['celular14'])) {
    $celular14 = $_POST['celular14'];
} else {
    $celular14 = null;
}
if (isset($_POST['celular15'])) {
    $celular15 = $_POST['celular15'];
} else {
    $celular15 = null;
}
if (isset($_POST['celular16'])) {
    $celular16 = $_POST['celular16'];
} else {
    $celular16 = null;
}
if (isset($_POST['celular17'])) {
    $celular17 = $_POST['celular17'];
} else {
    $celular17 = null;
}
if (isset($_POST['celular18'])) {
    $celular18 = $_POST['celular18'];
} else {
    $celular18 = null;
}
if (isset($_POST['celular19'])) {
    $celular19 = $_POST['celular19'];
} else {
    $celular19 = null;
}
if (isset($_POST['celular20'])) {
    $celular20 = $_POST['celular20'];
} else {
    $celular20 = null;
}

//Validad DNI
if (isset($_POST['dni'])) {
    $dni = $_POST['dni'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['dni1'])) {
    $dni1 = $_POST['dni1'];
} else {
    $dni1 = null;
}
if (isset($_POST['dni2'])) {
    $dni2 = $_POST['dni2'];
} else {
    $dni2 = null;
}
if (isset($_POST['dni3'])) {
    $dni3 = $_POST['dni3'];
} else {
    $dni3 = null;
}
if (isset($_POST['dni4'])) {
    $dni4 = $_POST['dni4'];
} else {
    $dni4 = null;
}
if (isset($_POST['dni5'])) {
    $dni5 = $_POST['dni5'];
} else {
    $dni5 = null;
}
if (isset($_POST['dni6'])) {
    $dni6 = $_POST['dni6'];
} else {
    $dni6 = null;
}
if (isset($_POST['dni7'])) {
    $dni7 = $_POST['dni7'];
} else {
    $dni7 = null;
}
if (isset($_POST['dni8'])) {
    $dni8 = $_POST['dni8'];
} else {
    $dni8 = null;
}
if (isset($_POST['dni9'])) {
    $dni9 = $_POST['dni9'];
} else {
    $dni9 = null;
}
if (isset($_POST['dni10'])) {
    $dni10 = $_POST['dni10'];
} else {
    $dni10 = null;
}
if (isset($_POST['dni11'])) {
    $dni11 = $_POST['dni11'];
} else {
    $dni11 = null;
}
if (isset($_POST['dni12'])) {
    $dni12 = $_POST['dni12'];
} else {
    $dni12 = null;
}
if (isset($_POST['dni13'])) {
    $dni13 = $_POST['dni13'];
} else {
    $dni13 = null;
}
if (isset($_POST['dni14'])) {
    $dni14 = $_POST['dni14'];
} else {
    $dni14 = null;
}
if (isset($_POST['dni15'])) {
    $dni15 = $_POST['dni15'];
} else {
    $dni15 = null;
}
if (isset($_POST['dni16'])) {
    $dni16 = $_POST['dni16'];
} else {
    $dni16 = null;
}
if (isset($_POST['dni17'])) {
    $dni17 = $_POST['dni17'];
} else {
    $dni17 = null;
}
if (isset($_POST['dni18'])) {
    $dni18 = $_POST['dni18'];
} else {
    $dni18 = null;
}
if (isset($_POST['dni19'])) {
    $dni19 = $_POST['dni19'];
} else {
    $dni19 = null;
}
if (isset($_POST['dni20'])) {
    $dni20 = $_POST['dni20'];
} else {
    $dni20 = null;
}


//Validad Email
if (isset($_POST['email'])) {
    $email = $_POST['email'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['email1'])) {
    $email1 = $_POST['email1'];
} else {
    $email1 = null;
}
if (isset($_POST['email2'])) {
    $email2 = $_POST['email2'];
} else {
    $email2 = null;
}
if (isset($_POST['email3'])) {
    $email3 = $_POST['email3'];
} else {
    $email3 = null;
}
if (isset($_POST['email4'])) {
    $email4 = $_POST['email4'];
} else {
    $email4 = null;
}
if (isset($_POST['email5'])) {
    $email5 = $_POST['email5'];
} else {
    $email5 = null;
}
if (isset($_POST['email6'])) {
    $email6 = $_POST['email6'];
} else {
    $email6 = null;
}
if (isset($_POST['email7'])) {
    $email7 = $_POST['email7'];
} else {
    $email7 = null;
}
if (isset($_POST['email8'])) {
    $email8 = $_POST['email8'];
} else {
    $email8 = null;
}
if (isset($_POST['email9'])) {
    $email9 = $_POST['email9'];
} else {
    $email9 = null;
}
if (isset($_POST['email10'])) {
    $email10 = $_POST['email10'];
} else {
    $email10 = null;
}
if (isset($_POST['email11'])) {
    $email11 = $_POST['email11'];
} else {
    $email11 = null;
}
if (isset($_POST['email12'])) {
    $email12 = $_POST['email12'];
} else {
    $email12 = null;
}
if (isset($_POST['email13'])) {
    $email13 = $_POST['email13'];
} else {
    $email13 = null;
}
if (isset($_POST['email14'])) {
    $email14 = $_POST['email14'];
} else {
    $email14 = null;
}
if (isset($_POST['email15'])) {
    $email15 = $_POST['email15'];
} else {
    $email15 = null;
}
if (isset($_POST['email16'])) {
    $email16 = $_POST['email16'];
} else {
    $email16 = null;
}
if (isset($_POST['email17'])) {
    $email17 = $_POST['email17'];
} else {
    $email17 = null;
}
if (isset($_POST['email18'])) {
    $email18 = $_POST['email18'];
} else {
    $email18 = null;
}
if (isset($_POST['email19'])) {
    $email19 = $_POST['email19'];
} else {
    $email19 = null;
}
if (isset($_POST['email20'])) {
    $email20 = $_POST['email20'];
} else {
    $email20 = null;
}

if (isset($_POST['radioPago'])) {
    $radioPago = $_POST['radioPago'];
} else {
    return "¡No se pudo subir el archivo\n";
}

if (isset($_POST['nombresEmpresa'])) {
    $nombresEmpresa = $_POST['nombresEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['rucEmpresa'])) {
    $rucEmpresa = $_POST['rucEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['direccionEmpresa'])) {
    $direccionEmpresa = $_POST['direccionEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['distritoEmpresa'])) {
    $distritoEmpresa = $_POST['distritoEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['telefonoEmpresa'])) {
    $telefonoEmpresa = $_POST['telefonoEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['faxEmpresa'])) {
    $faxEmpresa = $_POST['faxEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (isset($_POST['emailEmpresa'])) {
    $emailEmpresa = $_POST['emailEmpresa'];
} else {
    return "¡No se pudo subir el archivo\n";
}
if (count($_FILES) > 0) {
    $file = SubirArchivo('imgForm');
} else {
    return "¡No se pudo subir el archivo\n";
}


$fecha = '<strong>Fecha: </strong>' . DateGet() . "\n";
$subject = "Contacto IBOutplacement Registro Taller ".$nombresEmpresa;
    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->SMTPAuth   = true;
       $mail->Host       = 'mail.corpibgroup.com';
        $mail->Username   = 'cm.outplacement.coaching@corpibgroup.com';
        $mail->Password   = 'outplacement2020';
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = 465;

        //Recipients
        $mail->setFrom('cm.outplacement.coaching@corpibgroup.com', 'CORPORACION IBGROUP');
        $mail->addAddress('jruiz@corpibgroup.com');
        //incrustar imagen para cuerpo de mensaje(no confundir con Adjuntar)
        $mail->AddEmbeddedImage($file, 'imagen'); //ruta de archivo de imagen
        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = "
        $fecha <br>        
        <strong>From: </strong>CORPORACION IBGROUP <cm.outplacement.coaching@corpibgroup.com>"."\n"
        ."<br>" ."<br>".
        "<strong>Numero de personas: </strong> $numero  <br>
        <strong>Taller: </strong> $nivelPersonal"."\n"
        ."<br>" ."<br>".
        "<strong>Nombres: </strong> $nombres <br>
        <strong>Cargo: </strong> $cargo<br>
        <strong>Celular: </strong> $celular <br>
        <strong>DNI: </strong> $dni <br>
        <strong>Email: </strong> $email <br><hr>" .
        Nombres($nombres1) .
        Cargo($cargo1) .
        Celular($celular1) .
        DNI($dni1) .
        Email($email1) .

        Nombres($nombres2) .
        Cargo($cargo2) .
        Celular($celular2) .
        DNI($dni2) .
        Email($email2) .

        Nombres($nombres3) .
        Cargo($cargo3) .
        Celular($celular3) .
        DNI($dni3) .
        Email($email3) .

        Nombres($nombres4) .
        Cargo($cargo4) .
        Celular($celular4) .
        DNI($dni4) .
        Email($email4) .

        Nombres($nombres5) .
        Cargo($cargo5) .
        Celular($celular5) .
        DNI($dni5) .
        Email($email5) .

        Nombres($nombres6) .
        Cargo($cargo6) .
        Celular($celular6) .
        DNI($dni6) .
        Email($email6) .

        Nombres($nombres7) .
        Cargo($cargo7) .
        Celular($celular7) .
        DNI($dni7) .
        Email($email7) .

        Nombres($nombres8) .
        Cargo($cargo8) .
        Celular($celular8) .
        DNI($dni8) .
        Email($email8) .

        Nombres($nombres9) .
        Cargo($cargo9) .
        Celular($celular9) .
        DNI($dni9) .
        Email($email9) .

        Nombres($nombres10) .
        Cargo($cargo10) .
        Celular($celular10) .
        DNI($dni10) .
        Email($email10) .

        Nombres($nombres11) .
        Cargo($cargo11) .
        Celular($celular11) .
        DNI($dni11) .
        Email($email11) .

        Nombres($nombres12) .
        Cargo($cargo12) .
        Celular($celular12) .
        DNI($dni12) .
        Email($email12) .

        Nombres($nombres13) .
        Cargo($cargo13) .
        Celular($celular13) .
        DNI($dni13) .
        Email($email13) .

        Nombres($nombres14) .
        Cargo($cargo14) .
        Celular($celular14) .
        DNI($dni14) .
        Email($email14) .

        Nombres($nombres15) .
        Cargo($cargo15) .
        Celular($celular15) .
        DNI($dni15) .
        Email($email15) .

        Nombres($nombres16) .
        Cargo($cargo16) .
        Celular($celular16) .
        DNI($dni16) .
        Email($email16) .

        Nombres($nombres17) .
        Cargo($cargo17) .
        Celular($celular17) .
        DNI($dni17) .
        Email($email17) .

        Nombres($nombres18) .
        Cargo($cargo18) .
        Celular($celular18) .
        DNI($dni18) .
        Email($email18) .

        Nombres($nombres19) .
        Cargo($cargo19) .
        Celular($celular19) .
        DNI($dni19) .
        Email($email19) .

        Nombres($nombres20) .
        Cargo($cargo20) .
        Celular($celular20) .
        DNI($dni20) .
        Email($email20) . "
        <strong>Modo de pago: </strong> $radioPago<br>
        <strong>Nombre de empresa: </strong> $nombresEmpresa <br>
        <strong>Ruc: </strong> $rucEmpresa <br>
        <strong>Direccion: </strong> $direccionEmpresa <br>
        <strong>Distrito: </strong> $distritoEmpresa <br>
        <strong>Telefono empresa: </strong> $telefonoEmpresa <br>
        <strong>Fax: </strong> $faxEmpresa <br>
        <strong>Email empresa: </strong> $emailEmpresa";
        
        if ($mail) {
            $mail->send();
            echo ('exito');
        }
       
    } catch (Exception $e) {
        echo "Message no enviado: {$mail->ErrorInfo}";
    }

?>