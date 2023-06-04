<?php
function actualizarDatosDeSeguridadVehiculo(){
include'conexion-db-accent.php';  
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$air__bag__delantero  = isset($_POST['air-bag-delantero']) ? $_POST['air-bag-delantero']: '';
$air__bag__trasero = isset($_POST['air-bag-trasero']) ? $_POST['air-bag-trasero']: '';
$bloqueo__central  = isset($_POST['bloqueo-central']) ? $_POST['bloqueo-central']: '';
$alarma  = isset($_POST['alarma']) ? $_POST['alarma']: '';
$control__acesnso  = isset($_POST['control-ascenso']) ? $_POST['control-ascenso']: '';
$control__descenso  = isset($_POST['control-descenso']) ? $_POST['control-descenso']: '';
$sensor__delantero  = isset($_POST['sensor-dalentero']) ? $_POST['sensor-dalentero']: '';
$sensor__reversa  = isset($_POST['sensor-reversa']) ? $_POST['sensor-reversa']: '';
$sensor__punto__ciego  = isset($_POST['sensor-punto-ciego']) ? $_POST['sensor-punto-ciego']: '';
$camara_reserva = isset($_POST['camara-reversa']) ? $_POST['camara-reversa']: '';

$actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET 	air_bag_delantero = '$air__bag__delantero',air_bag_trasero='$air__bag__trasero',bloqueo_central='$bloqueo__central',
alarma='$alarma',	control_de_ascenso='$control__acesnso', 	control_de_descenso='$control__descenso',sensor_delantero='$sensor__delantero',	sensor_reversa='$sensor__reversa',sensor_punto_ciego='$sensor__punto__ciego',
camara_reversa='$camara_reserva' WHERE id_seguridad = '$id__publicacion' AND id_usuario = '$id__usuario'";
$ejecutar__actualizacion =  mysqli_query($conexion__db__accent,$actualizar__seguridad);
if($ejecutar__actualizacion){
 echo  json_encode('ok');
}
}
actualizarDatosDeSeguridadVehiculo();
?>