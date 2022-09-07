<?php  
include'layout/nav-home-conductor.php';

$id__conductor = isset($_GET['idc']) ? $_GET['idc'] : '';
$id__solicitud = isset($_GET['ids']) ? $_GET['ids'] : '';

if($id__conductor && $id__solicitud){
  $actualizar__solicitud = "UPDATE datos__inicio__recorrido SET leido = '1' WHERE  id_conductor = '$id__conductor'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__solicitud); 
  



  $consulta__inicio__servicio = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor'";
  $ejecutar__consulta__inicio__servicio = mysqli_query($conexion__db__accent,$consulta__inicio__servicio);

  $consulta__datos__usuario = "SELECT nombre_usuario, primer_apellido,segundo_apellido,email,numero_documento,numero_telefono,avatar FROM  usuarios";
 $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
 $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);
  
 $consulta__detalles__compra = "SELECT * FROM detalles__de__la__compra WHERE id_conductor = '$id__conductor'";
 $ejecutar__consulta__detalles = mysqli_query($conexion__db__accent,$consulta__detalles__compra);

  
 ?>
  




<button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="container contenedor__mis__solicitudes">
<h2 class="subtitulo__solicitudes">Solicitudes</h2>
<p class="texto__solicitud">En esta seccion podras encontrar toda la informacion de tus solicitudes de servicio de conductor elegido ,
      tendras acceso a toda la informacion del usuario que solicita el servicio .
    </p>


<?php    


    if(mysqli_num_rows($ejecutar__consulta__inicio__servicio) > 0){
      if(mysqli_num_rows( $ejecutar__consulta__detalles) > 0){
        while($resultado__inicio__servicio = mysqli_fetch_array($ejecutar__consulta__inicio__servicio)){ 
        $resultado__detalles = mysqli_fetch_array($ejecutar__consulta__detalles)?>
     <div class="datos__de__solicitud">
    <div class="info__perfil solicitudes">
    <img src="upload/<?php echo $resultado['avatar'] ?>" alt="" class="foto__de__perfil">
    <!-- <button class="enlaces__servicios iniciar" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar servicio</button> -->
   <?php  if($resultado__inicio__servicio['estado_recorrido'] == NULL ){ ?>
    <br><br>
        <div class="contenedor__btn__recorridos">
      <form  action="./insertar-inicio-recorrido" method="POST">
       <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
       <input type="hidden" value="<?php  echo $id__solicitud ?>" name="idSolicitud">
       <button class="enlaces__servicios iniciar" name="iniciar-servicio">Iniciar servicio</button>
     </form>
    </div>
     <?php  } ?>
      <br>
      <?php  if($resultado__inicio__servicio['estado_recorrido'] ==='Iniciado'){ ?>
        <br><br>
        <div class="contenedor__btn__recorridos">
        <form action="./terminar-servicio" method="POST">
        <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
       <input type="hidden" value="<?php  echo $id__solicitud ?>" name="idSolicitud">
          <button class="enlaces__servicios terminar" name ="terminar-servicio">Terminar servicio</button>
        </form>
    </div>
     <?php  } ?>

  </div>

    <div class="info__perfil solicitudes">
     <div class="datos__del__perfil__de__usuario">
      <br><br><br><br>
     <p class="texto">datos del usuario</p>
       <div>
                <p class="datos__basicos"><strong> Nombre : </strong>  <?php echo $resultado['nombre_usuario']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido: </strong>  <?php echo $resultado['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido : </strong>  <?php echo $resultado['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>E-mail : </strong>  <?php echo $resultado['email']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento : </strong>  <?php echo $resultado['numero_documento']?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono : </strong><?php echo $resultado['numero_telefono'] ?></p>
            </div>
          
                  <p class="texto">Informacion general</p> 
                <p class="datos__basicos nombre__servicio"><strong>Nombre del servicio :</strong> <?php echo $resultado__detalles['nombre_servicio'] ?></p>
                <p class="datos__basicos"><strong><?php echo $resultado__detalles['descripcion'] ?></strong></p>
               
     </div>
    </div>
    <div class="info__perfil solicitudes">
      <div class="datos__del__perfil__de__usuario servicio ">
      <p class="texto">datos del servicio a tomar</p>
            <div>
                <p class="datos__basicos"><strong>Direccion inicio:</strong>  <?php echo $resultado__inicio__servicio['direccion_inicio']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Hora de inicio:</strong>  <?php echo date('g:i:a',strtotime($resultado__inicio__servicio['hora_inicio'])) ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>El dia:  </strong> <?php echo $resultado__inicio__servicio['fecha_inicio'] ?></p>
            </div>
           
        </div>
        <?php   if($resultado__inicio__servicio['estado_recorrido'] === "Iniciado"){ ?>
        <p class="parrafo__estado" id="estado">Estado solicitud : <?php echo $resultado__inicio__servicio['estado_recorrido']  ?></p>
        <?php } ?>

        <?php   if($resultado__inicio__servicio['estado_recorrido'] === "Recorrido terminado"){ ?>
        <p class="parrafo__estado culminado" id="estado">Estado solicitud : <?php echo $resultado__inicio__servicio['estado_recorrido']  ?></p>
        <?php } ?>
        </div>
        
      </div>
     
      <?php } ?>
      <?php } ?>
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