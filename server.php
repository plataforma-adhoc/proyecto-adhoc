<?php  include'conexion-db-accent.php';  



  if(!is_dir('upload')){
    mkdir('upload');
  }
  

$nombre__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['nombre']) ? $_POST['nombre'] :'');
$avatar= mysqli_real_escape_string($conexion__db__accent,isset($_POST['avatar']) ? $_POST['avatar'] :'');


$marca = mysqli_real_escape_string($conexion__db__accent,isset($_POST['marca']) ? $_POST['marca'] :'');
$modelo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['modelo']) ? $_POST['modelo'] :'');
$color = mysqli_real_escape_string($conexion__db__accent,isset($_POST['color']) ? $_POST['color'] :'');

$fecha__fabricacion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['fechaFabricacion']) ? $_POST['fechaFabricacion'] :'');
echo $fecha__fabricacion;
$matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['matricula']) ? $_POST['matricula'] :'');
$ciudad__matricula = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-matricula']) ? $_POST['ciudad-matricula'] :'');
$ciudad__venta = mysqli_real_escape_string($conexion__db__accent,isset($_POST['ciudad-venta']) ? $_POST['ciudad-venta'] :'');
$propietario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['propietario']) ? $_POST['propietario'] :'');

$kilometros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['kilometros']) ? $_POST['kilometros'] :'');
$precio__vehiculo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['precio-vehiculo']) ? $_POST['precio-vehiculo'] :'');
$combustible = mysqli_real_escape_string($conexion__db__accent,isset($_POST['combustible']) ? $_POST['combustible'] :'');
$caja = mysqli_real_escape_string($conexion__db__accent,isset($_POST['caja']) ? $_POST['caja'] :'');
$direccion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['direccion']) ? $_POST['direccion'] :'');
$cilindraje = mysqli_real_escape_string($conexion__db__accent,isset($_POST['cilindraje']) ? $_POST['cilindraje'] :'');
$airbag__delatero = mysqli_real_escape_string($conexion__db__accent,isset($_POST['airbag-delatero']) ? $_POST['airbag-delatero'] :'');
$airbag__trasero = mysqli_real_escape_string($conexion__db__accent,isset($_POST['airbag-trasero']) ? $_POST['airbag-trasero'] :'');
$bloqueo__central = mysqli_real_escape_string($conexion__db__accent,isset($_POST['bloqueo-central']) ? $_POST['bloqueo-central'] :'');
$alarma = mysqli_real_escape_string($conexion__db__accent,isset($_POST['alarma']) ? $_POST['alarma'] :'');
$control__ascenso = mysqli_real_escape_string($conexion__db__accent,isset($_POST['control-ascenso']) ? $_POST['control-ascenso'] :'');
$control__descenso = mysqli_real_escape_string($conexion__db__accent,isset($_POST['control-descenso']) ? $_POST['control-descenso'] :'');
$sensores__delateros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['sensores-delateros']) ? $_POST['sensores-delateros'] :'');
$sensor__reversa = mysqli_real_escape_string($conexion__db__accent,isset($_POST['sensor-reversa']) ? $_POST['sensor-reversa'] :'');
$punto__ciego = mysqli_real_escape_string($conexion__db__accent,isset($_POST['punto-ciego']) ? $_POST['punto-ciego'] :'');
$camara__reversa = mysqli_real_escape_string($conexion__db__accent,isset($_POST['camara-reversa']) ? $_POST['camara-reversa'] :'');
$aire__acondicionado = mysqli_real_escape_string($conexion__db__accent,isset($_POST['aire-acondicionado']) ? $_POST['aire-acondicionado'] :'');
$andorid__auto = mysqli_real_escape_string($conexion__db__accent,isset($_POST['andorid-auto']) ? $_POST['andorid-auto'] :'');
$apple__car__play = mysqli_real_escape_string($conexion__db__accent,isset($_POST['apple-car-play']) ? $_POST['apple-car-play'] :'');
$bluetoot = mysqli_real_escape_string($conexion__db__accent,isset($_POST['bluetoot']) ? $_POST['bluetoot'] :'');
$espejos__electricos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['espejos-electricos']) ? $_POST['espejos-electricos'] :'');
$exploradoras = mysqli_real_escape_string($conexion__db__accent,isset($_POST['exploradoras']) ? $_POST['exploradoras'] :'');
$vidrios__electricos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['vidrios-electricos']) ? $_POST['vidrios-electricos'] :'');
$techo__corredizo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['techo-corredizo']) ? $_POST['techo-corredizo'] :'');
$techo__panoramico = mysqli_real_escape_string($conexion__db__accent,isset($_POST['techo-panoramico']) ? $_POST['techo-panoramico'] :'');
$parqueo__automatico = mysqli_real_escape_string($conexion__db__accent,isset($_POST['parqueo-automatico']) ? $_POST['parqueo-automatico'] :'');
$desempañador__trasero = mysqli_real_escape_string($conexion__db__accent,isset($_POST['desempañador-trasero']) ? $_POST['desempañador-trasero'] :'');
$gps = mysqli_real_escape_string($conexion__db__accent,isset($_POST['gps']) ? $_POST['gps'] :'');
$rines__de__lujo = mysqli_real_escape_string($conexion__db__accent,isset($_POST['rines-de-lujo']) ? $_POST['rines-de-lujo'] :'');
$radio__cassette = mysqli_real_escape_string($conexion__db__accent,isset($_POST['radio-cassette']) ? $_POST['radio-cassette'] :'');
$radio__cd = mysqli_real_escape_string($conexion__db__accent,isset($_POST['radio-cd']) ? $_POST['radio-cd'] :'');
$pantalla__de__video = mysqli_real_escape_string($conexion__db__accent,isset($_POST['pantalla-video']) ? $_POST['pantalla-video'] :'');
$descripcion = mysqli_real_escape_string($conexion__db__accent,isset($_POST['descripcion']) ? $_POST['descripcion'] :'');
$Whatsapp__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-uno']) ? $_POST['Whatsapp-uno'] :'');
$Whatsapp__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['Whatsapp-dos']) ? $_POST['Whatsapp-dos'] :'');
$telefono__uno = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-uno']) ? $_POST['telefono-uno'] :'');
$telefono__dos = mysqli_real_escape_string($conexion__db__accent,isset($_POST['telefono-dos']) ? $_POST['telefono-dos'] :'');



  var_dump($_FILES['file']['name']);
