<?php
function mostrarComentarios(){
 include'conexion-db-accent.php';
$id__publicacion =  isset($_POST['id-publicacion']) ? $_POST['id-publicacion'] : '';
$id__usuario =  isset($_POST['id-usuario']) ? $_POST['id-usuario'] : '';
  $seleccionar__comentarios = "SELECT * FROM comentario WHERE id_publicacion = '$id__publicacion'";
  $ejecutar__seleccion = mysqli_query($conexion__db__accent,$seleccionar__comentarios);
  $html = array();
  if(mysqli_num_rows($ejecutar__seleccion) > 0){
    while($fila__comentarios = mysqli_fetch_array($ejecutar__seleccion)){
      $html[] = $fila__comentarios;
    }
  }
echo json_encode($html);
}
mostrarComentarios();
?>
