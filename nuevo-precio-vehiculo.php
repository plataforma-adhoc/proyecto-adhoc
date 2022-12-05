<?php
include'conexion-db-accent.php';  
$id__publicacion= mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '') ;
$nuevo__precio = mysqli_real_escape_string($conexion__db__accent,isset($_POST['nuevo-precio']) ? $_POST['nuevo-precio']: '');

if($id__publicacion){
  $actualizar__precio = "UPDATE informacion__del__vehiculo__en__venta  SET precio_del_vehiculo ='$nuevo__precio' WHERE id_publicacion_vehiculo = '$id__publicacion'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__precio);
  if($ejecutar__consulta){
    echo json_encode('ok');
  }
}

?>