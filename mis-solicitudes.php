<?php  
include'layout/nav-home-conductor.php';

$id__conductor = isset($_GET['idc']) ? $_GET['idc'] : '';


if($id__conductor ){
  $actualizar__solicitud = "UPDATE datos__inicio__recorrido SET leido = '1' WHERE  id_conductor = '$id__conductor'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__solicitud); 
  

  $consulta__inicio__servicio = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor'";
  $ejecutar__consulta__inicio__servicio = mysqli_query($conexion__db__accent,$consulta__inicio__servicio);
  
 $consulta__detalles__compra = "SELECT * FROM detalles__de__la__compra WHERE id_conductor = '$id__conductor'";
 $ejecutar__consulta__detalles = mysqli_query($conexion__db__accent,$consulta__detalles__compra);

}
 ?>

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
       <img src="upload/<?php echo $resultado__inicio__servicio['avatar_usuario'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos">
      <div class="name">
   <h2><?php echo $resultado__inicio__servicio['nombre_usuario']  ?></h2>
   <h4><?php echo $resultado__inicio__servicio['primer_apellido_usuario'] ?> <?php echo $resultado__inicio__servicio['segundo_apellido_usuario'] ?></h4>
   <h4><?php echo $resultado__inicio__servicio['telefono_usuario'] ?></h4>
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
        <p class="parrafo__estado culminado" id="estado">Estado solicitud : <?php echo $resultado__inicio__servicio['estado_recorrido']  ?>
       <br><br>

       <button id="myBtn" class="btn__open__modal__calificacion">Dejar un comentario</button>
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



</div>
<div class="modal__recorrido" id="modal-recorrido">
  <span class="cerrar__modal__calificacion" id="cerrar-modal-calificacion"><i class="far fa-times-circle"></i></span>
  <div class="contendido__modal__recorrido">
    <form  class="formulario__calificacion" id="form-comentario-conductor">
  <h4 class="subtitulo__estado__recorrido">Felicidades</h4>
      <h4 class="subtitulo__estado__recorrido">completaste un nuevo recorrido</h4>
      <p class="parrafo__recorrido">Dejanos saber tu opinion sobre el usuario que acabas de dejar </p>
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="text"  name="nombre" value="<?php echo $datos__resultado['nombre_conductor'] ?>"
                    class="capturarDatos" autofocus autocomplete="" readonly>
            </div>
        </div>
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
               <textarea name="areaMensaje" id="" cols="30" rows="10" class="area__mensaje" placeholder="Aqui tu mensaje"></textarea>
            </div>
        </div>
    </div>
    <?php  
      $consulta__id__usuario = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor'";
      $ejecutar__consulta__id__usuario = mysqli_query($conexion__db__accent,$consulta__id__usuario);
    $resultado__id__usuario = mysqli_fetch_array($ejecutar__consulta__id__usuario);
    
    $consulta__datos = "SELECT *  FROM datos__inicio__recorrido WHERE id_conductor = '{$_SESSION['id_conductor']}'";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos);
    if(mysqli_num_rows($ejecutar__consulta) > 0){
    $resultado__datos = mysqli_fetch_array($ejecutar__consulta)
    ?>

    <input type="hidden" value="<?php echo $resultado__id__usuario['id_usuario'] ?>" name="idUsuario">
    <input type="hidden" value="<?php echo $datos__resultado['id_conductor'] ?>" name="idConductor">
    <input type="hidden" value="<?php echo $resultado__datos['nombre_conductor'] ?>" name="nombreUsuario">
    <input type="hidden" value="<?php echo $resultado__datos['avatar'] ?>" name="avatar">

    <?php } ?>
    <button class="btn__calificaciones">Publicar ahora</button>
</form>
</div>
 <br><br><br>


<?php
include'layout/footer-home.php';
?>