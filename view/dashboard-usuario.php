<?php include'layout/nav-home-usuario.php';
include'conexion/conexion-db-accent.php';

    $consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE email = '{$_SESSION['id_usuario']}' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    if(mysqli_num_rows($resultado__consulta) > 0){
      $datos__resultado = mysqli_fetch_array($resultado__consulta);
    

}?>

<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola <strong> <?php echo $datos__resultado['nombre_usuario'] ?></strong></h2>
    <p class="titulo__dashboard">Te presentamos algunos conductores</p>

    <div class="datos__perfiles__conductor">
  <?php 
  $consulta__datos__conductor = "SELECT * FROM conductores WHERE status = 'disponible'";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
  if(mysqli_num_rows($ejecutar__consulta) > 0){ ?>
   <?php while($fila__datos__resultado = mysqli_fetch_array($ejecutar__consulta)){ ?>
      <div class="card__del__conductor">
      <a href="./info-conductor?idc=<?php  echo $fila__datos__resultado['id_conductor']  ?>"class="card__perfiles__dashboard" data-aos="zoom-in">
    <img src="upload/<?php  echo $fila__datos__resultado['avatar']  ?>" alt="Avatar" class="imagen__del__conductor">
   <div class="datos__del__conductor">
    <br>
    <h4><b></b><?php  echo $fila__datos__resultado['nombre_conductor']  ?></h4>
    <p><?php  echo $fila__datos__resultado['numero_documento']  ?></p>
    <?php  if($fila__datos__resultado['status']==="disponible"){ ?>
          <p> <i class="fas fa-circle"></i> <?php  echo $fila__datos__resultado['status']  ?></p>
  
    <?php  }  ?>
  </div>
</a> 
</div>
<?php } ?>
<?php } ?>  
</div>
</div>
<?php include'layout/footer-home.php' ?>