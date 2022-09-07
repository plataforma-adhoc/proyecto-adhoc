<?php
function cerrar__sesion(){
    include'conexion-db-accent.php';
    $id__conductor = isset($_GET['id']) ? $_GET['id']: '';
    if($id__conductor){
            session_destroy();
            header('Location:./login-conductor');

    }else{
        header('Location:./login-conductor');

    }
    
}

cerrar__sesion();
?>