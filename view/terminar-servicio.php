<?php

function terminar__servicio(){
    include'conexion/conexion-db-accent.php';
    if(isset($_POST['terminar-servicio'])){
        $id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor']: '';
        $estado__solicitud = "Recorrido terminado";
    
        $insert__datos__recorrido = "UPDATE datos__inicio__recorrido SET estado_recorrido ='$estado__solicitud'	WHERE id_conductor = '$id__conductor'";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insert__datos__recorrido);
    if($ejecutar__consulta){
     echo json_encode('true');
     header("Location: ./mis-solicitudes?idc=$id__conductor");
    }else{
      echo   json_encode('false');
    
    }
    }
}

terminar__servicio();
?>