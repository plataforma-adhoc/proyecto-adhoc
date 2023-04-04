<?php
function actualizarInfonVehiculo(){
include'conexion-db-accent.php';  
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$marca = mysqli_real_escape_string($conexion__db__accent,isset($_POST['marca']) ? $_POST['marca'] :'');
$modelo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['modelo']) ? $_POST['modelo'] :'');
$color = mysqli_real_escape_string($conexion__db__accent,isset($_POST['color']) ? $_POST['color'] :'');
$fecha__fabricacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['fechaFabricacion']) ? $_POST['fechaFabricacion'] :'');
$matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['matricula']) ? $_POST['matricula'] :'');
$ciudad__matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-matricula']) ? $_POST['ciudad-matricula'] :'');
$ciudad__venta = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-venta']) ? $_POST['ciudad-venta'] :'');
$propietario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['unico-propietario']) ? $_POST['unico-propietario'] :'');

$kilometros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['kilometros-vehiculo']) ? $_POST['kilometros-vehiculo'] :'');
$precio__vehiculo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['precio-vehiculo']) ? $_POST['precio-vehiculo'] :'');
$puertas = mysqli_real_escape_string($conexion__db__accent,isset($_POST['numero-puertas']) ? $_POST['numero-puertas'] :'');
$combustible = mysqli_real_escape_string($conexion__db__accent,isset($_POST['tipo-combustible']) ? $_POST['tipo-combustible'] :'');
$caja = mysqli_real_escape_string($conexion__db__accent,isset($_POST['tipo-caja']) ? $_POST['tipo-caja'] :'');
$direccion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['tipo-direccion']) ? $_POST['tipo-direccion'] :'');
$cilindraje = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cilindraje-vehiculo']) ? $_POST['cilindraje-vehiculo'] :'');
$descripcion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['descripcion']) ? $_POST['descripcion'] :'');

$actualizar__info = "UPDATE informacion__del__vehiculo__en__venta SET marca_del_vehiculo ='$marca', modelo_vehiculo = '$modelo', color_vehiculo='$color',
anio_fabricacion = '$fecha__fabricacion',	matricula_del_vehiculo='$matricula',	ciudad_registro_matricula='$ciudad__matricula', ciudad_de_venta='$ciudad__venta', unico_propietario='$propietario',
kilometros_del_vehiculo='$kilometros',precio_del_vehiculo='$precio__vehiculo',numero_puertas='$puertas',tipo_combustible='$combustible',tipo_de_caja='$caja',	tipo_de_direccion='$direccion',cilindraje_vehiculo='$cilindraje',	descripcion_vehiculo='$descripcion'
WHERE id_publicacion_vehiculo  ='$id__publicacion' AND id_usuario = '$id__usuario'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__info);
if($ejecutar__consulta){
 echo json_encode('ok');

 }
}
actualizarInfonVehiculo();
?>