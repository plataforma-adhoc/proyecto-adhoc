<?php
function insertarSugerencias(){
    include'conexion-db-accent.php';
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $sugerencia = isset($_POST['sugerencia']) ? $_POST['sugerencia'] : '';

    
    if($nombre ==="" || $email ==="" || $sugerencia ===""){
    echo json_encode('Los campos estan vacios');
    }else{
        $insertar__sugerencia = "INSERT INTO sugerencias (nombre,email,sugerencia) VALUE('$nombre','$email','$sugerencia')";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__sugerencia);

        if($ejecutar__consulta){
          echo json_encode('true');
        }
    }
}
insertarSugerencias();


