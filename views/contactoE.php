<?php


$destino="cm.outplacement.coaching@corporacionibgroup.pe";

$nombre = $_POST["nombre"];
$ruc = $_POST["ruc"];
$cargo = $_POST["cargo"];
$email = $_POST["email"];
$telefono = $_POST["telefono"];
$servicios = $_POST["servicios"];
$mensaje = $_POST["mensaje"];
$trabaja = $_POST["trabajando"];


$contenido= "IBGROUP - CONTACTENOS". "\n\n\nNOMBRE: ". $nombre. "\nRUC: " . $ruc .  "\nEMAIL: " . $email .  "\nTELEFONO: " . $telefono . "\nCARGO: " . $cargo .  "\nQUE BUSCA: " . $servicios .  "\nMENSAJE: " . $mensaje;


//var_dump($contenido);


if ($cargo=='' && $servicos==''){
        echo "<script>
        alert('Falta seleccionar alguno de los siguientes campos: Cargo , ¿Qué buscas?. Seleccionelos e intente nuevamente');
        window.location= 'https://iboutplacement.com/indexempresas.html';
        </script>";
        
    }else{
        mail($destino,"Consulta",$contenido);

        echo "<script>
        alert('Mensaje Enviado con Exito, GRACIAS');
        window.location= 'https://iboutplacement.com/indexempresas.html';
        </script>";
    }

?>