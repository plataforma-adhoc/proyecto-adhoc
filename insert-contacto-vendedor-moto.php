<?php
function guardarDatosDecontactoVendedor(){
include'conexion-db-accent.php';
session_start();  
$idUsuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$email= mysqli_real_escape_string($conexion__db__accent,isset($_POST['email']) ? $_POST['email'] :'');
$telefono = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono']) ? $_POST['telefono'] :'');
$Whatsapp = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp']) ? $_POST['Whatsapp'] :'');
if($idUsuario ==="" ||  $email==="" || $Whatsapp ==="" || $telefono==="" ){
    echo json_encode('error');      
}else{
    $datosContacto =  array(
    'id'=>$idUsuario,'email'=> $email,'telefono'=>$telefono,'Whatsapp'=>$Whatsapp);
    $datos__de__contacto = $_SESSION['datosContactoMoto'] = $datosContacto;
    if($datos__de__contacto){
        echo json_encode('ok');
    }
}

}
guardarDatosDecontactoVendedor();
?>