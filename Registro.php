<?php
require 'database.php'; 
$message = '';

if (!empty($_POST['email']) && !empty($_POST['password'])) {
  $sql = " INSERT INTO usuario (email , password) VALUES (:email, :password)";
  $stmt = $conn->prepare($sql);
  $stmt->bindParam(':email', $_POST['email']);
  $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
  $stmt->bindParam(':password', $password);

  if ($stmt->execute()) {
    $message = 'Nuevo usuario creado satisfactoriamente';
  } else {
    $message = 'Lo sentimos, hubo un error al crear la cuenta, debe ingresar una contraseña ';
  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  rel='stylesheet' href="assets/css/estilo.css">

    <title>CityCap-Registro</title>
</head>
<body>

<?php require 'partials/header.php' ?>

<?php if(!empty($message)): ?>
  <p> <?= $message ?></p>
<?php endif; ?>
<br>
<h1>Regístrate para ser miembro de CityCap</h1>
<form action="Registro.php" method="post">

<input name="email" type="text"  placeholder="Ingresa un Email">
<input  name="password"type="password"  placeholder="Ingresa una Contraseña">
<input type="password" name="confirm_pass" placeholder="Confirmar Contraseña">

<input type="submit" value="REGISTRARME">
<br><br>


</form>

</body>
</html>