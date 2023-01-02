<?php
function contador__contacto(){
    date_default_timezone_set('America/Bogota');
    setlocale(LC_ALL,"es_ES");
    setlocale(LC_TIME,"es_ES.UTF-8");
    include'conexion-db-accent.php'; 
    $id__usuario = isset($_POST['usuario']) ? $_POST['usuario']:'';
    $id__publicacion = isset($_POST['publicacion']) ? $_POST['publicacion']:'';
    if($id__usuario && $id__publicacion){

        $fecha__actual = date('Y-m-d');
        $contador__inicial = 1;
           $consulta__contador__click = "SELECT contador_contacto,fecha_contacto FROM contador__de__clicks__contacto WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ";
          $ejecutar__contador__click = mysqli_query($conexion__db__accent,$consulta__contador__click);
          $numero__de__filas = mysqli_num_rows($ejecutar__contador__click);
      
          if($numero__de__filas > 0 ){
              $consulta__contador__click__2 = "SELECT contador_contacto,fecha_contacto FROM contador__de__clicks__contacto  WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ORDER BY id_contador DESC";
              $ejecutar__contador__click__2 = mysqli_query($conexion__db__accent,$consulta__contador__click__2);
              $row = mysqli_fetch_array($ejecutar__contador__click__2);

              $fecha__click = $row['fecha_contacto'];
              $contador = $row['contador_contacto']+ 1;

              if($fecha__actual > $fecha__click){
                $insertar__click__1 = "INSERT INTO contador__de__clicks__contacto(id_publicacion,id_usuario,contador_contacto,fecha_contacto)  VALUES('$id__usuario','$id__publicacion','$contador__inicial','$fecha__actual')";
                $ejecutar__insersion__1 = mysqli_query($conexion__db__accent,$insertar__click__1);
                if($ejecutar__insersion__1){
                    echo json_encode('ok');
                 }
                
              }else{
                $actualizar__click = "UPDATE contador__de__clicks__contacto SET contador_contacto ='$contador' WHERE id_usuario = '$id__usuario'  AND  fecha_contacto = '$fecha__actual' ";
                 $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__click);
                 if($ejecutar__actualizacion){
                    echo json_encode('ok');
                 }
      
              }
          }else{
            $insertar__click__2 = "INSERT INTO contador__de__clicks__contacto(id_publicacion,id_usuario, contador_contacto,fecha_contacto)  VALUES('$id__publicacion','$id__usuario','$contador__inicial','$fecha__actual')";
            $ejecutar__insersion = mysqli_query($conexion__db__accent,$insertar__click__2);
           if($ejecutar__insersion){
              echo json_encode('ok');
           }
      
          }
      
      


}
}
contador__contacto();
?>