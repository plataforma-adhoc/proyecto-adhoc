<?php  
include'layout/nav-home-conductor.php';

$id__conductor = isset($_GET['idc'])? $_GET['idc'] : '';
if($id__conductor){
    $consulta__datos__servicios = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor' LIMIT 1";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicios);


}?>

<div class="container contenedor__mis__solicitudes">
    <h2 class="subtitulo__solicitudes">Solicitudes</h2>
    <p class="texto__solicitud">En esta seccion podras encontrar toda la informacion de tus solicitudes de servicio de conductor elegido ,
      tendras acceso a toda la informacion del usuario que solicita el servicio .
    </p>
    <br><br>
    <?php                              
    
    if(mysqli_num_rows($ejecutar__consulta) > 0){
        while($fila = mysqli_fetch_array($ejecutar__consulta)){ 
            
            $consulta__datos__usuario = "SELECT avatar FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";
             
             $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
             $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);?>
        
    <div class="datos__de__solicitud">
      <div class="info__perfil"> 
      <img src="upload/<?php echo $resultado['avatar'] ?>" alt="" class="foto__de__perfil">
      <div>
      <!-- <button class="enlaces__servicios iniciar" data-bs-toggle="modal" data-bs-target="#exampleModal">Iniciar servicio</button> -->
  
      <form  action="./insertar-inicio-recorrido" method="POST">
       <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
       <button class="enlaces__servicios iniciar" name="iniciar-servicio">Iniciar servicio</button>
     </form>

      <br>
      <form action="./cancelar-servicio" method="POST">
        <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
        <button class="enlaces__servicios cancelar"  name="cancelar-servicio">Cancelar servicio</button>

    
      </form>
        <br>
        <form action="./terminar-servicio" method="POST">
        <input type="hidden" value="<?php  echo $_SESSION['id_conductor'] ?>" name="idConductor">
          <button class="enlaces__servicios terminar" name ="terminar-servicio" >Terminar servicio</button>
        </form>


     </div>
    </div>
      <div class="info__perfil">
        <br><br><br>
      <div class="datos__del__perfil__de__usuario">
      <p class="texto">datos del usuario</p>
      <?php                 
      $consulta__datos__usuario = "SELECT nombre_usuario, primer_apellido,segundo_apellido,email,numero_documento,numero_telefono 
     FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";
      
      $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
      $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);
      ?> 
            <div>
                <p class="datos__basicos"><strong> Nombre :</strong>  <?php echo $resultado['nombre_usuario']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido:</strong>  <?php echo $resultado['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido :</strong>  <?php echo $resultado['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>E-mail :</strong>  <?php echo $resultado['email']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento :</strong>  <?php echo $resultado['numero_documento']?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono :</strong><?php echo $resultado['numero_telefono'] ?></p>
            </div>
           
        </div>
      </div>
      <div class="info__perfil">
      <div class="datos__del__perfil__de__usuario">
      <p class="texto">datos del servicio a tomar</p>
    
            <div>
                <p class="datos__basicos"><strong>Direccion inicio:</strong>  <?php echo $fila['direccion_inicio']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Hora de inicio:</strong>  <?php echo date('g:i:a',strtotime($fila['hora_inicio'])) ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>El dia:  </strong> <?php echo $fila['fecha_inicio'] ?></p>
            </div>
        </div>
        <?php   if($fila['estado_recorrido'] === "Iniciado"){ ?>
        <p class="parrafo__estado" id="estado">Estado solicitud : <?php echo $fila['estado_recorrido']  ?></p>
        <?php } ?>

        <?php   if($fila['estado_recorrido'] === "Rechazado"){ ?>
        <p class="parrafo__estado rechazado" id="estado">Estado solicitud : <?php echo $fila['estado_recorrido']  ?></p>
        <?php } ?>

        <?php   if($fila['estado_recorrido'] === "Recorrido terminado"){ ?>
        <p class="parrafo__estado culminado" id="estado">Estado solicitud : <?php echo $fila['estado_recorrido']  ?></p>
        <?php } ?>
    </div>

        </div>
        </div>
       
    <?php } ?>
    <?php } ?>
    
    
</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
</div>



<?php
include'layout/footer-home.php';
?>