foreach($_FILES['file']['tmp_name'] as $key => $value){
 if(file_exists($_FILES['file']['tmp_name'][$key])){
  if(move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/'.$_FILES['file']['name'][$key])){
    $ruta = 'upload/'.$_FILES['file']['name'][$key];
    
    
  }
  
}
}

$ruta__1 ='upload/'.$_FILES['file']['name'][0];
$ruta__2 ='upload/'.$_FILES['file']['name'][1];
$ruta__3 ='upload/'.$_FILES['file']['name'][2];
$ruta__4 ='upload/'.$_FILES['file']['name'][3];
$ruta__5 ='upload/'.$_FILES['file']['name'][4];
$ruta__6 ='upload/'.$_FILES['file']['name'][5];
$ruta__7 ='upload/'.$_FILES['file']['name'][6];
$ruta__8 ='upload/'.$_FILES['file']['name'][7];
$ruta__9 ='upload/'.$_FILES['file']['name'][8];
$ruta__10 ='upload/'.$_FILES['file']['name'][9];


// $insertar__imagenes = "INSERT INTO informacion__del__vehiculo__en__venta (nombre_vendedor,foto_vendedor	,marca_del_vehiculo,modelo_vehiculo,color_vehiculo,año_del_vehiculo,matricula_del_vehiculo,ciudad_registro_matricula,ciudad_de_venta,unico_propietario,	kilometros_del_vehiculo,
// precio_del_vehiculo,tipo_combustible,tipo_de_caja,tipo_de_direccion,cilindraje_vehiculo,air_bag_delantero,air_bag_trasero,bloqueo_central,
// alarma,control_de_ascenso,control_de_descenso,sensor_delantero,sensor_reversa,sensor_punto_ciego,camara_reversa,
// aire_acondicionado,android_auto,aple_car_play,bluetooth,espejos_electrico,exploradoras,vidrios_electricos,techo_corredizo,techo_panoramico,
// parqueo_automatico,desempañador_trasero,gps,rines_de_lujo,radio_cassette,radio_cd,pantalla_de_video,descripcion_vehiculo,foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10,
// whatsapp_1,whatsapp_2,telefono_1,telefono_2) 
// VALUES ('$nombre__usuario','$avatar','$marca','$modelo','$color','$fecha__fabricacion','$matricula','$ciudad__matricula','$ciudad__venta','$propietario','$kilometros',
// '$precio__vehiculo','$combustible','$caja','$direccion','$cilindraje','$airbag__delatero','$airbag__trasero','$bloqueo__central',
// '$alarma','$control__ascenso','$control__descenso','$sensores__delateros','$sensor__reversa','$punto__ciego','$camara__reversa',
// '$aire__acondicionado','$andorid__auto','$apple__car__play','$bluetoot','$espejos__electricos','$exploradoras','$vidrios__electricos',
// '$techo__corredizo','$techo__panoramico','$parqueo__automatico','$desempañador__trasero','$gps','$rines__de__lujo','$radio__cassette','$radio__cd','$pantalla__de__video',
// '$descripcion','$ruta__1','$ruta__2','$ruta__3','$ruta__4','$ruta__5','$ruta__6','$ruta__7','$ruta__8','$ruta__9','$ruta__10','$Whatsapp__uno','$Whatsapp__dos','$telefono__uno','$telefono__dos')";
// $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__imagenes);
// if($ejecutar__consulta){
// echo 'ok';
// }



