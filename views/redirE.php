<?php


$cargo = $_POST["cargo"];
$busca = $_POST["servicos"];


if ($cargo==''||$busca==''){
  echo "<script>
  alert('Falta seleccionar algunos de estos campos: Cargo, ¿Qué buscas?. Seleccione e intente nuevamente');
  window.location= 'https://iboutplacement.com/indexempresas.html'
  </script>";
}else{
  header("Location:contactoE.php");
}


?>
