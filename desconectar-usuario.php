<?php
function logout(){
    session_start();
    include'conexion-db-accent.php';
    $id__usuario = isset($_GET['id']) ? $_GET['id']: '';
    if($id__usuario){
            session_unset();
            header('Location: login-usuario');
            exit;

    }else{
        header('Location: login-usuario');
    }
}
logout();
?>