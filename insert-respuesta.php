<?php
function insertar__respuesta(){
include'conexion-db-accent.php';
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$respuesta = isset($_POST['caja-texto']) ? $_POST['caja-texto']: '';
$tipo = isset($_POST['respuesta']) ? $_POST['respuesta']: '';


if($id__usuario && $id__publicacion && $respuesta && $tipo){
  $insertar__respuesta = "INSERT INTO  comentario(id_publicacion,id_usuario, comentario,tipo)VALUES('$id__publicacion','$id__usuario','$respuesta','$tipo')";
  $ejecutar__consulta  = mysqli_query($conexion__db__accent,$insertar__respuesta);
  if($ejecutar__consulta){
    echo json_encode('ok');
  }
}
}
insertar__respuesta();
?>