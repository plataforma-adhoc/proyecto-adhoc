<?php

include'conexion/conexion-db-accent.php';
if(isset($_POST['action'])){
    $action = $_POST['action'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;
    if($action == 'eliminar'){
        $consulta__eliminar = "DELETE * FROM detalles__de__la__compra WHERE id = '$id' ";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__eliminar);
        
        if($ejecutar__consulta){
            echo json_encode('true');

        }else{
            echo json_encode('false');

           
        }
    }

    
   
 

}

// function eliminar($id){
//     if($id > 0){
//         $consulta__eliminar = "DELETE * FROM detalles__de__la__compra WHERE id = '$id';";
//         $ejecutar__consuta = mysqli_query($conexion__db__accent,$consulta__eliminar);
//         if(mysqli_num_rows($ejecutar__consuta) > 0){
//             return true;
//         }else{
//             return false;
//         }
//     }
// }


?>