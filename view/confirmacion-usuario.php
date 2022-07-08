<?php
  include'conexion/conexion-db-accent.php';
$email = $_GET['email'];
$token = $_GET['token'];

$consulta__recuperar__contrasena = "SELECT clave__nueva recuperar__contrasena__usuario WHERE email = '$email' AND token = '$token'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__recuperar__contrasena);
$resultado__consulta = mysqli_fetch_array($ejecutar__consulta);
if(!$resultado__consulta){
  header('Location: ./password-usuario');
  die();
}

$contrasena = password_hash($resultado__consulta['contrasena'],PASSWORD_BCRYPT);
$actualizar__contrasena = mysqli_query($conexion__db__accent,"UPDATE usuarios SET contrasena WHERE email = '$email' LIMIT 1");


$eliminar__solicitud = mysqli_query($conexion__db__accent,"DELETE  FROM recuperar__contrasena__usuario WHERE email ='$email'");


?>