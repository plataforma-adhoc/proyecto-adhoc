<?php  include'conexion-db-accent.php';  



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
     $estado__anuncio = "Activo";
     $insertar__fotos = "INSERT INTO fotos__del__vehiculo(id_usuario,foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10,estado_anuncio)
     VALUES('$id__usuario','$ruta__1','$ruta__2','$ruta__3','$ruta__4','$ruta__5','$ruta__6','$ruta__7','$ruta__8','$ruta__9','$ruta__10','$estado__anuncio')";
     $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__fotos);
     if($ejecutar__consulta){
       echo json_encode('ok');
     }
     
  




  
  


 










?>