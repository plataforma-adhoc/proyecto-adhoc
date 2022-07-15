<?php   

function actualizar__contrasena(){
include'conexion/conexion-db-accent.php';
$nueva__contrasena =$_POST['nuevaContrasena'] ? $_POST['nuevaContrasena']:'';
$contrasena__encryptada = password_hash($nueva__contrasena,PASSWORD_BCRYPT);

$id = $_POST['id'] ? $_POST['id'] : '';

if($nueva__contrasena === ""){
  echo json_encode('Ingresa un valor valido');
}else{
$actualizar__contrasena = "UPDATE usuarios SET contrasena = '$contrasena__encryptada' WHERE id_usuario = '$id'  LIMIT 1";
$resultado__insercion = mysqli_query($conexion__db__accent,$actualizar__contrasena);
if($actualizar__contrasena){
  echo json_encode('ok');
}else{
    echo json_encode('error');
}
}
}

actualizar__contrasena();
?>