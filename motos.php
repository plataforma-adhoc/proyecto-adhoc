<?php 
$titulo = "AdHoc | Motos  usadas";
 include'layout/nabvar.php'; ?> 
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
    <div class="vehiculos">
  <?php  
 include'conexion-db-accent.php';  
$extraerDatosPublicaciones = "SELECT * FROM informacion__de__la__moto__en__venta WHERE estadoAnuncio = '1'";
$ejecutarConsulta = mysqli_query($conexion__db__accent,$extraerDatosPublicaciones);
$numeroFila = mysqli_num_rows($ejecutarConsulta);

$seleccionImagenes = "SELECT * FROM fotos__de__la__moto  WHERE estado_anuncio = '1'";
$ejecutarConsultaFotos = mysqli_query($conexion__db__accent,$seleccionImagenes);
$numeroFilaFotos = mysqli_num_rows($ejecutarConsultaFotos); 

$consultaContactoVendedor = "SELECT * FROM contacto__vendedor__moto WHERE estado_anuncio = '1'";
$ejecutarConsultaContacto = mysqli_query($conexion__db__accent,$consultaContactoVendedor);
$numeroFilaContacto = mysqli_num_rows($ejecutarConsultaContacto); 

if($numeroFila > 0 && $numeroFilaFotos > 0 && $numeroFilaContacto > 0){
while($fila = mysqli_fetch_array($ejecutarConsulta)){
   $filaFotos = mysqli_fetch_array($ejecutarConsultaFotos);
 $filaContactos = mysqli_fetch_array($ejecutarConsultaContacto) ?>
    <div class="descripcion__del__vehiculo">
    <div class="contenedor__imagen__vehiculo">
         <img src="<?php echo $filaFotos['foto_1'] ?>" alt="Foto portada del carro usado en venta" class="imagen__del__vehiculo">         
         <?php if($fila['nombrePaquete'] ==="PREMIUN"){ ?>
          <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Patrocinado <?php echo ucwords($fila['nombreVendedor'])?> </p>
<?php } ?>
<?php if($fila['nombrePaquete'] ==="GRATIS"){ ?>
 <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Anunciado por <?php echo ucwords($fila['nombreVendedor'])?></p>
<?php } ?>
<p class="modelo__del__vehiculo precio__del__carro"><i class="fas fa-dollar-sign"></i> <?php echo number_format($fila['precio'],2,'.','.') ?></p>          
    </div>
<div class="datos__del__vehiculo">
  <div class="motor">
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['marca']) ?></p>
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['modelo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo  $fila['cilindraje'] ?></p>
</div> 
  <div class="kilometraje__y__año">
  <div>
      <p class="kilometros"><i class="fas fa-clock"></i> <?php echo  number_format($fila['kilometros'],2,'.','.') ?></p>
  </div>  
  <div>
      <p class="modelo__del__vehiculo"><i class="fas fa-calendar"></i> <?php echo $fila['fechaFabricacion'] ?></p>
  </div>
  </div>
  <div class="contenido__precio__y__mas__detalles">
    <div class="precio__del__vehiculo">
        <div class="precio">
            <a href="detalles-moto?idp=<?php echo $fila['idPublicacionMoto']?>&idu=<?php echo $fila['idUsuario']?>" class="mas__detalles"><i class="fas fa-plus"></i>  detalles</a>
        </div>
  <div>
</div>
</div>
</div>
<hr class="hr">
<div class="btn__compartir">
  <p class="texto__compartir">Compartir en <i class="fas fa-share-alt"></i> </p>
  <div class="enlaces__comprtir">
    <div class="compartir">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target_blank><i class="fab fa-facebook iconos__compartir"></i></a>
    </div>
    <div class="compartir">
    <a href="https://twitter.com/intent/tweet?text=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>"><i class="fab fa-twitter iconos__compartir"></i></a>
    </div>
    <div class="compartir">
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>"><i class="fab fa-linkedin-in  iconos__compartir"></i></a>

    </div>
  </div>
</div>
</div>
<div class="contactos__del__vehiculo">
        <div class="contactos">
            <a href="https://api.whatsapp.com/send?phone=57<?php echo $filaContactos['whatsapp']?>&text=Hola, vi el anuncio de tu moto en AdHoc" class="enlace__whatsapp"target="_blank"><i class="fab fa-whatsapp"></i> Via mensaje</a>
        </div>
     <div class="contactos">
         <a href="mailto:<?php echo $filaContactos['email']?>" class="enlace__whatsapp"><i class="fas fa-envelope"></i> Via email</a>
     </div>
</div>
<br>
</div>
<?php } ?>
<?php } ?> 
 </div>
</div>
<?php  include'layout/footer.php' ?>

