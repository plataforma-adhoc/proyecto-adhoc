<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['id_usuario'])? $_GET['id_usuario']: '';
$id__estilos = isset($_GET['id_diseño'])? $_GET['id_diseño']: '';
$id__contacto = isset($_GET['id_contacto'])? $_GET['id_contacto']: '';
$id__equipamiento = isset($_GET['id_equipamiento'])? $_GET['id_equipamiento']: '';
$id__fotos = isset($_GET['id_fotos'])? $_GET['id_fotos']: '';
$id__informacion = isset($_GET['id_informacion'])? $_GET['id_informacion']: '';
$id__seguridad = isset($_GET['id_seguridad'])? $_GET['id_seguridad']: '';
if($id__usuario && $id__estilos && $id__contacto && $id__equipamiento && $id__fotos && $id__informacion && $id__seguridad){ ?>

 <div class="container contenedor__plan__pro">
 <h1 class="subtitulo__planes"> Publica tu vehiculo con el 10% de descuento, solo por tiempo y accede a todos nuestro beneficios <span class="limitado">LIMITADO</span></h1>
  <p class="parrafo__plan__pro">AHORRA EL 10% ACTUALIZANDO TU PLAN AHORA </p>
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
            <a href="proceso-de-pago?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&idu=<?php  echo $id__usuario ?>&ide=<?php echo $id__estilos ?>&idc=<?php echo  $id__contacto ?>&ideq=<?php echo  $id__equipamiento ?>&idf=<?php echo  $id__fotos ?>&idi=<?php echo  $id__informacion ?>&ids=<?php echo  $id__seguridad ?>"class="boton">Lo quiero</a>
            
           <br><br>
        </div>
        
    </div>
<?php  }?>
<?php  }?>
<?php  }?>
<?php  }else{ 
  echo '<script>alert("Error al procesar la solicitud")
  location.href="mis-carros-anunciados?idu='.  $id__usuario .'";
  </script>'
  ?>

  <?php  } ?>
 </div>
 </div>
<?php include'layout/footer-home.php';
 ?>

 