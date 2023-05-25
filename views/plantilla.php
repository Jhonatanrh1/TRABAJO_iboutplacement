<?php
    require_once 'views/modulos/header.php';
	
		
		//-- Contenido --
			if(isset($_GET['ruta'])){
				
				if($_GET['ruta'] == "inicio" ||
					$_GET['ruta'] == "nosotros" ||
					$_GET['ruta'] == "TalleresDesarrollo" ||
					$_GET['ruta'] == "servicios" ||
					$_GET['ruta'] == "PreguntasFrecuentes" ||
					$_GET['ruta'] == "DetalleTaller1" ||
					$_GET['ruta'] == "DetalleTaller2" ||
					$_GET['ruta'] == "FormularioTaller" ||
					$_GET['ruta'] == "QuienesSomos" ||
					$_GET['ruta'] == "Outplacement" ||
					$_GET['ruta'] == "OportunidadLaboral" ||
					$_GET['ruta'] == "BeneficioOutplacement" ||
					$_GET['ruta'] == "CoachEmpleabilidad" ||
					$_GET['ruta'] == "videos"||
					$_GET['ruta'] == "estadisticas" ||
					$_GET['ruta'] == "pdf-programa"){
					include_once "views/modulos/".$_GET['ruta'].".php";
				}
				else{
					include_once "views/modulos/404.php";
				}
			}
			else{
				include_once "views/modulos/inicio.php";
			}

		
		require_once 'views/modulos/footer.php';