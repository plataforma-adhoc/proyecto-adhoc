<?php
function cerrar__sesion(){
    include'conexion/conexion-db-accent.php';

    $id__conductor = isset($_GET['id']) ? $_GET['id']: '';
    if($id__conductor){
            $estado = 'desconectado';
            $actaulizar__estado = mysqli_query($conexion__db__accent,"UPDATE conductores SET status = '$estado' WHERE id_conductor = '$id__conductor'");
            session_destroy();
            header('Location:./login-conductor');

    }else{
        header('Location:./login-conductor');

    }
    
}

cerrar__sesion();
?>