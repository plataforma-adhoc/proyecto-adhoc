<?php
function insert__datos__usuario(){
include'conexion-db-accent.php';

$nombre__usuario = mysqli_real_escape_string($conexion__db__accent,$_POST['nombre'] ?  $_POST['nombre']: '');
$primer__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['primerApellido'] ? $_POST['primerApellido']:'');
$segundo__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['segundoApellido'] ? $_POST['segundoApellido'] : '');
$email =  mysqli_real_escape_string($conexion__db__accent,$_POST['email'] ?  $_POST['email']: '');
$documento =  mysqli_real_escape_string($conexion__db__accent,$_POST['documento'] ? $_POST['documento'] :'');
$numero__telefono =  mysqli_real_escape_string($conexion__db__accent,$_POST['telefono'] ? $_POST['telefono'] :'');
$contraseña = password_hash($_POST['contrasena'] ? $_POST['contrasena'] : '',PASSWORD_BCRYPT);


if($nombre__usuario ==="" || $primer__apellido ==="" || $segundo__apellido ==="" || $documento ==="" || $numero__telefono ==="" || $contraseña ==="" ){
  echo json_encode('No podemos procesar tu solicidtud por falta de datos');
}else{
  $consulta__usuario__registrado = "SELECT *  FROM usuarios   WHERE email = '$email' LIMIT 1";
  $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__usuario__registrado);
  
  if(mysqli_num_rows($resultado__consulta) > 0){
    $fila = mysqli_fetch_array($resultado__consulta);
    echo json_encode('Es impsoble registar un nuevo usuario con ese email');
    
  }else{
  
    $insertar__datos = "INSERT INTO usuarios (nombre_usuario, primer_apellido, segundo_apellido, email, numero_documento, numero_telefono, contrasena) 
    VALUES ('$nombre__usuario', '$primer__apellido', '$segundo__apellido', '$email', '$documento', '$numero__telefono', '$contraseña')";
    $resultado = mysqli_query($conexion__db__accent,$insertar__datos);
    if($resultado){
      session_start();
  
  $consulta__usuario = "SELECT *  FROM usuarios   WHERE email = '$email' LIMIT 1";
  $resultado= mysqli_query($conexion__db__accent,$consulta__usuario);
  
  if(mysqli_num_rows($resultado) > 0){
    $fila__datos = mysqli_fetch_array($resultado);
    $_SESSION['id_usuario'] = $fila__datos['id_usuario'];  
    echo json_encode('true');
  }
  
    }else{
      echo json_encode('no');
    }
    
    }

}



}

insert__datos__usuario();


?>