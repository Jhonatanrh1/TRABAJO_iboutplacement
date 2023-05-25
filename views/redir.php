<?php


$cargo = $_POST["cargo"];
$trabaja = $_POST["trabajando"];
$busca = $_POST["servicos"];
$conoce = $_POST["conoce"];

    if ($cargo==''||$trabaja==''||$busca=='' ||$conoce==''){
        echo "<script>
        alert('Falta seleccionar alguno de los siguientes campos: Cargo , ¿Actualmente esta trabajando?,  ¿Qué buscas? ,  ¿Cuál es tu rango salarial?. Seleccionelos e intente nuevamente');
        window.location= 'https://iboutplacement.com/index2.html'
        </script>";
    }else{
        echo "<script>window.location='https://iboutplacement.com/contacto.php'</script>";
    }
  
?>
