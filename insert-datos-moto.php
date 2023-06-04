<?php
function guardarDatosDeLaMoto(){
include'conexion-db-accent.php'; 
session_start();
$nombre = mysqli_real_escape_string($conexion__db__accent,isset($_POST['nombre']) ? $_POST['nombre'] :'');
$avatar= mysqli_real_escape_string($conexion__db__accent,isset($_POST['avatar']) ? $_POST['avatar'] :'');
$idUsuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['idUsuario']) ? $_POST['idUsuario'] :'');
$marca = mysqli_real_escape_string($conexion__db__accent,isset($_POST['marca']) ? $_POST['marca'] :'');
$modelo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['modelo']) ? $_POST['modelo'] :'');
$color = mysqli_real_escape_string($conexion__db__accent,isset($_POST['color']) ? $_POST['color'] :'');
$fechaFabricacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['fechaFabricacion']) ? $_POST['fechaFabricacion'] :'');
$matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['matricula']) ? $_POST['matricula'] :'');
$ciudadMatricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-matricula']) ? $_POST['ciudad-matricula'] :'');
$ciudadVenta = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-venta']) ? $_POST['ciudad-venta'] :'');
$propietario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['propietario']) ? $_POST['propietario'] :'');
$kilometros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['kilometros']) ? $_POST['kilometros'] :'');
$precio = mysqli_real_escape_string($conexion__db__accent,isset($_POST['precio']) ? $_POST['precio'] :'');
$tipo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['tipo']) ? $_POST['tipo'] :'');
$cilindraje = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cilindraje']) ? $_POST['cilindraje'] :'');
$descripcion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['descripcion']) ? $_POST['descripcion'] :'');


if($nombre ==="" || $avatar==="" || $idUsuario==="" || $marca==="" || $modelo==="" || $color==="" ||$fechaFabricacion==="" || 
$matricula==="" || $ciudadMatricula==="" || $ciudadVenta==="" || $propietario==="" || $kilometros==="" || $precio==="" || $tipo==="" ||
$cilindraje==="" | $descripcion===""){
 echo json_encode('error');
}else{
    $datosDeLaMoto = array(
   'nombre' => $nombre,'avatar'=>$avatar, 'id'=>$idUsuario,'marca'=>$marca,'modelo'=>$modelo,'color'=>$color,'fechaFabricacion'=>$fechaFabricacion,
'matricula'=>$matricula,'ciudadMatricula'=>$ciudadMatricula,'ciudadVenta'=>$ciudadVenta,'propietario'=>$propietario,'kilometros'=>$kilometros,
'precio'=>$precio,'tipo'=>$tipo,'cilindraje'=>$cilindraje,'descripcion'=>$descripcion);
$guardarDatos = $_SESSION['datosDeLaMoto'] = $datosDeLaMoto;
if($guardarDatos){
    echo json_encode('ok');

}
}



}


guardarDatosDeLaMoto();
?>