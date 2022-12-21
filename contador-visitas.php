<?php
 include'conexion-db-accent.php';
$id__publicacion = isset($_POST['id']) ? $_POST['id'] : '';
$click = isset($_POST['click']) ? isset($_POST['click']) : '';
if($id__publicacion && $click){
  $consulta__detalles__usado = "SELECT contador_click FROM informacion__del__vehiculo__en__venta WHERE id_publicacion_vehiculo = '$id__publicacion' ";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__detalles__usado);
  if(mysqli_num_rows($ejecutar__consulta) > 0){
    $fila__contador = mysqli_fetch_array($ejecutar__consulta);
    $contador = $fila__contador['contador_click']+ 1;
    $actualizar__click = "UPDATE informacion__del__vehiculo__en__venta SET 	contador_click = '$contador' WHERE id_publicacion = '$id__publicacion'";
    $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__click);
    if($ejecutar__actualizacion){
     echo json_encode('ok');
    }

  }
}

?>