<?php
include'conexion-db-accent.php';
$id__usuario =  isset($_POST['usuario']) ?  $_POST['usuario']: '';
$id__publicacion  =  isset($_POST['publicacion']) ?  $_POST['publicacion']: '';
if($id__usuario && $id__publicacion){
  $eliminar__datos__informacion = "DELETE FROM informacion__del__vehiculo__en__venta WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$eliminar__datos__informacion);

  $eliminar__datos__contacto = "DELETE FROM contacto__vendedor WHERE id_contacto = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$eliminar__datos__contacto);

  $eliminar__datos__estilos = "DELETE FROM disenio__y__estilo__vehiculo WHERE id_estilos = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__estilos = mysqli_query($conexion__db__accent,$eliminar__datos__estilos);

  $eliminar__datos__equipamiento = "DELETE FROM equipamiento__del__vehiculo WHERE id_equipamiento = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$eliminar__datos__equipamiento);

  $eliminar__datos__fotos = "DELETE FROM fotos__del__vehiculo WHERE id_fotos = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$eliminar__datos__fotos);

  $eliminar__datos__seguridad = "DELETE FROM seguridad__del__vehiculo WHERE id_seguridad = '$id__publicacion' AND id_usuario ='$id__usuario'";
  $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$eliminar__datos__seguridad);

  if($ejecutar__consulta__informacion && $ejecutar__consulta__contacto && $ejecutar__consulta__estilos && $ejecutar__consulta__equipamiento && $ejecutar__consulta__fotos && $ejecutar__consulta__seguridad ){
    echo json_encode('ok');
   
  }
}
?>