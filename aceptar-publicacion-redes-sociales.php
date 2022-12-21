<?php
include'conexion-db-accent.php'; 
$aceptar__publicacion__redes = isset($_POST['aceptar']) ? $_POST['aceptar']:'';
$id__usuario = isset($_POST['id']) ? $_POST['id']:'';
if($aceptar__publicacion__redes && $id__usuario){
    $actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET aceptar_anuncio_redes = '$aceptar__publicacion__redes'  WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__diseño = mysqli_query($conexion__db__accent,$actualizar__diseño);
  
    $actualizar__contacto = "UPDATE contacto__vendedor SET  aceptar_anuncio_redes = '$aceptar__publicacion__redes'  WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);
  
    $actualizar__equipamiento = "UPDATE equipamiento__del__vehiculo SET  aceptar_anuncio_redes = '$aceptar__publicacion__redes'  WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__equipamiento);
  
    $actualizar__fotos = "UPDATE fotos__del__vehiculo SET  aceptar_anuncio_redes = '$aceptar__publicacion__redes' WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);
  
    $actualizar__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET aceptar_anuncio_redes = '$aceptar__publicacion__redes'  WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
    
    $actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET  aceptar_anuncio_redes = '$aceptar__publicacion__redes'  WHERE id_usuario = '$id__usuario'";
    $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__seguridad);
    if($ejecutar__actualizacion__diseño && $ejecutar__actualizacion__contacto && $ejecutar__actualizacion__equipamiento && $ejecutar__actualizacion__fotos &&
    $ejecutar__actualizacion__informacion && $ejecutar__actualizacion__seguridad){
      echo json_encode('ok');
    }
}

?>