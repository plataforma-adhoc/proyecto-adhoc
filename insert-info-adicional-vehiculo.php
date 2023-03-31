<?php
include'conexion-db-accent.php';  
session_start();
$id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
$airbag__delatero = mysqli_real_escape_string($conexion__db__accent,isset($_POST['airbag-delatero']) ? $_POST['airbag-delatero'] :'');
$airbag__trasero = mysqli_real_escape_string($conexion__db__accent,isset($_POST['airbag-trasero']) ? $_POST['airbag-trasero'] :'');
$bloqueo__central = mysqli_real_escape_string($conexion__db__accent,isset($_POST['bloqueo-central']) ? $_POST['bloqueo-central'] :'');
$alarma = mysqli_real_escape_string($conexion__db__accent,isset($_POST['alarma']) ? $_POST['alarma'] :'');
$control__ascenso = mysqli_real_escape_string($conexion__db__accent,isset($_POST['control-ascenso']) ? $_POST['control-ascenso'] :'');
$control__descenso = mysqli_real_escape_string($conexion__db__accent,isset($_POST['control-descenso']) ? $_POST['control-descenso'] :'');
$sensores__delateros = mysqli_real_escape_string($conexion__db__accent,isset($_POST['sensores-delateros']) ? $_POST['sensores-delateros'] :'');
$sensor__reversa = mysqli_real_escape_string($conexion__db__accent,isset($_POST['sensor-reversa']) ? $_POST['sensor-reversa'] :'');
$punto__ciego = mysqli_real_escape_string($conexion__db__accent,isset($_POST['sensor-punto-ciego']) ? $_POST['sensor-punto-ciego'] :'');
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
$estado__anuncio = 0;
$datos__adicionales = array(
  'id' => $id__usuario,'airbag_delantero'=>$airbag__delatero,'airbag_trasero'=>$airbag__delatero,'bloqueo_central'=>$bloqueo__central,'alarma'=>$alarma,
  'control_acsenso'=>$control__ascenso,'control_decsenso'=>$control__descenso,'sensores_delanteros'=>$sensores__delateros,'sensor_reversa'=>$sensor__reversa,'punto_ciego'=>$punto__ciego,
  'camara_reversa'=>$camara__reversa,'aire_acondicionado'=>$aire__acondicionado,'android_auto'=>$andorid__auto,'apple_car_play'=>$apple__car__play,'bluetooh'=>$bluetoot,'espejos_electricos'=>$espejos__electricos,'exploradoras'=>$exploradoras,'vidrios_electricos'=>$vidrios__electricos,'techo_corredizo'=>$techo__corredizo,'techo_panoramico'=>$techo__panoramico,
'parqueo_automatico'=>$parqueo__automatico,'desempañador_trasero'=>$desempañador__trasero,'gps'=>$gps,'rines_de_lujo'=>$rines__de__lujo,'radio_cassete'=>$radio__cassette,
'radio_cd'=>$radio__cd,'pantalla_video'=>$pantalla__de__video);
  
  $info__adicional = $_SESSION['info-adicional'] = $datos__adicionales;
  if($info__adicional){
      echo json_encode('ok');
  
  }
// $insertar__datos__seguridad = "INSERT INTO seguridad__del__vehiculo (id_usuario,air_bag_delantero,air_bag_trasero,bloqueo_central,alarma,control_de_ascenso,control_de_descenso,sensor_delantero,sensor_reversa,sensor_punto_ciego,camara_reversa,estado_anuncio)
// VALUES('$id__usuario','$airbag__delatero','$airbag__trasero','$bloqueo__central','$alarma','$control__ascenso','$control__descenso','$sensores__delateros','$sensor__reversa','$punto__ciego','$camara__reversa','$estado__anuncio')";
// $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$insertar__datos__seguridad);

// $insertar__datos__equipamiento = "INSERT INTO equipamiento__del__vehiculo(id_usuario,aire_acondicionado,android_auto,apple_car_play,bluetooth,espejos_electrico,exploradoras,vidrios_electricos,techo_corredizo,techo_panoramico, parqueo_automatico,desempaniador_trasero,gps,estado_anuncio)
// VALUES('$id__usuario','$aire__acondicionado','$andorid__auto','$apple__car__play','$bluetoot','$espejos__electricos','$exploradoras','$vidrios__electricos',
// '$techo__corredizo','$techo__panoramico','$parqueo__automatico','$desempañador__trasero','$gps','$estado__anuncio')";
// $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$insertar__datos__equipamiento);

// $insertar__datos__estilo = "INSERT INTO disenio__y__estilo__vehiculo(id_usuario,rines_de_lujo,radio_cassette,radio_cd,pantalla_de_video,estado_anuncio)
// VALUES('$id__usuario','$rines__de__lujo','$radio__cassette','$radio__cd','$pantalla__de__video','$estado__anuncio')";
// $ejecutar__consulta__estilos = mysqli_query($conexion__db__accent,$insertar__datos__estilo);

// if($ejecutar__consulta__seguridad && $ejecutar__consulta__equipamiento && $ejecutar__consulta__estilos){
//   echo json_encode('ok');
// }