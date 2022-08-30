<?php
function insert__sugerencias(){
    include'conexion/conexion-db-accent.php';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $sugerencia = isset($_POST['sugerencia']) ? $_POST['sugerencia'] : '';

    
    if($nombre ==="" || $email ==="" || $sugerencia ===""){
    echo json_encode('campos vacios');
    }else{
        $insertar__sugerencia = "INSERT INTO sugerencias (nombre,email,sugerencia) VALUE('$nombre','$email','$sugerencia')";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__sugerencia);

        if($ejecutar__consulta){
          echo json_encode('true');
        }
    }

}


insert__sugerencias();


