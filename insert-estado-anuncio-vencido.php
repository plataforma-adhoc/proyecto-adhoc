<?php
  $data = file_get_contents('php://input');
  include'conexion-db-accent.php'; 
  $data = json_decode($data);   
  $id__usuario = $data->id__usuario;
 $actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET estado_anuncio = '0'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__diseño);

  $actualizar__contacto = "UPDATE contacto__vendedor SET  estado_anuncio = '0'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);

  $actualizar__equipamiento = "UPDATE equipamiento__del__vehiculo SET  estado_anuncio = '0'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__equipamiento);

  $actualizar__fotos = "UPDATE fotos__del__vehiculo SET  estado_anuncio = '0' WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);

  $actualizar__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET estado_anuncio = '0'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
  
  $actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET  estado_anuncio = '0'  WHERE id_usuario ='$id__usuario'";
  $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__seguridad);

  if($actualizar__diseño && $actualizar__contacto && $actualizar__equipamiento && $actualizar__fotos && $actualizar__informacion && $actualizar__seguridad){ 
  
   
echo json_encode('ok');
}
// }

?>