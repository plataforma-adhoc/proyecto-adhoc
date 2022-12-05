<?php
include'conexion-db-accent.php'; 
$id__usuario = isset($_POST['id']) ? $_POST['id']: '';
$eliminar__datos__diseño ="DELETE  FROM disenio__y__estilo__vehiculo WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__diseño = mysqli_query($conexion__db__accent,$eliminar__datos__diseño);

$eliminar__datos__contacto ="DELETE  FROM contacto__vendedor WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__contacto = mysqli_query($conexion__db__accent,$eliminar__datos__contacto);

$eliminar__datos__equipamiento ="DELETE  FROM equipamiento__del__vehiculo WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__equipamiento = mysqli_query($conexion__db__accent,$eliminar__datos__equipamiento);

$eliminar__datos__fotos="DELETE  FROM fotos__del__vehiculo WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__fotos = mysqli_query($conexion__db__accent,$eliminar__datos__fotos);

$eliminar__datos__informacion ="DELETE  FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__informacion = mysqli_query($conexion__db__accent,$eliminar__datos__informacion);


$eliminar__datos__seguridad ="DELETE  FROM seguridad__del__vehiculo WHERE id_usuario = '$id__usuario'";
$ejecutar__eliminacion__seguridad = mysqli_query($conexion__db__accent,$eliminar__datos__seguridad);

if($ejecutar__eliminacion__diseño && $ejecutar__eliminacion__contacto && $ejecutar__eliminacion__equipamiento && $ejecutar__eliminacion__fotos &&
$ejecutar__eliminacion__informacion && $ejecutar__eliminacion__seguridad){
echo json_encode('true');
}
?>