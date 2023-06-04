<?php 
$titulo =  "AdHoc | Precios";
include'layout/nabvar.php'; ?>
<main>

    <section class="container">
        <h1 class="titulo__precios">Precios</h1>
        <p class="parrafo__precios">Comienza con una prueba gratis de 60 dias en el anuncio de tu vehculo, <br>
       cuando esta prueba este vencida puede pasar al plan premuin con generosos descuentos y precios exclusivos para ti.
    </p>
        <div class="tabla__de__precios">
    <div class="tarjetas__de__precio">
  <div class="descripcion__de__precio">
    <br><br>
  <p class="card-text texto__plan">Plan basico</p>
    <h2 class="card-title">GRATIS</h2>
    <p class="card-text"><i class="far fa-check-circle"></i> Sin tarjeta de credito o debito, solo creando un registro </p>
    <p class="card-text"><i class="far fa-check-circle"></i> Tu anuncio estara en las primeras paginas por el tiempo que dure tu prueba </p>
    <p class="card-text"><i class="far fa-times-circle"></i> Tu vehiculo dejara de estar en circulación cuando se cumpla tu prueba  </p>
    <p class="card-text"><i class="far fa-check-circle"></i> Mide el rendimiento de tu anuncio </p>
    <p class="card-text"><i class="far fa-check-circle"></i> Publicalo gratis por 60 dias sin costo alguno sin tarjeta de crédito o débito</p>
  </div>
  <br>
</div>
<!-- <div class=" tarjetas__de__precio">
  <div class="descripcion__de__precio">
    <br><br>
  <p class="card-text texto__plan">Plan Profesional</p>
    <h2 class="card-title">PREMUIN</h2>
    <p class="card-text"><i class="far fa-check-circle"></i> En circulacion hasta que vendas tu vehiculo</p>
    <p class="card-text"><i class="far fa-check-circle"></i> Sin restriciones</p>
    <p class="card-text"><i class="far fa-check-circle"></i> Descuentos en tu publicación</p>
    <p class="card-text"><i class="far fa-check-circle"></i> Puedes tener beneficios disponibles en el momento</p>
    <p class="card-text"><i class="far fa-check-circle"></i> Elige si quieres que tu vehiculo  sea publicado en nuestras  redes sociales</p>
    <p class="card-text"><i class="far fa-check-circle"></i> Mide el rendimiento de tu anuncio </p>
    <?php
    include'conexion-db-accent.php';
  $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones WHERE activo = '1' AND nombre_paquete = 'PREMIUN'";
  $ejecutar = mysqli_query($conexion__db__accent,$consulta__planes);
   $fila__planes = mysqli_fetch_array($ejecutar);
   $nombre__paquete = $fila__planes['nombre_paquete'];
    $valor__paquete = $fila__planes['valor_paquete'];   
     $descripcion__paquete = $fila__planes['descripcion_paquete'];
     $descuento = $fila__planes['descuento'];
     $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );  ?>
     <p class="antes">Antes <sup>$</sup> <del><?php  echo $valor__paquete;  ?> </del></p>
     <small class="text-success">HOY</small>
     <h2 class="ahora">
      <?php  echo number_format($precio__descuento,2,'.',',') ?> 
       <small class="text-success"><?php  echo $descuento ?>% de descuento</small>
        </h2>
  </div>
  <br>
</div> -->

        </div>
        </section>
</main>

<?php include'layout/footer.php'; ?>

