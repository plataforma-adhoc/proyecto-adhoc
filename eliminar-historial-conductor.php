<?php

include'conexion-db-accent.php';
$id= isset($_GET['id']) ? $_GET['id'] : '';

if($id){
 $consulta__eliminar= "DELETE  FROM detalles__de__la__compra WHERE id = '$id'";
 $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__eliminar);
 if($ejecutar__consulta){
    header("Location: historial-conductor");
    echo "ya lo hemos borrado";
 }else{
    echo 'no existe';
 }
}




?>