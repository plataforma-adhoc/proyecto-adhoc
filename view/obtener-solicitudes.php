<?php include'conexion/conexion-db-accent.php';

$consulta__solicitudes = "SELECT * FROM datos__inicio__recorrido";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__solicitudes);

  $total__solicitudes  = mysqli_num_rows($ejecutar__consulta);
  echo json_encode($total__solicitudes);


?>