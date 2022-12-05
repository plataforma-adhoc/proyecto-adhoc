<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['idu'])? $_GET['idu']: '';
$id__estilos = isset($_GET['ids'])? $_GET['ids']: '';
$id__contacto = isset($_GET['idc'])? $_GET['idc']: '';
$id__equipamiento = isset($_GET['ide'])? $_GET['ide']: '';
$id__fotos = isset($_GET['idf'])? $_GET['idf']: '';
$id__informacion = isset($_GET['idi'])? $_GET['idi']: '';
$id__seguridad = isset($_GET['ids'])? $_GET['ids']: '';

 ?>
 <div class="container contenedor__plan__pro">
 <h1 class="subtitulo__planes"> Publica tu vehiculo con el 60% de descuento, solo por tiempo <span class="limitado">LIMITADO</span></h1>
  <p class="parrafo__plan__pro">AHORRA EL 50% ACTUALIZANDO TU PLAN AHORA </p>
 <br><br>
   <div class="contenedor__tablas__precio">
    <?php  
            
    $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones WHERE activo = '1' ";
     $ejecutar = mysqli_query($conexion__db__accent,$consulta__planes);
    if(mysqli_num_rows($ejecutar) > 0){
    while($fila__planes = mysqli_fetch_array($ejecutar)){
    if($fila__planes['nombre_paquete'] ==='PREMIUN'){   
    $nombre__paquete = $fila__planes['nombre_paquete'];
    $valor__paquete = $fila__planes['valor_paquete'];
    $descripcion__paquete = $fila__planes['descripcion_paquete'];
    $descuento = $fila__planes['descuento'];
    $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );
       ?>
        <div class="contenedor">   
        <div class="tabla">
            <h2><?php  echo $nombre__paquete  ?></h2>
            <img src="./img/plan__free.svg" alt="contactos">
            <?php   
            if($descuento > 0){ ?>
            <p>Antes <sup>$</sup> <del><?php  echo $valor__paquete;  ?> </del></p>
            <h3>
            <?php  echo number_format($precio__descuento,2,'.',',') ?> <br>
                <small class="text-success"><?php  echo $descuento ?>% de descuento</small>
            </h3>
             
          <?php  } else { ?>
            <h3><sup>$</sup><?php  echo $valor__paquete  ?> </h3>
            <?php  } ?>
            <p><?php  echo  $descripcion__paquete ?></p>
            <?php if( $valor__paquete > 0){ ?>
            <a href="proceso-de-pago?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&idu=<?php  echo $id__usuario ?>"class="boton">Lo quiero</a>
            <?php }else { ?>
            <a href="plan-gratis?idpaq=<?php  echo $fila__planes['id_paquete'] ?>"class="boton">Lo quiero</a>
                
           <?php } ?>
           <br><br>
        </div>
        
    </div>
<?php  }?>
<?php  }?>
<?php  }?>

 </div>
 </div>
<?php include'layout/footer-home.php';
 ?>