<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['id_usuario'])? $_GET['id_usuario']: '';
$idPublicacion = isset($_GET['idp'])? $_GET['idp']: '';
$idContacto = isset($_GET['idc'])? $_GET['idc']: '';
$idFotos = isset($_GET['idf'])? $_GET['idf']: '';
if($id__usuario && $idPublicacion   && $idContacto && $idFotos){ ?>
 <div class="container contenedor__plan__pro">
 <h1 class="subtitulo__planes"> Publica tu moto con el 10% de descuento, solo por tiempo y accede a todos nuestros beneficios <span class="limitado">LIMITADO</span></h1>
  <p class="parrafo__plan__pro">AHORRA EL 10% ACTUALIZANDO TU PLAN AHORA </p>
 <br><br>
   <div class="contenedor__tablas__precio">
    <?php          
    $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones__moto WHERE activo = '1' ";
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
        <div class="contenedor contenido__tabla__de__precios">   
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
            <a href="procesar-pago-ads-moto?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&idu=<?php  echo $id__usuario ?>&idc=<?php echo  $idContacto ?>&idf=<?php echo  $idFotos ?>&idp=<?php echo  $idPublicacion ?>"class="boton">Lo quiero</a>
            
           <br><br>
        </div>
        
    </div>
<?php  }?>
<?php  }?>
<?php  }?>
<?php  }else{ 
  echo '<script>alert("Error al procesar la solicitud")
  location.href="historial-motos?idu='.  $id__usuario .'";
  </script>'
  ?>
  <?php  } ?>
 </div>
 </div>
<?php include'layout/footer-home.php';
 ?>

 