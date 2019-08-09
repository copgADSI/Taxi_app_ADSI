<?php


$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="bdserviauto";

$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();



$fecha=$_POST["when"];
$hora=$_POST["hour"];
$inicioDestino=$_POST["startDestination"];
$finDestino=$_POST["endDestination"];
$tipoVehiculo=$_POST["TipoVehiculo"];

$consulta ="INSERT INTO reserva (Fecha,Hora,InicioDestino,FinDestino,TipoVehiculo) VALUES ('$fecha','$hora','$inicioDestino','$finDestino ','$tipoVehiculo')";

$resultado= mysqli_query($con,$consulta)or die ("Error al pedir transporte");


mysqli_close($con);
echo "Reserva de transpote realizada !";

?>