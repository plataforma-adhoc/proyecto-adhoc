<?php
function insertarEstadoAnuncio(){
  $data = file_get_contents('php://input');
  include'conexion-db-accent.php'; 
  $data = json_decode($data);   
  $id__usuario = $data->idUsuario;
  $actualizar__contacto = "UPDATE contacto__vendedor__moto SET  estado_anuncio = '0'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);

  $actualizar__fotos = "UPDATE fotos__de__la__moto SET  estado_anuncio = '0' WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);

  $actualizar__informacion = "UPDATE informacion__de__la__moto__en__venta  SET estadoAnuncio = '0'  WHERE idUsuario = '$id__usuario'";
  $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
 
if( $actualizar__contacto  && $actualizar__fotos && $actualizar__informacion ){ 
echo json_encode('ok');
}
}
insertarEstadoAnuncio();
?>