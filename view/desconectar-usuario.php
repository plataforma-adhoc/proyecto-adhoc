<?php
include'layout/nav-home-usuario.php';
function cerrar__sesion(){
    include'conexion/conexion-db-accent.php';
    if($_SESSION['id_usuario'] ? $_SESSION['id_usuario'] : ''){
    header('Location:./login-usuario');
    }
        $estado = 'desconectado';
        $actaulizar__estado = mysqli_query($conexion__db__accent,"UPDATE usuarios SET status = '$estado' WHERE email = '{$_SESSION['id_usuario']}'");
        session_destroy();
        header('Location:./login-usuario');
    

}

cerrar__sesion();
?>