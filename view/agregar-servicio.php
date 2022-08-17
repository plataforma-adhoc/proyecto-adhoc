<?php
  include'config/config.php';
  if(isset($_POST['id'])){
   $id = $_POST['id'];
   $token = $_POST['token'];

   $token__temporal = hash_hmac('sha1',$id,TOKEN);
   if($token == $token__temporal){
    session_start();
    // if( isset($_SESSION['carrito']['servicios'][$id])){
    //    $_SESSION['carrito']['servicios'][$id] = 1;
    // }
    $_SESSION['carrito']['servicios'][$id] = 1;
    $datos['numero'] = count($_SESSION['carrito']['servicios']); 
    $datos['ok'] = true;
   }else{
    $datos['ok'] = false;
    
   }
  }else{
    $datos['ok'] = false;
  }
echo json_encode($datos);

?>