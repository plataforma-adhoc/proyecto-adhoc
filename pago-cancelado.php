<?php  
 session_start();
unset($_SESSION['datos-obligatorios']);
unset($_SESSION['info-adicional']);
unset($_SESSION['datos-contacto']);
unset($_SESSION['datos-imagenes']);

if (!isset($_SESSION['datos-obligatorios']) &&
    !isset($_SESSION['info-adicional']) &&
    !isset($_SESSION['datos-contacto']) &&
    !isset($_SESSION['datos-imagenes'])) {
        $dir = 'upload/';
        $files = scandir($dir, SCANDIR_SORT_DESCENDING); // Obtener lista de archivos en orden cronológico inverso
        $deleteCount = 10; // Número de imágenes a eliminar
        for ($i = 0; $i < $deleteCount; $i++) {
       $file = $dir . $files[$i];
       if (is_file($file)) {
       unlink($file); // Eliminar archivo
       }
        }
  echo json_encode('ok');
} else {
  echo 'Error al eliminar las variables de sesión';
}

            ?>