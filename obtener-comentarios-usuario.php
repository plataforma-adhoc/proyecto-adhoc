<?php    
include'conexion-db-accent.php';
$respuesta = isset($_POST['respuesta']) ? $_POST['respuesta'] :'';
$id__usuario= isset($_POST['idUsuario']) ? $_POST['idUsuario'] :'';
$id__conductor = isset($_POST['idConductor']) ? $_POST['idConductor'] :'';

$consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE id_usuario = '$id__usuario' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

}

$consulta__comentarios = "SELECT * FROM comentarios__usuario WHERE id_usuario = '$id__usuario'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
$salida = "";

if($ejecutar__consulta){
 while($recorrido = mysqli_fetch_array($ejecutar__consulta)){
 $salida .= '<div class="opinion__2">
 <div class="item__opinion">
     <img src="upload/'. $datos__resultado['avatar'] .'" alt="" class="avatar__opinion__1">
     <div class="nombre__item__opinion">
         <p>'.  $datos__resultado['nombre_usuario']  .'</p>
     </div>
 </div>
 <div class="parrafo__item__opinion">
     <p class="parrafo">'. $recorrido['comentario'] .'</p>
     <p class="fecha__publicacion">'. $recorrido['fecha_comentario'] .'</p>
 </div>
</div>';

 } 
 }

 
 echo ($salida);
