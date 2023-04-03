<?php  include'conexion-db-accent.php';  
session_start();
  if(!is_dir('upload')){
    mkdir('upload');
  }



    foreach($_FILES['file']['tmp_name'] as $key => $value){
      if(file_exists($_FILES['file']['tmp_name'][$key])){
       if(move_uploaded_file($_FILES['file']['tmp_name'][$key],'upload/'.$_FILES['file']['name'][$key])){
         $random = rand(999999,999999999999);
         $ruta = 'upload/'.$random.$_FILES['file']['name'][$key]; 
       }
       
     }
     }
     $id__usuario = mysqli_real_escape_string($conexion__db__accent,isset($_POST['id-usuario']) ? $_POST['id-usuario'] :'');
     $ruta__1 ='upload/'.$_FILES['file']['name'][0];
     $ruta__2 ='upload/'.$_FILES['file']['name'][1];
     $ruta__3 ='upload/'.$_FILES['file']['name'][2];
     $ruta__4 ='upload/'.$_FILES['file']['name'][3];
     $ruta__5 ='upload/'.$_FILES['file']['name'][4];
     $ruta__6 ='upload/'.$_FILES['file']['name'][5];
     $ruta__7 ='upload/'.$_FILES['file']['name'][6];
     $ruta__8 ='upload/'.$_FILES['file']['name'][7];
     $ruta__9 ='upload/'.$_FILES['file']['name'][8];
     $ruta__10 ='upload/'.$_FILES['file']['name'][9];
    //  $estado__anuncio = 0;

$datos__fotos = array(
'id'=>$id__usuario,'ruta_1'=>$ruta__1,'ruta_2'=>$ruta__2,'ruta_3'=>$ruta__3,'ruta_4'=>$ruta__4,'ruta_5'=>$ruta__5,'ruta_6'=>$ruta__6,
'ruta_7'=>$ruta__7,'ruta_8'=>$ruta__8,'ruta_9'=>$ruta__9,'ruta_10'=>$ruta__10);

$datos__imagenes = $_SESSION['datos-imagenes'] = $datos__fotos;
if($datos__imagenes){
    echo json_encode('ok');

}
     
  




  
  


 










?>