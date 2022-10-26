<?php
include'conexion-db-accent.php';


    $search = isset($_POST['campo']) ?   mysqli_real_escape_string($conexion__db__accent,$_POST['campo']) : NULL;
    $consulta = "SELECT * FROM conductores WHERE nombre_conductor LIKE '%{$search}%' OR primer_apellido LIKE '%{$search}%'";
    $resultado =   mysqli_query($conexion__db__accent,$consulta);
    $numero__fila = mysqli_num_rows($resultado);

    $html = '';
    if($numero__fila > 0){
     while($fila = mysqli_fetch_array($resultado)){
        $html .='<div class="card__del__conductor">
        <div class="card tarjeta__informacion__del__conductor">
        <img src="upload/'.$fila['avatar'].'"alt="Avatar usuario adhoc"" class="card-img-top" alt="...">
        <div class="card-body">
        <h5 class="card-title nombre__perfil__conductor__card">'.$fila['nombre_conductor'] .'</h5>
        <p class="estatus__del__conductor"><br>'.$fila['status'] .'</b></p>
          <a href="info-conductor.php?idc='.$fila['id_conductor'].'" class="btn btn-primary">Elegir conductor</a>
        </div>
      </div>
  </div>';

     
    }
  }else{
      $html .='<div class="no__resultado">
      <img src="./img/no__resultados__de__busqueda.svg" alt=" ilustracion bsuqueda search busqueda web" class="imagen__no__resultados">
      
      <h2 class="subtitulo__sin__resultados"><b>Sin resultados</b></h2></div> ';

    }
  

echo json_encode($html,JSON_UNESCAPED_UNICODE);
