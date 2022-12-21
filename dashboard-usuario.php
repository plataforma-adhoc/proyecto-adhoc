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
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola, <strong> <?php echo ucwords($datos__resultado['nombre_usuario'])?></strong></h2>
    <br><br>
    <h3 class="subtitulo__dashboard">Que haras hoy ? </h3>
    <div class="contenedor__card__dashboard">
      <div class="contenido__card__dashboard">
        <a href="publicar-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
          <div class="card__dashboard">
            <div class="contenido">
              <div>
                <img src="./img/icono__vender__carro.png"alt=""/>

              </div>
              <div>
                <br>
                <p>Anunciar  carro</p>  

              </div>
    
            </div>
        </div>
      </a>
      </div>
    <div class="contenido__card__dashboard">
    <a href="mis-carros-anunciados?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
        <div class="card__dashboard">
          <div class="contenido">
            <div>
              <img src="./img/icono__historial.png" alt=""/>
            </div>
           <div>
             <br>
             <p>Historial de anuncio</p> 
           </div>
  
          </div>
      </div>
    </a>

  </div>
  <div class="contenido__card__dashboard">
        <a href="#" class="enlace__anunciar__carro">
          <div class="card__dashboard">
            <div class="contenido">
              <div>
                <img src="./img/icono__puntero.png"alt="puntero de mouse"/>

              </div>
              <div>
             <br>
      <?php    
 $consulta__datos__click = "SELECT contador_click FROM informacion__del__vehiculo__en__venta WHERE 	id_usuario = '{$_SESSION['id_usuario']}'";
  $ejecutar__consulta__clicks = mysqli_query($conexion__db__accent,$consulta__datos__click);
  if(mysqli_num_rows($ejecutar__consulta__clicks) > 0){ 
    $total__contador = mysqli_fetch_array($ejecutar__consulta__clicks);
      $total = $total__contador['contador_click'];?>
<p>Total vistas del anuncio <span class="total__positivo"><?php echo $total ?></span></p>  
<?php  }else{ ?>
<p>Total vistas del anuncio <span class="total__negativo"><?php echo $total ?></span></p>  

  <?php  } ?>
     </div>
    
            </div>
        </div>
      </a>
      </div>  
  </div>
</div>

</div>


<?php include'layout/footer-home.php' ?>


