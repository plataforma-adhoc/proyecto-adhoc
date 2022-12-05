<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario");
  die();
}
    $consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    if(mysqli_num_rows($resultado__consulta) > 0){
      $datos__resultado = mysqli_fetch_array($resultado__consulta);
    

}?>



<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola <strong> <?php echo $datos__resultado['nombre_usuario'] ?></strong></h2>
    <br><br>
    <h3 class="subtitulo__dashboard">Que haras hoy ? </h3>
    <a href="publicar-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
      <div class="card__dashboard">
        <div class="contenido">
          <img src="./img/icono__vender__carro.png"/>
          Anunciare la venta de un carro

        </div>
    </div>
  </a>
  </div>
</div>
</div>








<?php include'layout/footer-home.php' ?>