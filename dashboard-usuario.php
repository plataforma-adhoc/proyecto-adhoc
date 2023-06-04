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
<!-- Event snippet for Suscripcion conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-10993083164/cbo_CLC0h5oYEJzG9Pko'});
</script>

<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola, <strong> <?php echo ucwords($datos__resultado['nombre_usuario'])?></strong></h2>
    <br><br>
    <h3 class="subtitulo__dashboard">Que haras hoy ? </h3>
    <div class="contenedor__card__dashboard">
      <div class="contenido__card__dashboard">
        <a href="publicar-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
          <div class="card__dashboard">
            <div class="contenido">
              <div class="contenido__texto__card__dashboard">
              <i class="fas fa-car historial__de__vehiculos"></i>
              </div>
              <div>
                <p class="texto__cards"> Anunciar un carro</p>  
              </div>    
            </div>
        </div>
      </a>
      </div>
      <div class="contenido__card__dashboard">
        <a href="publicar-moto?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
          <div class="card__dashboard">
            <div class="contenido">
              <div class="contenido__texto__card__dashboard">
              <i class="fas fa-motorcycle historial__de__vehiculos"></i>
              </div>
              <div>
                <p class="texto__cards"> Anunciar moto</p>  
              </div>    
            </div>
        </div>
      </a>
      </div>
    <div class="contenido__card__dashboard">
    <a href="#" class="enlace__anunciar__carro" data-bs-toggle="modal" data-bs-target="#exampleModal">
        <div class="card__dashboard">
          <div class="contenido">
            <div class="contenido__texto__card__dashboard">
            <i class="fas fa-history fa-rotate-90 historial__de__vehiculos"></i>
            </div>
           <div>
             <p class="texto__cards"> Historial  anuncios</p> 
           </div>  
          </div>
      </div>
    </a>

  </div>
  <div class="contenido__card__dashboard">
    <a href="beneficios?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
        <div class="card__dashboard">
          <div class="contenido">
            <div class="contenido__texto__card__dashboard">
            <i class="fas fa-gifts historial__de__vehiculos"></i>
            </div>
           <div>
             <p class="texto__cards"> Ver beneficios</p> 
           </div>
  
          </div>
      </div>
    </a>

  </div>
  </div>
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Que historial quieres revisar ?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="texto__modal__body__historial">Escoje y revisa el historial de tu carro o moto </p>
      </div>
      <div class="modal-footer">
      <div class="contenedor__btns__historial">
        <div>
          <a href="historial-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="btn__historial">Automovil</a>
        </div>
        <div>
          <a href="historial-motos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="btn__historial">Motocicleta</a>
        </div>
  </div>
      </div>
    </div>
  </div>
</div>
  <?php include'layout/footer-home.php' ?>