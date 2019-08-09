<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php 
$server="localhost";
$usuario="root";
$contraseña="";
$bd="bdserviauto";


$conexion=mysqli_connect($server,$usuario,$contraseña,$bd)
 or die ("Error en la conexión");

 $when=$_POST['when'];
 $hour=$_POST['hour'];
 $inicio=$_POST['startDestination'];
 $fin=$_POST['endDestination'];
 $TipoVehiculo=$_POST['TipoVehiculo'];

 $insertar="INSERT INTO reserva (Fecha,Hora,InicioDestino,FinDestino,TipoVehiculo)VALUES(' $when',' $hour',' $inicio','$fin',' $TipoVehiculo')";

 $resultado=mysqli_query($conexion,$insertar) or die("ERROR AL INSERTAR DATOS EN LA RESERVA");

 mysqli_close($conexion);
 echo "Datos ingresados correctamente en la reserva";

?>
</body>
</html>
