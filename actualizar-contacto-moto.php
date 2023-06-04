<?php
function actualizarContactoMoto(){
include'conexion-db-accent.php';  
$idUsuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$idPublicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';  
$email = isset($_POST['email']) ? $_POST['email']: '';
$whatsapp = isset($_POST['whatsapp']) ? $_POST['whatsapp']: '';
$telefono = isset($_POST['telefono']) ? $_POST['telefono']: '';


$actaulizarDatosContacto = "UPDATE contacto__vendedor__moto SET email = '$email', whatsapp = '$whatsapp',telefono = '$telefono' WHERE id_contacto = '$idPublicacion' AND id_usuario = '$idUsuario'";
$ejecutarActualizacion =  mysqli_query($conexion__db__accent,$actaulizarDatosContacto);
if($ejecutarActualizacion){
  echo  json_encode('ok');
}
}
actualizarContactoMoto();
?>