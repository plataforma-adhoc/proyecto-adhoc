<?php   
include'conexion-db-accent.php';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] :'';
$comentario = isset($_POST['areaMensaje']) ? $_POST['areaMensaje'] :'';
$id__usuario= isset($_POST['idUsuario']) ? $_POST['idUsuario'] :'';
$id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] :'';
$nombre__conductor = isset($_POST['nombreConductor']) ? $_POST['nombreConductor'] :'';
$avatar__conductor = isset($_POST['avatar']) ? $_POST['avatar'] :'';




    $insertar__comentario = "INSERT INTO comentario__usuario(nombre,comentario,id_usuario,id_conductor) VALUES('$nombre','$comentario','$id__usuario','$id__conductor')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__comentario);
    if($ejecutar__consulta){
        echo json_encode('true');

    }


    $id = mysqli_insert_id($conexion__db__accent);
    if($id > 0){
        $insertar__notificacion = "INSERT INTO  notificaciones__usuario(id_usuario,id_conductor,nombre_conductor,avatar,leido) VALUES('$id__usuario','$id__conductor','$nombre__conductor','$avatar__conductor','0')";
        $ejecutar__consulta__notificacion = mysqli_query($conexion__db__accent,$insertar__notificacion);
        if($ejecutar__consulta__notificacion){
          
        }

    }
    $actualizar__estado__recorrido = "UPDATE datos__inicio__recorrido SET status_2 =  '1' WHERE id_usuario = '$id__usuario '";
    $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__estado__recorrido);
