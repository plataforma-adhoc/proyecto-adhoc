<?php
function guardarDatosDecontacto(){
include'conexion-db-accent.php';
session_start();  
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$Whatsapp__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-uno']) ? $_POST['Whatsapp-uno'] :'');
$Whatsapp__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-dos']) ? $_POST['Whatsapp-dos'] :'');
$telefono__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-uno']) ? $_POST['telefono-uno'] :'');
$telefono__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-dos']) ? $_POST['telefono-dos'] :'');
// $estado__anuncio = 0;

$datos__contato =  array(
'id'=>$id__usuario,'Whatsapp_uno'=>$Whatsapp__uno,'Whatsapp_dos'=>$Whatsapp__dos,'telefono_uno'=>$telefono__uno,'telefono_dos'=>$telefono__dos);
$datos__de__contacto = $_SESSION['datos-contacto'] = $datos__contato;
if($datos__contato){
echo json_encode('ok');
}
}
?>