<?php
session_start();
require 'conexion.php';
$user = $_POST['usuario'];
$clave = $_POST['clave'];


$query = "SELECT COUNT(*) as contar FROM usuario where email = '$user' and password = '$clave' ";
$bdconect = mysqli_query($conectar,$query);
$parametros = mysqli_fetch_array($bdconect);
if($parametros['contar']>0){
   $_SESSION['username'] = $user;
  header("location: ../home.php");
}else {
    echo "<h1>datos incorrectos</h1> <br> ";
    echo "<a href='../login.php'>Volver</a>";
}


?>