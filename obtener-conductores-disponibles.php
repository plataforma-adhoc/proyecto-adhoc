<?php

include'conexion-db-accent.php';
$consulta__datos__conductor = "SELECT * FROM conductores WHERE status = 'disponible'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
$salida = [];

if(mysqli_num_rows($ejecutar__consulta) > 0){ 
     while($fila__datos__resultado = mysqli_fetch_array($ejecutar__consulta)){
    $salida[] = $fila__datos__resultado;
    
 } 
} 

 echo json_encode($salida);


