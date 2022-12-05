<?php
  include'conexion-db-accent.php';  
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$Whatsapp__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-uno']) ? $_POST['Whatsapp-uno'] :'');
$Whatsapp__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-dos']) ? $_POST['Whatsapp-dos'] :'');
$telefono__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-uno']) ? $_POST['telefono-uno'] :'');
$telefono__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-dos']) ? $_POST['telefono-dos'] :'');
$estado__anuncio = "Activo";

$insertar__contacto__vendedor = "INSERT INTO contacto__vendedor(id_usuario,whatsapp_1,whatsapp_2,telefono_1,telefono_2,estado_anuncio)
VALUES('$id__usuario','$Whatsapp__uno','$Whatsapp__dos','$telefono__uno','$telefono__dos','$estado__anuncio')";

$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__contacto__vendedor);

if($ejecutar__consulta){
echo json_encode('ok');
}else{
echo json_encode('error');

}
?>