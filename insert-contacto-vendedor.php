<?php
  include'conexion-db-accent.php';  
$Whatsapp__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-uno']) ? $_POST['Whatsapp-uno'] :'');
$Whatsapp__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-dos']) ? $_POST['Whatsapp-dos'] :'');
$telefono__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-uno']) ? $_POST['telefono-uno'] :'');
$telefono__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-dos']) ? $_POST['telefono-dos'] :'');


$insertar__contacto__vendedor = "INSERT INTO contacto__vendedor(whatsapp_1,whatsapp_2,telefono_1,telefono_2)
VALUES('$Whatsapp__uno','$Whatsapp__dos','$telefono__uno','$telefono__dos')";

$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__contacto__vendedor);

if($ejecutar__consulta){
echo json_encode('ok');
}
?>