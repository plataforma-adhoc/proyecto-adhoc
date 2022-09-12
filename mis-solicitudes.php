<?php  
include'layout/nav-home-conductor.php';

$id__conductor = isset($_GET['idc']) ? $_GET['idc'] : '';


if($id__conductor ){
  $actualizar__solicitud = "UPDATE datos__inicio__recorrido SET leido = '1' WHERE  id_conductor = '$id__conductor'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__solicitud); 
  



  $consulta__inicio__servicio = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor'";
  $ejecutar__consulta__inicio__servicio = mysqli_query($conexion__db__accent,$consulta__inicio__servicio);

  $consulta__datos__usuario = "SELECT nombre_usuario, primer_apellido,segundo_apellido,email,numero_documento,numero_telefono,avatar FROM  usuarios";
 $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
 $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);
  
 $consulta__detalles__compra = "SELECT * FROM detalles__de__la__compra WHERE id_conductor = '$id__conductor'";
 $ejecutar__consulta__detalles = mysqli_query($conexion__db__accent,$consulta__detalles__compra);

}
 ?>


<button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="container contenedor__mis__solicitudes">
  <h2 class="subtitulo__solicitudes">Solicitudes</h2>
  <p class="texto__solicitud">En esta seccion podras encontrar toda la informacion de tus solicitudes de servicio de conductor elegido ,
        tendras acceso a toda la informacion del usuario que solicita el servicio .
      </p>
      <br><b><br>
      <div class="contenido__solicitudes">
<?php    

      if(mysqli_num_rows( $ejecutar__consulta__detalles) > 0){
        while($resultado__inicio__servicio = mysqli_fetch_array($ejecutar__consulta__inicio__servicio)){ 
        $resultado__detalles = mysqli_fetch_array($ejecutar__consulta__detalles)?>
     <div class="datos__de__solicitud">
     <div class="card__solicitudes">
     <div class="img">
       <img src="upload/<?php echo $resultado['avatar'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos">
      <div class="name">
   <h2><?php echo $resultado['nombre_usuario']  ?></h2>
   <h4><?php echo $resultado['primer_apellido'] ?> <?php echo $resultado['segundo_apellido'] ?></h4>
   <h4><?php echo $resultado['email'] ?></h4>
   <h4><?php echo $resultado['numero_documento'] ?></h4>
   <h4><?php echo $resultado['numero_telefono'] ?></h4>
   <h2>Datos del servicio a tomar</h2>
   <h4>  <?php echo $resultado__inicio__servicio['direccion_inicio']  ?></h4>
   <?php echo $resultado__inicio__servicio['fecha_inicio'] ?>
   <?php echo date('g:i:a',strtotime($resultado__inicio__servicio['hora_inicio'])) ?>
   <br><br>
   <h2>Información general</h2>
  </div>

  <p class="text">
    <h4>  <?php echo $resultado__detalles['descripcion'] ?></h4>
    </p>

  <ul class="stats">
    <?php   if($resultado__inicio__servicio['estado_recorrido'] === "Iniciado"){ ?>
        <p class="parrafo__estado" id="estado">Estado solicitud : <?php echo $resultado__inicio__servicio['estado_recorrido']  ?></p>
        <?php } ?>

        <?php   if($resultado__inicio__servicio['estado_recorrido'] === "Recorrido terminado"){ ?>
        <p class="parrafo__estado culminado" id="estado">Estado solicitud : <?php echo $resultado__inicio__servicio['estado_recorrido']  ?></p>
        <?php } ?>
  </ul>
  <div class="links">
     <!-- <button class="follow">Follow</button>
     <button class="view">View profile</button> -->
     <?php  if($resultado__inicio__servicio['estado_recorrido'] === NULL ){ ?>
      <form  action="insertar-inicio-recorrido.php" method="POST">
       <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
       <input type="hidden" value="<?php  echo $resultado__inicio__servicio['id']?>" name="idSolicitud">
       <button class="enlaces__servicios iniciar" name="iniciar-servicio">Iniciar servicio</button>
     </form>
      <?php } ?>
      <?php  if($resultado__inicio__servicio['estado_recorrido'] ==='Iniciado'){ ?>
        <form action="terminar-servicio.php" method="POST">
        <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
       <input type="hidden" value="<?php  echo $resultado__inicio__servicio['id']?>" name="idSolicitud">
          <button class="enlaces__servicios terminar" name ="terminar-servicio">Terminar servicio</button>
        </form>
      <?php } ?>

  </div>
</div>
      </div>
      </div>
     
      <?php } ?>
      <?php } ?>
      
      
      
    </div>
    </div>


 <br><br><br>
<!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Iniciar recorrido de conductor elegido</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Comenzar</button>
      </div>
    </div>
  </div>
</div>  -->



<?php
include'layout/footer-home.php';
?>