<?php
function insertarInfoPlanGratis(){
  include'conexion-db-accent.php';  
  $id__usuario =  isset($_POST['id-usuario']) ? $_POST['id-usuario'] : '';
  $nombre__pagador = isset($_POST['nombre-pagador']) ? $_POST['nombre-pagador'] : '';
  $nombre__paquete = isset($_POST['nombre-paquete']) ? $_POST['nombre-paquete']: '';
  $valor__paquete = isset($_POST['valor-paquete']) ? $_POST['valor-paquete']: '';
  $plan__gratis = 'GRATIS';

$insertar__datos__de__compra = "INSERT INTO proceso__pago__y__e__info__plan(id_usuario,nombre_pagador,nombre_paquete,valor_paquete) 
VALUES('$id__usuario','$nombre__pagador','$nombre__paquete','$valor__paquete')";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos__de__compra);

  $actualizar__plan__diseño = "UPDATE disenio__y__estilo__vehiculo SET nombre_paquete  = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__diseño = mysqli_query($conexion__db__accent,$actualizar__plan__diseño);

  $actualizar__plan__contacto = "UPDATE contacto__vendedor SET nombre_paquete  = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__plan__contacto);

  $actualizar__plan__equipamiento = "UPDATE equipamiento__del__vehiculo SET nombre_paquete = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__plan__equipamiento);

  $actualizar__plan__fotos = "UPDATE fotos__del__vehiculo SET nombre_paquete  = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__plan__fotos);

  $actualizar__plan__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET nombre_paquete  = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__plan__informacion);
  
  $actualizar__plan__seguridad = "UPDATE seguridad__del__vehiculo SET nombre_paquete  = '$plan__gratis'  WHERE id_usuario = '$id__usuario'";
  $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__plan__seguridad);

  if($ejecutar__consulta && $ejecutar__actualizacion__diseño && $ejecutar__actualizacion__contacto && $ejecutar__actualizacion__equipamiento &&
$ejecutar__actualizacion__fotos && $ejecutar__actualizacion__informacion && $ejecutar__actualizacion__seguridad){
 echo  json_encode('ok');
}

mysqli_close($conexion__db__accent);
}
insertarInfoPlanGratis();
?>