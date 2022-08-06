<?php  
function insertar__inicio__recorrido(){
    include'conexion/conexion-db-accent.php';
    if(isset($_POST['iniciar-servicio'])){
        $id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor']: '';
        $estado__solicitud = "Iniciado";
        
        $insert__datos__recorrido = "UPDATE datos__inicio__recorrido SET estado_recorrido ='$estado__solicitud'	WHERE id_conductor = '$id__conductor'";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$insert__datos__recorrido);
        if($ejecutar__consulta){
         header("Location: ./mis-solicitudes?idc=$id__conductor");
         
        }else{
          echo   json_encode('false');
        
        }

    }
}

insertar__inicio__recorrido();



