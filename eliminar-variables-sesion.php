<?php
function eliminarVariablesDeSesion(){
session_start();
unset($_SESSION['datos-obligatorios']);
unset($_SESSION['info-adicional']);
unset($_SESSION['datos-contacto']);
unset($_SESSION['datos-imagenes']);

if (!isset($_SESSION['datos-obligatorios']) && !isset($_SESSION['info-adicional']) &&  !isset($_SESSION['datos-contacto']) && !isset($_SESSION['datos-imagenes'])) {
  echo json_encode('ok');
} else {
  echo 'Error al eliminar las variables de sesión';
}
}
eliminarVariablesDeSesion();
?>