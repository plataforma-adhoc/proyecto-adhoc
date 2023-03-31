<?php
include'conexion-db-accent.php';  
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$aire__acondicionado = isset($_POST['aire-acondicionado']) ? $_POST['aire-acondicionado']: '';
$android__auto  = isset($_POST['android-auto']) ? $_POST['android-auto']: '';
$apple__car__play = isset($_POST['apple-car-play']) ? $_POST['apple-car-play']: '';
$bluetooth = isset($_POST['bluetooth']) ? $_POST['bluetooth']: '';
$espejos__electrico = isset($_POST['espejos-electrico']) ? $_POST['espejos-electrico']: '';
$exploradoras  = isset($_POST['exploradoras']) ? $_POST['exploradoras']: '';
$vidrios__electricos  = isset($_POST['vidrios-electricos']) ? $_POST['vidrios-electricos']: '';
$techo__corredizo  = isset($_POST['techo-corredizo']) ? $_POST['techo-corredizo']: '';
$techo__panoramico  = isset($_POST['techo-panoramico']) ? $_POST['techo-panoramico']: '';
$parqueo__automatico  = isset($_POST['parqueo-automatico']) ? $_POST['parqueo-automatico']: '';
$desempañador__trasero = isset($_POST['desempaniador-trasero']) ? $_POST['desempaniador-trasero']: '';
$gps = isset($_POST['gps']) ? $_POST['gps']: '';

$actualizar___datos__equipamiento = "UPDATE equipamiento__del__vehiculo SET aire_acondicionado ='$aire__acondicionado',android_auto= '$android__auto',
apple_car_play='$apple__car__play',	bluetooth='$bluetooth',espejos_electrico='$espejos__electrico',exploradoras='$exploradoras',vidrios_electricos='$vidrios__electricos',
techo_corredizo='$techo__corredizo',techo_panoramico='$techo__panoramico',	parqueo_automatico='$parqueo__automatico',desempaniador_trasero='$desempañador__trasero',gps='$gps' WHERE id_equipamiento ='$id__publicacion' AND id_usuario = '$id__usuario'";

$ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar___datos__equipamiento);
if($ejecutar__actualizacion){
  echo json_encode('ok');
}
?>