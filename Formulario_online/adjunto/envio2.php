<?php
	
	//variables para los campos de texto
	$nombre = strip_tags($_POST["nombre"]);
	$apellidos = strip_tags($_POST["apellidos"]);
	$mail = strip_tags($_POST["correo"]);
	$mensaje = strip_tags($_POST["comentario"]);

	//variables para los datos del archivo
	$nameFile = $_FILES['archivo']['name'];
	$sizeFile = $_FILES['archivo']['size'];
	$typeFile = $_FILES['archivo']['type'];
	$tempFile = $_FILES["archivo"]["tmp_name"];
	$fechaFormato = date('d/m/y', time());

	$correoDestino = "omar.sanchez201999@gmail.com";
	
	//asunto del correo
	$asunto = "Enviado por " . $nombre . " ". $apellidos;

 	
 	// -> mensaje en formato Multipart MIME
	$cabecera = "MIME-VERSION: 1.0\r\n";
	$cabecera .= "Content-type: multipart/mixed;";
	//$cabecera .="boundary='=P=A=L=A=B=R=A=Q=U=E=G=U=S=T=E=N='"
	$cabecera .="boundary=\"=OMAR SANCHEZ=\"\r\n";
	$cabecera .= "From: {$mail}";

	//Primera parte del cuerpo del mensaje
	$cuerpo = "--=OMAR SANCHEZ=\r\n";
	$cuerpo .= "Content-type: text/plain";
	$cuerpo .= "charset=utf-8\r\n";
	$cuerpo .= "Content-Transfer-Encoding: 8bit\r\n";
	$cuerpo .= "\r\n"; // línea vacía
	$cuerpo .= "Correo enviado por: " . $nombre . " ". $apellidos;
	$cuerpo .= " con fecha: " . $fechaFormato . "\r\n";
	$cuerpo .= "Email: " . $mail . "\r\n";
	$cuerpo .= "Mensaje: " . $mensaje . "\r\n";
	$cuerpo .= "\r\n";// línea vacía

 	// -> segunda parte del mensaje (archivo adjunto)
        //    -> encabezado de la parte
    $cuerpo .= "--=OMAR SANCHEZ=\r\n";
    $cuerpo .= "Content-Type: application/octet-stream; ";
    $cuerpo .= "name=" . $nameFile . "\r\n";
    $cuerpo .= "Content-Transfer-Encoding: base64\r\n";
    $cuerpo .= "Content-Disposition: attachment; ";
    $cuerpo .= "filename=" . $nameFile . "\r\n";
    $cuerpo .= "\r\n"; // línea vacía

    $fp = fopen($tempFile, "rb");
    $file = fread($fp, $sizeFile);
	$file = chunk_split(base64_encode($file));

    $cuerpo .= "$file\r\n";
    $cuerpo .= "\r\n"; // línea vacía
    // Delimitador de final del mensaje.
    $cuerpo .= "--=OMAR SANCHEZ=--\r\n";
    
	//Enviar el correo
	if(mail($correoDestino, $asunto, $cuerpo, $cabecera)){
		echo "Correo enviado";
	}else{
		echo "Error de envio";
	}

?>