<?php
include'conexion-db-accent.php';  
$id__publicacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '') ;
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario']: '') ;

$desactivar__anuncio  = "Desactivado";

if($id__publicacion  && $id__usuario){

  $consulta__desactivar__contacto = "UPDATE contacto__vendedor  SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__desactivar__contacto);

  $consulta__desactivar__diseño = "UPDATE disenio__y__estilo__vehiculo SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$consulta__desactivar__diseño);

  
  $consulta__desactivar__equipamiento = "UPDATE equipamiento__del__vehiculo SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$consulta__desactivar__equipamiento);

  $consulta__desactivar__fotos = "UPDATE fotos__del__vehiculo SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__desactivar__fotos);

  $consulta__desactivar__informacio = "UPDATE informacion__del__vehiculo__en__venta  SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$consulta__desactivar__informacio);
 
  $consulta__desactivar__seguridad = "UPDATE seguridad__del__vehiculo  SET estado_anuncio ='$desactivar__anuncio' WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
  $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$consulta__desactivar__seguridad);

  if($ejecutar__consulta){
    echo json_encode('ok');
  }
}


?>