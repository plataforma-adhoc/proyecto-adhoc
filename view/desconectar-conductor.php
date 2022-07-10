<?php
include'layout/nav-home-conductor.php';
function cerrar__sesion(){
    include'conexion/conexion-db-accent.php';
    if($_SESSION['id_conductor'] ? $_SESSION['id_conductor'] : ''){
    header('Location:./login-conductor');
    }
        $estado = 'desconectado';
        $actaulizar__estado = mysqli_query($conexion__db__accent,"UPDATE conductores SET status = '$estado' WHERE email = '{$_SESSION['id_conductor']}'");
        session_destroy();
        header('Location:./login-conductor');
    

}

cerrar__sesion();
?>