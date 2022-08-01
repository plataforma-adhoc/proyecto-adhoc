<?php
session_start();
if(isset($_POST['action'])){
 $acction = $_POST['action'];
 $id = isset($_POST['id']) ? $_POST['id'] : 0;

 if($acction == 'eliminar'){
     $datos['ok'] = eliminar($id);
 }


}
echo  json_encode($datos);

function eliminar($id){
  if($id > 0){
    if(isset($_SESSION['carrito']['servicios'][$id])){
      unset($_SESSION['carrito']['servicios'][$id]);
      return true;
    }else{
        return  false;
    }
  }
}


?>