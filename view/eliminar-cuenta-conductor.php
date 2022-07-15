<?php  

function eliminar__cuenta(){
    include'conexion/conexion-db-accent.php';
    $id = $_GET['id'] ? $_GET['id'] : '';
    if(!$id){
      header('Location: ./dashboard-conductor');
    }else{
    $consulta__eliminar__cuenta = "DELETE  FROM conductores WHERE id_conductor = '$id' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__eliminar__cuenta);
    if($resultado__consulta){
        header('Location: ./conductor');
    }
    }

}

eliminar__cuenta();


?>