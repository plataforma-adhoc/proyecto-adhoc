<?php  

function eliminar__cuenta(){
    include'conexion-db-accent.php';
    $id = $_GET['id'] ? $_GET['id'] : '';
    if(!$id){
      header('Location: dashboard-usuario');
    }else{
    $consulta__eliminar__cuenta = "DELETE  FROM usuarios WHERE id_usuario = '$id' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__eliminar__cuenta);
    if($resultado__consulta){
        header('Location: usuario');
    }
    }

}

eliminar__cuenta();


?>