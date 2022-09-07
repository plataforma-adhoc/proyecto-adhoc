<?php  include'layout/nav-home-conductor.php ';
include'conexion-db-accent.php';
$consulta__datos__conductor = "SELECT id_conductor, nombre_conductor,status  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 
}
$saldo__total = 0;
$consulta__datos__servicio = "SELECT *  FROM detalles__de__la__compra WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
$resultado = mysqli_num_rows($ejecutar__consulta); 

$consulta__seleccion__saldo = "SELECT precio_compra FROM detalles__de__la__compra  WHERE id_conductor = '{$_SESSION['id_conductor']}' AND estado_pago = '0'";
$resultado__seleccion__saldo = mysqli_query($conexion__db__accent,$consulta__seleccion__saldo);

while($fila__resultado__saldo = mysqli_fetch_array($resultado__seleccion__saldo)){
  $saldo__actual = $fila__resultado__saldo['precio_compra'];
  $descuento =  $saldo__actual * 0.25;
  $subtotal = $saldo__actual - $descuento;
  $saldo__total += $subtotal;

};

?>
 
<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola <strong><?php echo $datos__resultado['nombre_conductor'] ?></strong></h2>
    <h2 class="titulo__dashboard"><i class="fas fa-sitemap"></i> Estadisticas principales</h2>
    <div class="contenedor__cards__dashboard">
        <a href="saldo.php" class="cards__dashboard animate__animated  animate__bounceInDown">
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
        <a href="historial-conductor.php?id=<?php  echo $datos__resultado['id_conductor']  ?>"  class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
                <p class="item__titulo__cards"><i class="fab fa-creative-commons-zero"></i> Total servicos</p>
                <h2 class="item__total"><?php echo $resultado;  ?></h2>
            </div>
        </a>
        <?php  $consulta__servicios__completados = "SELECT id_conductor,id_usuario, estado_recorrido,status_1 FROM datos__inicio__recorrido WHERE estado_recorrido = 'Recorrido terminado' AND id_conductor ='{$_SESSION['id_conductor']}' AND status_1 = '0' ";  
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__servicios__completados);
        $total__completados = mysqli_num_rows($ejecutar__consulta);
        $estado__recorrido = mysqli_fetch_array($ejecutar__consulta);
        ?>

   <?php  $consulta__servicios__completado = "SELECT estado_recorrido FROM datos__inicio__recorrido WHERE estado_recorrido = 'Recorrido terminado' AND id_conductor ='{$_SESSION['id_conductor']}'";  
        $ejecutar__consulta__estado = mysqli_query($conexion__db__accent,$consulta__servicios__completado);
        $total__servicios__completados = mysqli_num_rows($ejecutar__consulta__estado);
       
        ?>
        <a href="servicio-completado.php?idc=<?php   echo $datos__resultado['id_conductor']?>" class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
            <p class="item__titulo__cards"><i class="fas fa-thumbs-up"></i> Servicios completados</p>
            <h2 class="item__total"><?php echo $total__servicios__completados  ?></h2>
            </div>
        </a>
        
        <!-- <a href="./servicio-cancelado" class="cards__dashboard animate__animated  animate__bounceInDown">
            <div>
            <p class="item__titulo__cards"><i class="fas fa-bell-slash"></i> Servicios rechazados</p>
            <h2 class="item__total"><?php echo $total__cancelados ?></h2>
            </div>
        </a> -->
         <?php       
        $consulta__solicitudes = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = {$_SESSION['id_conductor']} AND leido = '0'";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__solicitudes);
        $total__solicitudes  = mysqli_num_rows($ejecutar__consulta);

        $consulta__id = "SELECT id FROM datos__inicio__recorrido WHERE id_conductor = {$_SESSION['id_conductor']} ";
        $ejecutar__consulta__id = mysqli_query($conexion__db__accent,$consulta__id);
        $id_solicitud  = mysqli_fetch_array($ejecutar__consulta__id);
        ?>

        <a href="mis-solicitudes.php?idc=<?php echo $datos__resultado['id_conductor'] ?>&ids=<?php echo $id_solicitud['id'] ?>" class="cards__dashboard nuevo__servicio animate__animated  animate__bounceInDown">
        <div>  
                <p class="item__titulo__cards"><i class="fas fa-plus"></i> Total solicitudes</p>
               <span class="nueva__notificacion"> <?php  echo $total__solicitudes ?></span>
                </div>
            </a>
    </div>
    <?php  if($datos__resultado['status'] === NULL || $datos__resultado['status'] === 'fuera de linea' ){  ?>
    <a href="#" class="enlace__conectarme"data-bs-toggle="modal" data-bs-target="#staticBackdrop">Hacerme visible para los usuarios</a>
    <?php }?>

    <?php  if($datos__resultado['status'] === 'disponible'){  ?>
        <form id="form-desconectarse">
        <input type="hidden" value="<?php echo $datos__resultado['id_conductor'] ?>" name="idConductor">
        <button class="btn__conectarse desconectarse">Desconectarme</button>
        <p class="texto__en__linea">Estoy disponible</p>
        </form>
        <?php  } ?>

</div>

<div class="modal fade modal__boostrap" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Entrar en linea</h5>
      </div>
      <div class="modal-body">
        <p class="parrafo__modal__body">En el momento que lo desees puedes entrar en  linea para que los usuario noten que estas disponible</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No entrar en linea</button>

<form id="form-conectarse">
<input type="hidden" value="<?php echo $datos__resultado['id_conductor'] ?>" name="idConductor">
<button class="btn__conectarse">Conectarme</button>
</form>

      </div>
    </div>
  </div>
</div>

<?php  
if($estado__recorrido['estado_recorrido'] ==='Recorrido terminado') {?>
<div class="modal__recorrido">
<div class="contendido__modal__recorrido">
  <div>
    <img src="./img/icon__celebracion.svg" alt="" class="imagen__celebracion">

  </div>
  <div>
    <h4 class="subtitulo__estado__recorrido">Completaste un nuevo recorrido</h4>
    <p class="parrafo__recorrido">Dejanos saber tu opinion sobre el usuario que acabas de dejar </p>
      <a href="perfil-conductor.php?id=<?php  echo $datos__resultado['id_conductor']  ?>#opinion" class="btn__dejar__opinion ">Dejar mi opinion</a>
  </div>
</div>

</div>

<?php  } ?>
 
 
<?php  include'layout/footer-home.php' ?>