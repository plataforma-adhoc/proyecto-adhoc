<?php include'layout/nav-home-conductor.php';
$id__conductor = isset($_GET['idc']) ? $_GET['idc'] : '';
if($id__conductor){
    $consulta__datos__servicios = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor'";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicios);
 

}?>
    <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>

<div class="container contenedor__mis__solicitudes">
    <h2 class="subtitulo__solicitudes">Servicios completados</h2>
    <p class="texto__servicio__completado">Toda la información de tus servicios completados apareceran aqui .
    </p>
    <div class="contenido__servicio__completado">
<?php    

      if(mysqli_num_rows( $ejecutar__consulta) > 0){
        while($fila = mysqli_fetch_array($ejecutar__consulta)){       
          if($fila['estado_recorrido'] ==='Recorrido terminado'){
          $consulta__datos__usuario = "SELECT avatar FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";  
          $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
          $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);?>
     <div class="datos__solicitud__completada" data-aos="zoom-in">
     <div class="card__solicitudes">
     <div class="img">
     <img src="upload/<?php echo $resultado['avatar'] ?>" class="imagen__de_perfil imagen__solicitudes">
    </div>
    <div class="infos">
      <div class="name">
      <h2>Datos del usuario</h2> 
      <?php                 
      $consulta__datos__usuario = "SELECT nombre_usuario, primer_apellido,segundo_apellido,email,numero_documento,numero_telefono 
     FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";
      $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
      $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);?>
   <h4><?php echo $resultado['nombre_usuario'] ?></h4>
    <h4><?php echo $resultado['primer_apellido'] ?> <?php echo $resultado['segundo_apellido'] ?></h4>
   <h4><?php echo $resultado['email'] ?></h4>
   <h4><?php echo $resultado['numero_telefono'] ?></h4>
   <h2>Datos del servicio completado</h2>
   <h4>  <?php echo $fila['direccion_inicio']  ?></h4>
   <?php echo $fila['fecha_inicio'] ?>
   <?php echo date('g:i:a',strtotime($fila['hora_inicio'])) ?>
   <?php $consulta__detalles__compra = "SELECT * FROM detalles__de__la__compra WHERE id_conductor = '$id__conductor' ";  
         $ejecutar__consulta__compra = mysqli_query($conexion__db__accent,$consulta__detalles__compra);
        if(mysqli_num_rows($ejecutar__consulta) > 0)
       $fila__resultado = mysqli_fetch_array($ejecutar__consulta__compra)?>

   <br><br>
   <h2>Datos adicionales</h2>
  </div>

  <p class="text">
    <h4><?php echo $fila__resultado['descripcion'] ?><h4> 
    </p>

  <ul class="stats">
  <?php  if($fila['estado_recorrido'] === "Recorrido terminado"){?>
        <p class="parrafo__estado culminado estado__terminado" id="estado">Estado solicitud : <?php echo $fila['estado_recorrido']  ?></p>
        <?php } ?>
  </ul>
  <div class="links">
     <!-- <button class="follow">Follow</button>
     <button class="view">View profile</button> -->

  </div>
</div>
      </div>
      </div>
     
      <?php } ?>
      <?php } ?>
      <?php } ?>
      
      
      
    </div>
</div>





<?php include'layout/footer-home.php' ?>