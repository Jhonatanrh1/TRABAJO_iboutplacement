<?php 

$empresa=$_POST['empresa'];
$ruc=$_POST['ruc'];
$direccion=$_POST['direccion'];
$distrito=$_POST['distrito'];
$telefono=$_POST['telefono'];
$fax=$_POST['fax'];
$mail=$_POST['email'];
$nombre=$_POST['nombre'];
$cargo = $_POST['cargo'];

//variables para los datos del archivo
	$nameFile = $_FILES['archivo']['name'];
	$sizeFile = $_FILES['archivo']['size'];
	$typeFile = $_FILES['archivo']['type'];
	$tempFile = $_FILES["archivo"]["tmp_name"];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por la Empresa: ".$empresa.",\r\n";
$mensaje .= "Su RUC es: " . $ruc . ",\r\n";
$mensaje .= "Direccion: ".$direccion.",\r\n";
$mensaje .= "Distrito: ".$distrito.",\r\n";
$mensaje .= "Telefono: ".$telefono.",\r\n";
$mensaje .= "fax: ".$fax.",\r\n";
$mensaje .= "email: ".$mail.",\r\n";  
$mensaje .= "Nombre: ".$nombre.",\r\n";
$mensaje .= "Cargo :" . $_POST['cargo'].",\r\n";
$mensaje .= "Enviado el ".date('d/m/Y',time());

//Adjunto

    /*$mensaje .= "Content-Type: application/octet-stream; ";
    $mensaje .= "name=" . $nameFile . "\r\n";
    $mensaje .= "Content-Transfer-Encoding: base64\r\n";
    $mensaje .= "Content-Disposition: attachment; ";
    $mensaje .= "filename=" . $nameFile . "\r\n";
    $mensaje .= "\r\n"; // línea vacía

    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
	$file = chunk_split(base64_encode($file));

    $mensaje .= "$file\r\n";
    $mensaje .= "\r\n";*/

$para='cm.outplacement.coaching@corporacionibgroup.pe';
$asunto='Inscripcion Online';

mail($para, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");


 ?>