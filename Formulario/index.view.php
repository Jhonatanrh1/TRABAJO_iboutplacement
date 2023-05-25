<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
    <title>Formulario</title>
</head>
<body>
     <div class="container">
         <div class="row action">
             <form class="col s12" action="<?php  echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" >
                 <div class="row">
                     <div class="input-field col s12 m6">
                         <!--<i class="material-icons prefix">account_circle</i>-->
                         <input id="first_name" type="text" class="validate">
                         <label for="first_name">Nombre</label>
                     </div>
                     <div class="input-field col s12 m6">
                         <!--<i class="material-icons prefix">account_circle</i>-->
                         <input id="last_name" type="text" class="validate" >
                         <label for="last_name">Apellido</label>
                     </div>
                 </div>
                 <div class="row">
                     <div class="input-field col s12 m6">
                         <!--<i class="material-icons prefix">phone</i>-->
                         <input id="icon_telephone" type="tel" class="validate" >
                         <label for="icon_telephone">Teléfono</label>
                     </div>
                     <div class="input-field col s12 m6">
                         <!--<i class="material-icons prefix">event_available</i>-->
                         <input type="text" class="datepicker" id = "fecha" >
                         <label for="text">Fecha</label>
                     </div>
                 </div>
                 <div class="row">
                     <!--<div class="input-field col s12 m6">
                         <i class="material-icons prefix">query_builder</i>
                         <input type="text" class="timepicker">
                         <label for="text">Hora</label>
                     </div>-->
                     <div class="input-field col s12 m6">
                         <select>
                             <option value="" disabled selected>Seleccionar</option>
                             <option value="1"> Mañana (9:00 AM - 11:000 AM) </option>
                             <option value="2">Tarde (4:00 PM - 6:00 PM)</option>
                         </select>
                             <label>Turno</label>
                     </div>
                 </div>
                 <div class="row">
                     <div class="input-field col s12 m12">
                         <!--<i class="material-icons prefix">email</i>-->                     
                         <input id="email" type="email" class="validate" >
                         <label for="email">Correo</label>
                     </div>
                 </div>
                 <div class="row">
                     <div class="input-field col s12 m12">
                         <!--<i class="material-icons prefix">bookmark</i>  -->                   
                         <textarea id="textarea1" class="#" ></textarea>
                         <label for="textarea1">Comentario</label>
                     </div>
                 </div>
                 <?php if(!empty($error)) :?>
                     <div class="alert error">
                         <?php echo $error; ?>
                     </div>
                 <?php elseif($enviado) :?>
                     <div class="alert success">
                         <p> Enviado Correctamente </p>
                     </div>
                 <?php endif?>
                 <div class="row">
                     <div class="col s6">
                         <button class="btn waves-effect waves-light green" type="submit" name="action">Registrar
                             <!--<i class="material-icons right">send</i>--> 
                         </button>                        
                     </div>
                     <div class="col s6">
                         <button class="btn waves-effect waves-light red" type="submit" name="action">Cancelar
                             <!--<i class="material-icons right">cancel</i>-->
                         </button>
                     </div>
                 </div>
             </form>
         </div>
     </div>
 <!-- Compiled and minified JavaScript -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    
 <script>
     document.addEventListener('DOMContentLoaded', function() {
        M.AutoInit();
  });
 </script>

</body>
</html>