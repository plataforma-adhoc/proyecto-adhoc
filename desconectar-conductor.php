<?php
function cerrar__sesion(){
    include'conexion-db-accent.php';
    session_start();
    $id__conductor = isset($_GET['id']) ? $_GET['id']: '';
    if($id__conductor){
            session_unset();
            header('Location:login-conductor.php');

    }else{
        header('Location: login-conductor.php');

    }
    
}

cerrar__sesion();
?>