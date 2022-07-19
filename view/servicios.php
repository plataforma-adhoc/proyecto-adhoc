<?php 

   include'layout/nav-home-usuario.php';
    include'config/config.php';
    include'conexion/conexion-db-accent.php';

    $id_conductor = $_GET['id'] ? $_GET['id'] : '';
    if($id_conductor ==="" || $id_conductor !== $id_conductor ){
       header("Location: ./ dashboard-usuario");
    }
    
    $consulta__productos = "SELECT * FROM productos    WHERE activo = 1";
    $ejecutar__consulta__productos = mysqli_query($conexion__db__accent, $consulta__productos);
 
?>
<div class="container contenedor__servicios">
    <h2 class="titulo__servicios"> Servicios</h2>
    <p class="parrafo__servicios">Elige uno de nuestros planes de servicios para continuar </p>
    <div class="contenedor__cards__servicios">
        <?php  while($fila = mysqli_fetch_array($ejecutar__consulta__productos)){  ?>
        <div class="cards__servicios">
        <h3 class="titulo__producto"><?php echo $fila['nombre_producto'] ?></h3>
        <p class="precio_producto">$ <?php echo number_format($fila['valor_producto'],2,'.','.') ?></p>
        <div class="puntuacion__servicios">
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
           <span><i class="fas fa-star"></i></span>
        </div>
      <br><br>
         <div class="botones">
             <a href="./detalles?ids=<?php echo $fila['id_producto'] ?>&token=<?php echo hash_hmac('sha1',$fila['id_producto'],TOKEN)?>">detalles</a>
             <a href="">comprar</a>
         </div>
         <br>
        </div>

     <?php } ?>
    </div>

</div>

<?php   include'layout/footer-home.php';?>