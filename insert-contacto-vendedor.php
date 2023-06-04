<?php
function guardarDatosDecontacto(){
include'conexion-db-accent.php';
session_start();  
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$Whatsapp__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-uno']) ? $_POST['Whatsapp-uno'] :'');
$email= mysqli_real_escape_string($conexion__db__accent,isset($_POST['email']) ? $_POST['email'] :'');
$telefono__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-uno']) ? $_POST['telefono-uno'] :'');
$telefono__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-dos']) ? $_POST['telefono-dos'] :'');
if($id__usuario && $Whatsapp__uno && $email && $telefono__uno && $telefono__dos ){
    $datos__contacto =  array(
    'id'=>$id__usuario,'Whatsapp_uno'=>$Whatsapp__uno,'email'=>$email,'telefono_uno'=>$telefono__uno,'telefono_dos'=>$telefono__dos);
    $datos__de__contacto = $_SESSION['datos-contacto'] = $datos__contacto;
    if($datos__contacto){
    echo json_encode('ok');
    }

}else{
    echo json_encode('error');  
}

}
guardarDatosDecontacto();
?>