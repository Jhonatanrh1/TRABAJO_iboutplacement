<?php
    $error='';
    $enviado='';

    if(isset($_POST['action'])){
        $nombre = $_POST['first_name'];
        $apellido = $_POST['last_name'];
        $numero = $_POST['icon_telephone'];
        $fecha = $_POST['fecha'];
        $turno = $_POST['turno'];
        $correo = $_POST['email'];
        $mensaje = $_POST['textarea1'];
            if(!empty($nombre)){
                $nombre = trim($nombre);
                $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
            }else{
                $error.= 'Ingresa su nombre <br/>';
            }
            if(!empty($apellido)){
                $apellido = trim($apellido);
                $apellido = filter_var($apellido, FILTER_SANITIZE_STRING);
            }else{
                $error.= 'Ingresa su Apellido <br/>';
            }
            if(!empty($numero)){
                $numero = trim($numero);
                $numero = filter_var($numero, FILTER_SANITIZE_STRING);
            }else{
                $error .= 'Ingrese solo números <br/>';
            }
            if (!empty($correo)) {
                $correo = trim($correo);
                $correo = filter_var($correo,FILTER_SANITIZE_EMAIL);
                if(!filter_var($correo, FILTER_VALIDATE_EMAIL)){
                    $error .= 'Ingresa un correo valido <br/>';
                }
            }else {
                $error .='Ingresa un Correo <br/>';
            }
            if(!empty($mensaje)){
                $mensaje = trim($mensaje);
                $mensaje = htmlspecialchars($mensaje);
                $mensaje = stripslashes($mensaje);
            }else{
                $error .= 'Ingresa un Mensaje <br/>';
            }
            
    }
     require('index.view.php');
?>