<?php  

function conectarse(){
    include'conexion-db-accent.php';
    $id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] : '';
    $estatus = 'disponible';
    
    if($id__conductor !== ""){
        $actualizacion__estado = "UPDATE conductores SET status = '$estatus' WHERE id_conductor = '$id__conductor' LIMIT 1";
        $ejecutar__solicitud = mysqli_query($conexion__db__accent,$actualizacion__estado);
        if($ejecutar__solicitud){
            echo json_encode('true');
        }
    
    }
}

conectarse();
?>