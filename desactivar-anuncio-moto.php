<?php
function desactivarAnuncioDelCarro(){
include'conexion-db-accent.php';  
$id__publicacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['publicacion']) ? $_POST['publicacion']: '') ;
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['usuario']) ? $_POST['usuario']: '') ;
$desactivarAnuncio  = 'Vendido';
if($id__publicacion  && $id__usuario){
  $actualizar__contacto = "UPDATE contacto__vendedor__moto SET  estado_anuncio = '$desactivarAnuncio'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);

  $actualizar__fotos = "UPDATE fotos__de__la__moto SET  estado_anuncio = '$desactivarAnuncio' WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);

  $actualizar__informacion = "UPDATE informacion__de__la__moto__en__venta  SET estadoAnuncio = '$desactivarAnuncio'  WHERE idUsuario = '$id__usuario'";
  $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion); 
  if( $actualizar__contacto  && $actualizar__fotos && $actualizar__informacion ){ 
echo json_encode('ok');
}
}
}
desactivarAnuncioDelCarro();

?>