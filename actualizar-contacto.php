<?php
function actaulizarContactoVehiculo(){
include'conexion-db-accent.php';  
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';  
$whatsapp__1 = isset($_POST['whatsapp_1']) ? $_POST['whatsapp_1']: '';
$email = isset($_POST['email']) ? $_POST['email']: '';
$telefono__1 = isset($_POST['telefono_1']) ? $_POST['telefono_1']: '';
$telefono__2  = isset($_POST['telefono_2']) ? $_POST['telefono_2']: '';

$actaulizar__datos__contacto = "UPDATE contacto__vendedor SET whatsapp_1 = '$whatsapp__1',email = '$email',telefono_1 = '$telefono__1',telefono_2 = '$telefono__2'
WHERE id_contacto = '$id__publicacion' AND id_usuario = '$id__usuario'";
$ejecutar__actualizacion__conatcto =  mysqli_query($conexion__db__accent,$actaulizar__datos__contacto);
if($ejecutar__actualizacion__conatcto){
  echo  json_encode('ok');
}
}
actaulizarContactoVehiculo();
?>