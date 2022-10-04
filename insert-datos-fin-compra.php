<?php
include'conexion-db-accent.php';

$direccion = isset($_POST['direccion'])? $_POST['direccion'] : '';
$id__usuario = isset($_POST['idUsuario']) ? $_POST['idUsuario'] : '';
$id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] : '';
$hora = isset($_POST['hora']) ? $_POST['hora'] : '';
$dia = isset($_POST['dia']) ? $_POST['dia'] : '';
$nombre = isset($_POST['nombre']) ? $_POST['nombre']:'';
$primer__apellido = isset($_POST['primerApellido']) ? $_POST['primerApellido']:'';
$segundo__apellido = isset($_POST['segundoApellido']) ? $_POST['segundoApellido']:'';
$documento = isset($_POST['documento']) ? $_POST['documento']:'';
$telefono = isset($_POST['telefono']) ? $_POST['telefono']:'';
$avatar= isset($_POST['avatar']) ? $_POST['avatar']:'';


$nombre__usuario = isset($_POST['nombreUsuario']) ? $_POST['nombreUsuario']:'';
$primer__apellido__usuario  = isset($_POST['primerApellidoUsuario']) ? $_POST['primerApellidoUsuario']:'';
$segundo__apellido__usuario  = isset($_POST['segundoApellidoUsuario']) ? $_POST['segundoApellidoUsuario']:'';
$documento__usuario  = isset($_POST['documentoUsuario']) ? $_POST['documentoUsuario']:'';
$telefono__usuario  = isset($_POST['telefonoUsuario']) ? $_POST['telefonoUsuario']:'';
$avatar__usuario = isset($_POST['avatarUsuario']) ? $_POST['avatarUsuario']:'';

if($direccion ==="" || $hora ==="" || $dia ===""){
 echo json_encode('Necesitamos estos datos para poder finalizar el proceso');
}else{
    $insertar__datos = "INSERT INTO   datos__inicio__recorrido (direccion_inicio,id_usuario,id_conductor,nombre_conductor,primer_apellido,segundo_apellido,	numero_documento,numero_telefono,avatar,
    nombre_usuario,primer_apellido_usuario,segundo_apellido_usuario,documento_usuario,telefono_usuario,avatar_usuario, hora_inicio,fecha_inicio)
     VALUES('$direccion','$id__usuario','$id__conductor','$nombre','$primer__apellido','$segundo__apellido','$documento','$telefono','$avatar',
     '$nombre__usuario','$primer__apellido__usuario','$segundo__apellido__usuario','$documento__usuario','$telefono__usuario','$avatar__usuario','$hora','$dia')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos);
    if($ejecutar__consulta){
      echo json_encode('true');
    
    }else{
    echo json_encode('false'); 
    }

}



?>