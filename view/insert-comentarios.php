<?php   
include'conexion/conexion-db-accent.php';

$respuesta = isset($_POST['respuesta']) ? $_POST['respuesta'] :'';
$id__usuario= isset($_POST['idUsuario']) ? $_POST['idUsuario'] :'';
$id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] :'';

if($respuesta ===""){

}else{
    $insertar__comentario = "INSERT INTO comentarios(comentario,id_usuario,id_conductor) VALUES('$respuesta','$id__usuario','$id__conductor')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__comentario);
    if($ejecutar__consulta){
        echo json_encode('true');

    }


    $id = mysqli_insert_id($conexion__db__accent);
    if($id > 0){
        $insertar__notificacion = "INSERT INTO  notificaciones__conductor(id_usuario,id_conductor,leido) VALUES('$id__usuario','$id__conductor','0')";
        $ejecutar__consulta__notificacion = mysqli_query($conexion__db__accent,$insertar__notificacion);
        if($ejecutar__consulta__notificacion){
          
        }

    }
}