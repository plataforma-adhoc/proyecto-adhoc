<?php  include'layout/nav-home-conductor.php ';
include'conexion/conexion-db-accent.php';
$consulta__datos__conductor = "SELECT id_conductor, nombre_conductor  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 
}

$consulta__datos__servicio = "SELECT *  FROM detalles__de__la__compra WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
$resultado = mysqli_num_rows($ejecutar__consulta); 
$fila__resultado__servicios = mysqli_fetch_array($ejecutar__consulta);

$saldo__actual = $fila__resultado__servicios['precio_compra'];
$descuento =  $saldo__actual * 0.25;
$saldo__total = $saldo__actual - $descuento;
?>
 
<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola <?php echo $datos__resultado['nombre_conductor'] ?></h2>
    <h2 class="titulo__dashboard">Estadisticas principales</h2>
    <div class="contenedor__cards__dashboard">
        <a href="./saldo" class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
                <p class="item__titulo__cards"><i class="fas fa-coins"></i> Tu saldo</p>
                <?php  if($saldo__total != NULL){?>
                <h2 class="item__total"><?php echo number_format($saldo__total,2,'.','.')?></h2>
                <?php }else{  ?>
                    <h2 class="item__total">0.00</h2>
                    <?php }  ?>
                    
                <span class="item__disponible">Disponible</span>
            </div>
        </a>
        <a href="./historial-conductor?id=<?php  echo $datos__resultado['id_conductor']  ?>"  class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
                <p class="item__titulo__cards"><i class="fab fa-creative-commons-zero"></i> Total servicos</p>
                <h2 class="item__total"><?php echo $resultado;  ?></h2>
            </div>
        </a>
        <?php  $consulta__servicios__completados = "SELECT estado_recorrido FROM datos__inicio__recorrido WHERE estado_recorrido = 'Recorrido terminado'";  
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__servicios__completados);
        $total__completados = mysqli_num_rows($ejecutar__consulta);
        ?>
        <a href="./servicio-completado" class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
            <p class="item__titulo__cards"><i class="fas fa-thumbs-up"></i> Servicios completados</p>
            <h2 class="item__total"><?php echo $total__completados  ?></h2>
            </div>
        </a>
        <?php  $consulta__servicios__completados = "SELECT estado_recorrido FROM datos__inicio__recorrido WHERE estado_recorrido = 'Rechazado'";  
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__servicios__completados);
        $total__cancelados = mysqli_num_rows($ejecutar__consulta);
        ?>
        <a href="./servicio-cancelado" class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
            <p class="item__titulo__cards"><i class="fas fa-bell-slash"></i> Servicios rechazados</p>
            <h2 class="item__total"><?php echo $total__cancelados ?></h2>
            </div>
        </a>

        <a href="./mis-solicitudes?idc=<?php echo $datos__resultado['id_conductor'] ?>" class="cards__dashboard nuevo__servicio animate__animated  animate__bounceInDown">
        <div>
           

                <p class="item__titulo__cards"><i class="fas fa-plus"></i> Total solicitudes</p>
               <span class="nueva__notificacion" id="numero-solicitudes"></span>
                </div>
            </a>

    </div>

</div>



<?php  include'layout/footer-home.php' ?>