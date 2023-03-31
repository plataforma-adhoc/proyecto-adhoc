<?php  include'conexion-db-accent.php';  
session_start();

$nombre__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['nombre']) ? $_POST['nombre'] :'');
$avatar = mysqli_real_escape_string($conexion__db__accent,isset($_POST['avatar']) ? $_POST['avatar'] :'');

$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$marca = mysqli_real_escape_string($conexion__db__accent,isset($_POST['marca']) ? $_POST['marca'] :'');
$modelo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['modelo']) ? $_POST['modelo'] :'');
 $color = mysqli_real_escape_string($conexion__db__accent,isset($_POST['color']) ? $_POST['color'] :'');
$fecha__fabricacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['fechaFabricacion']) ? $_POST['fechaFabricacion'] :'');
$matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['matricula']) ? $_POST['matricula'] :'');
$ciudad__matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-matricula']) ? $_POST['ciudad-matricula'] :'');
$ciudad__venta = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-venta']) ? $_POST['ciudad-venta'] :'');
$propietario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['propietario']) ? $_POST['propietario'] :'');

$kilometros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['kilometros']) ? $_POST['kilometros'] :'');
$precio__vehiculo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['precio-vehiculo']) ? $_POST['precio-vehiculo'] :'');
$puertas = mysqli_real_escape_string($conexion__db__accent,isset($_POST['puertas']) ? $_POST['puertas'] :'');
$combustible = mysqli_real_escape_string($conexion__db__accent,isset($_POST['combustible']) ? $_POST['combustible'] :'');
$caja = mysqli_real_escape_string($conexion__db__accent,isset($_POST['caja']) ? $_POST['caja'] :'');
$direccion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['direccion-vehiculo']) ? $_POST['direccion-vehiculo'] :'');
$cilindraje = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cilindraje']) ? $_POST['cilindraje'] :'');
$descripcion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['descripcion']) ? $_POST['descripcion'] :'');
// $estado__anuncio = 0;

$datos = array(
'nombre' => $nombre__usuario,'avatar' =>$avatar,'id' => $id__usuario,'marca'=>$marca,'modelo'=>$modelo,'color'=>$color,'fecha_fabricacion'=>$fecha__fabricacion,
'matricula'=>$matricula,'ciudad_matricula'=>$ciudad__matricula,'ciudad_venta'=>$ciudad__venta,'propietario'=>$propietario,'kilometros'=>$kilometros,
'precio'=>$precio__vehiculo,'puertas'=>$puertas,'combustible'=>$combustible,'caja'=>$caja,'direccion'=>$direccion,'cilindraje'=>$cilindraje,'descripcion'=>$descripcion);

$informacion__obligatoria = $_SESSION['datos-obligatorios'] = $datos;
if($informacion__obligatoria){
    echo json_encode('ok');
}

// $insertar__datos__obligatorio = "INSERT INTO  informacion__del__vehiculo__en__venta(nombre_vendedor,foto_vendedor,id_usuario,marca_del_vehiculo,modelo_vehiculo,color_vehiculo,anio_fabricacion,matricula_del_vehiculo,ciudad_registro_matricula,ciudad_de_venta,unico_propietario,kilometros_del_vehiculo,
// precio_del_vehiculo,numero_puertas,tipo_combustible,tipo_de_caja,tipo_de_direccion,cilindraje_vehiculo,descripcion_vehiculo,estado_anuncio)
// VALUES('$nombre__usuario','$avatar','$id__usuario','$marca','$modelo','$color','$fecha__fabricacion','$matricula','$ciudad__matricula','$ciudad__venta','$propietario','$kilometros',
// '$precio__vehiculo','$puertas','$combustible','$caja','$direccion','$cilindraje','$descripcion','$estado__anuncio')";

// $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos__obligatorio);
// if($ejecutar__consulta){
//     echo  json_encode('ok');
  
// }




?>