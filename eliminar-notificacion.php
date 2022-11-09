<?php
include'conexion-db-accent.php';
$id__notificacion = isset($_GET['id']) ? $_GET['id'] : '';

if($id__notificacion){
 $consulta__eliminar__notificacion = "DELETE  FROM notificaciones__conductor WHERE id_notificacion = '$id__notificacion'";
 $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__eliminar__notificacion);
 if($ejecutar__consulta){
    header("Location: notificaciones");
 }else{
    echo 'no existe';
 }
}



?>