$insertar = "INSERT INTO informacion__del__vehiculo__en__venta(nombre_vendedor,foto_vendedor,marca_del_vehiculo,modelo_vehiculo,color_vehiculo,anio_fabricacion,matricula_del_vehiculo,ciudad_registro_matricula,ciudad_de_venta,unico_propietario,	kilometros_del_vehiculo,
precio_del_vehiculo,tipo_combustible,tipo_de_caja,tipo_de_direccion,cilindraje_vehiculo,air_bag_delantero,air_bag_trasero,bloqueo_central,alarma,control_de_ascenso,control_de_descenso,sensor_delantero,sensor_reversa,sensor_punto_ciego,camara_reversa,
aire_acondicionado,android_auto,aple_car_play,bluetooth,espejos_electrico,exploradoras,vidrios_electricos,techo_corredizo,techo_panoramico, parqueo_automatico,desempaniador_trasero,gps,rines_de_lujo,radio_cassette,radio_cd,pantalla_de_video,descripcion_vehiculo,
foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10,whatsapp_1,whatsapp_2,telefono_1,telefono_2) 
VALUES('$nombre__usuario','$avatar','$marca','$modelo','$color','$fecha__fabricacion','$matricula','$ciudad__matricula','$ciudad__venta','$propietario','$kilometros',
'$precio__vehiculo','$combustible','$caja','$direccion','$cilindraje','$airbag__delatero','$airbag__trasero','$bloqueo__central','$alarma','$control__ascenso','$control__descenso','$sensores__delateros','$sensor__reversa','$punto__ciego','$camara__reversa',
'$aire__acondicionado','$andorid__auto','$apple__car__play','$bluetoot','$espejos__electricos','$exploradoras','$vidrios__electricos',
'$techo__corredizo','$techo__panoramico','$parqueo__automatico','$desempañador__trasero','$gps','$rines__de__lujo','$radio__cassette','$radio__cd','$pantalla__de__video','$descripcion',
'$ruta__1','$ruta__2','$ruta__3','$ruta__4','$ruta__5','$ruta__6','$ruta__7','$ruta__8','$ruta__9','$ruta__10','$Whatsapp__uno','$Whatsapp__dos','$telefono__uno','$telefono__dos')";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar);
if($ejecutar__consulta){
  header("Location: carros-y-camionetas.php");
   echo '
   <div class="alert alert-success d-flex align-items-center" role="alert">
   <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
   <div>
    Tu publicacion fue exitosa
   </div>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
   ';
}


  
  


 










?>