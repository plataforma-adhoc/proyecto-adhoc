<?php
function actualizarDiseñoYEstilo(){
include'conexion-db-accent.php';  
$id__usuario = isset($_POST['id-usuario']) ? $_POST['id-usuario']: '';
$id__publicacion  = isset($_POST['id-publicacion']) ? $_POST['id-publicacion']: '';
$rines__de__lujo  = isset($_POST['rines-de-lujo']) ? $_POST['rines-de-lujo']: '';
$iradio__cassette = isset($_POST['radio-cassette']) ? $_POST['radio-cassette']: '';
$radio__cd = isset($_POST['radio-cd']) ? $_POST['radio-cd']: '';
$ipantalla__video  = isset($_POST['pantalla-video']) ? $_POST['pantalla-video']: '';

$actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET rines_de_lujo = '$rines__de__lujo',radio_cassette= '$iradio__cassette',radio_cd='$radio__cd',	pantalla_de_video='$ipantalla__video'
WHERE id_estilos = '$id__publicacion' AND id_usuario = '$id__usuario'";
$ejecutar__actualizacion = mysqli_query($conexion__db__accent, $actualizar__diseño);
if($ejecutar__actualizacion){
    echo json_encode('ok');

}

}
?>