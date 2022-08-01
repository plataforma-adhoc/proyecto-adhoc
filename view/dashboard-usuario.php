<?php include'layout/nav-home-usuario.php';
include'conexion/conexion-db-accent.php';

    $consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE email = '{$_SESSION['id_usuario']}' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    if(mysqli_num_rows($resultado__consulta) > 0){
      $datos__resultado = mysqli_fetch_array($resultado__consulta);
    

}?>


  <?php 
  $consulta__datos__conductor = "SELECT * FROM conductores WHERE status = 'disponible'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
  if(mysqli_num_rows($ejecutar__consulta) > 0){ ?>
      <div class="container contenedor__dashboard">
          <h2 class="vista__nombre__usuario">Hola <?php echo $datos__resultado['nombre_usuario'] ?></h2>
          <p class="titulo__dashboard">Te presentamos algunos conductores</p>
   
    <div class="datos__perfiles">
   <?php while($fila__datos__resultado = mysqli_fetch_array($ejecutar__consulta)){ ?>
    <a href="./info-conductor?idc=<?php  echo $fila__datos__resultado['id_conductor']  ?>" class="card__perfiles__dashboard" data-aos="zoom-in">
    <div class="chip">
  <img src="upload/<?php  echo $fila__datos__resultado['avatar']  ?>" alt="Person" width="96" height="96">
  <div class="datos__del__conductor">
    <p><?php  echo $fila__datos__resultado['nombre_conductor']  ?></p>
    <p><?php  echo $fila__datos__resultado['numero_documento']  ?></p>
      <?php  if($fila__datos__resultado['status']==="disponible"){ ?>
          <p> <i class="fas fa-circle"></i> <?php  echo $fila__datos__resultado['status']  ?></p>
  
    <?php  }  ?>

  </div>
</div>
</a> 
   
<?php } ?>
<?php } ?>  
</div>
</div>

<?php include'layout/footer-home.php' ?>