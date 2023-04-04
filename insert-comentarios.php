<?php
function InsertarComentarios(){
 include'conexion-db-accent.php';
$id__publicacion =  isset($_POST['id-publicacion']) ? $_POST['id-publicacion'] : '';
$id__usuario =  isset($_POST['id-usuario']) ? $_POST['id-usuario'] : '';
$caja__texto =  isset($_POST['caja-texto']) ? $_POST['caja-texto'] : '';
$tipo =  isset($_POST['comentario']) ? $_POST['comentario'] : '';
if( $id__publicacion != ""  &&  $caja__texto !="" && $id__usuario !=""){

    $insertar__datos =  "INSERT INTO comentario(id_publicacion,id_usuario, comentario,tipo) VALUES('$id__publicacion','$id__usuario','$caja__texto','$tipo')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos);
    if($ejecutar__consulta){
        $leido = 0;
        $insertar__datos__notificacion = "INSERT INTO notificaciones(id_publicacion,id_usuario,leido)VALUES('$id__publicacion','$id__usuario','$leido')";
        $ejecutar__insercion = mysqli_query($conexion__db__accent,$insertar__datos__notificacion);
   echo json_encode('ok');
    }
}else{

}
}
?>

