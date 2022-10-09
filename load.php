<?php
include'conexion-db-accent.php';


    $search = isset($_POST['search']) ?   mysqli_real_escape_string($conexion__db__accent,$_POST['search']) : NULL;
    $consulta = "SELECT id_conductor,nombre_conductor,avatar,status FROM conductores WHERE nombre_conductor LIKE '%{$search}%' OR primer_apellido LIKE '%{$search}%' ";
    $resultado =   mysqli_query($conexion__db__accent,$consulta);
    $numero__fila = mysqli_num_rows($resultado);

    $html = '';
    if($numero__fila > 0){
     while($fila = mysqli_fetch_array($resultado)){

        $html .='<div class="card__del__conductor">
        <a href="info-conductor.php?idc='.$fila['id_conductor'].'" class="card__perfiles__dashboard">
       <img src="upload/'.$fila['avatar'].'"alt="Avatar usuario adhoc" class="imagen__del__conductor">
     <div class="datos__del__conductor">
      <br>
      <h4><b>'.$fila['nombre_conductor'] .'</b></h4>
      <p><br>'.$fila['status'] .'</b></p>    
      <p> </p>
    </div>
  </a> 
  </div>';

     }
    }else{
        $html .='<div class="no__resultado">
        <img src="./img/no__resultados__de__busqueda.svg" alt=" ilustracion bsuqueda search busqueda web" class="imagen__no__resultados">
        
        <h2 class="subtitulo__sin__resultados"><b>Sin resultados</b></h2></div> ';
    }

echo json_encode($html,JSON_UNESCAPED_UNICODE);

