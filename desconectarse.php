<?php

function desconectarse(){
    include'conexion-db-accent.php';
    $id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] : '';
    $estatus = 'No disponible';
    
    if($id__conductor){    
        $actualizacion__estado = "UPDATE conductores SET status = '$estatus' WHERE id_conductor = '$id__conductor' LIMIT 1";
        $ejecutar__solicitud = mysqli_query($conexion__db__accent,$actualizacion__estado);
        if($ejecutar__solicitud){
            echo json_encode('true');
        }else{
            echo json_encode('false');

        }
    }
  
}

desconectarse();