<?php  include'layout/nav-home-conductor.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

if($id === ""){
  header("Location: ./ dashboard-conductor");
  exit;
}

$actualizar__notificaion = "UPDATE notificaciones__conductor SET leido = '1' WHERE id_notificacion = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__notificaion);

?>

<?php  include'layout/footer-home.php' ?>