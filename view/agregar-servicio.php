<?php
  include'config/config.php';

  if(isset($_POST['id'])){
   $id = $_POST['id'];
   $token = $_POST['token'];

   $token__temporal = hash_hmac('sha1',$id,TOKEN);
   if($token == $token__temporal){
    session_start();
    $_SESSION['agregar']['servicio'][$id];
    $datos['numero'] =  count($_SESSION['agregar']['servicio']); 
    $datos['ok'] = true;
   }else{
    $datos['ok'] = false;
    
   }
  }else{
    $datos['ok'] = false;
  }

echo json_encode($datos);

?>