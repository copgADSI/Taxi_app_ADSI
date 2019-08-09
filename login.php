<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel='stylesheet' href="assets/css/estilo.css">

    <title>LOGIN CON SESIONES</title>
</head>
<body>
    
<?php  require 'partials/header.php' ?>
<h1>INICIAR SESIÓN</h1>
       <center> <br>
    
       <form action="logica/loguear.php" method="POST">
        <input type="text" name="usuario" placeholder="Ingresa Email">
         <input type="password" name="clave" placeholder="Ingresa Contraseña">
         <input type="submit"value='Ingresar'>

         <p>¿Haz olvidado tu Contraseña? <a href="#">Click Aquí</a>
</p>

<p>¿No tienes una Cuenta? <a href="Registro.php">Click Aquí</a>
</p>
        </form>
        </center>
</body>
</html>