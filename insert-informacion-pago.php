<?php
  include'conexion-db-accent.php';  

  $nombre__pagador = isset($_POST['nombre-pagador']) ? $_POST['nombre-pagador'] : '';
  $nombre__paquete = isset($_POST['nombre-paquete']) ? $_POST['nombre-paquete']: '';
  $valor__paquete = isset($_POST['valor-paquete']) ? $_POST['valor-paquete']: '';


$insertar__datos__de__compra = "INSERT INTO proceso__pago__y__e__info__plan(nombre_pagador,nombre_paquete,valor_paquete) 
VALUES('$nombre__pagador','$nombre__paquete','$valor__paquete')";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos__de__compra);
if($ejecutar__consulta){
 echo  json_encode('ok');
}


?>