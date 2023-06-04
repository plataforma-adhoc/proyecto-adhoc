<?php
function actualizarInfonMoto(){
include'conexion-db-accent.php';  
$idUsuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$idPublicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$marca = mysqli_real_escape_string($conexion__db__accent,isset($_POST['marca']) ? $_POST['marca'] :'');
$modelo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['modelo']) ? $_POST['modelo'] :'');
$color = mysqli_real_escape_string($conexion__db__accent,isset($_POST['color']) ? $_POST['color'] :'');
$fechaFabricacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['fechaFabricacion']) ? $_POST['fechaFabricacion'] :'');
$matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['matricula']) ? $_POST['matricula'] :'');
$cuidadRegistroMatricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cuidadRegistroMatricula']) ? $_POST['cuidadRegistroMatricula'] :'');
$ciudadVenta = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudadVenta']) ? $_POST['ciudadVenta'] :'');
$propietario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['propietario']) ? $_POST['propietario'] :'');
$kilometros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['kilometros']) ? $_POST['kilometros'] :'');
$precio = mysqli_real_escape_string($conexion__db__accent,isset($_POST['precio']) ? $_POST['precio'] :'');
$tipo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['tipo']) ? $_POST['tipo'] :'');
$cilindraje = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cilindraje']) ? $_POST['cilindraje'] :'');
$descripcion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['descripcion']) ? $_POST['descripcion'] :'');


    $actualizarInfoMoto = "UPDATE informacion__de__la__moto__en__venta SET marca ='$marca',modelo = '$modelo',color='$color',
    fechaFabricacion = '$fechaFabricacion',matricula ='$matricula',ciudadRegistroMatricula ='$cuidadRegistroMatricula',ciudadDeVenta ='$ciudadVenta',propietario='$propietario',
    kilometros ='$kilometros', precio ='$precio', tipo ='$tipo',cilindraje  ='$cilindraje',descripcion ='$descripcion' WHERE idPublicacionMoto  ='$idPublicacion' AND idUsuario = '$idUsuario'";
    $ejecutarConsulta = mysqli_query($conexion__db__accent,$actualizarInfoMoto);
    if($ejecutarConsulta){
     echo json_encode('ok');
    
     }else{
     echo json_encode('error');

     }

}
actualizarInfonMoto();
?>