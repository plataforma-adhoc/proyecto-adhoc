<?php
include'conexion/conexion-db-accent.php';

$direccion = isset($_POST['direccion'])? $_POST['direccion'] : '';
$id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] : '';
$id__usuario = isset($_POST['idUsuario']) ? $_POST['idUsuario'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
$dia = isset($_POST['dia']) ? $_POST['dia'] : '';


if($direccion ==="" || $hora ==="" || $dia ===""){
 echo json_encode('Necesitamos estos datos para poder finalizar el proceso');
}else{
    $insertar__datos = "INSERT INTO   datos__inicio__recorrido (direccion_inicio,id_usuario,id_conductor, hora_inicio,fecha_inicio) VALUES('$direccion','$id__usuario','$id__conductor','$hora','$dia')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos);
    if($ejecutar__consulta){
      echo json_encode('true');
    
    }else{
    echo json_encode('false'); 
    }

}



?>