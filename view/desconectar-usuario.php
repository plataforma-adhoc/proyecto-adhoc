<?php
function cerrar__sesion(){
    include'conexion/conexion-db-accent.php';
    $id__usuario = isset($_GET['id']) ? $_GET['id']: '';
    if($id__usuario){
        echo $id__usuario;
            session_unset();
            header('Location:./login-usuario');
            exit;

    }else{
        header('Location:./login-usuario');
        

    }
    

}

cerrar__sesion();
?>