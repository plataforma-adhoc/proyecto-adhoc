<?php
function eliminarVariablesDeSesionMoto(){
session_start();
unset($_SESSION['datosDeLaMoto']);
unset($_SESSION['datosContactoMoto']);
unset($_SESSION['fotosDeLaMoto']);

if (!isset($_SESSION['datosDeLaMoto']) && !isset($_SESSION['datosContactoMoto']) && !isset($_SESSION['fotosDeLaMoto'])) {
  echo json_encode('ok');
} else {
  echo 'Error al eliminar las variables de sesión';
}
}
eliminarVariablesDeSesionMoto();
?>