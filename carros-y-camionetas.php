<?php 
$titulo = "AdHoc | venta de carros usados";
 include'layout/nabvar.php'; ?> 
  
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
    <div class="vehiculos">
  <?php  include'conexion-db-accent.php'; 
$extraer__datos__publicaciones = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE estado_anuncio = '1'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$extraer__datos__publicaciones);
$numero__fila = mysqli_num_rows($ejecutar__consulta);

$seleccion__imagenes = "SELECT * FROM fotos__del__vehiculo  WHERE estado_anuncio = '1'";
$ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$seleccion__imagenes);
$numero__fila__fotos = mysqli_num_rows($ejecutar__consulta__fotos); 

$consulta__contacto__vendedor = "SELECT * FROM contacto__vendedor WHERE estado_anuncio = '1'";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__contacto__vendedor);
$numero__fila__contacto = mysqli_num_rows($ejecutar__consulta__contacto); 

if($numero__fila > 0 && $numero__fila__fotos > 0 && $numero__fila__contacto > 0){
while($fila = mysqli_fetch_array($ejecutar__consulta)){
   $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
 $fila__contactos = mysqli_fetch_array($ejecutar__consulta__contacto) ?>
    <div class="descripcion__del__vehiculo">
    <div class="contenedor__imagen__vehiculo">
         <img src="<?php echo $fila__fotos['foto_1'] ?>" alt="Foto portada del carro usado en venta" class="imagen__del__vehiculo">
         
         <?php if($fila['nombre_paquete'] ==="PREMIUN"){ ?>
          <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Patrocinado <?php echo ucwords($fila['nombre_vendedor'])?> </p>

<?php } ?>

<?php if($fila['nombre_paquete'] ==="GRATIS"){ ?>
 <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Anunciado por <?php echo ucwords($fila['nombre_vendedor'])?></p>
<?php } ?>
<p class="modelo__del__vehiculo precio__del__carro"><i class="fas fa-dollar-sign"></i> <?php echo number_format($fila['precio_del_vehiculo'],2,'.','.') ?></p>          
    </div>
<div class="datos__del__vehiculo">
  <div class="motor">
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['marca_del_vehiculo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['modelo_vehiculo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo  $fila['cilindraje_vehiculo'] ?></p>
</div> 
  <div class="kilometraje__y__año">
  <div>
      <p class="kilometros"><i class="fas fa-clock"></i> <?php echo  number_format($fila['kilometros_del_vehiculo'],2,'.','.') ?></p>
  </div>  
  <div>
      <p class="modelo__del__vehiculo"><i class="fas fa-calendar"></i> <?php echo $fila['anio_fabricacion'] ?></p>

  </div>
  </div>
  <div class="contenido__precio__y__mas__detalles">
    <div class="precio__del__vehiculo">
        <div class="precio">
            <a href="detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" class="mas__detalles"><i class="fas fa-plus"></i>  detalles</a>
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
            <a href="https://api.whatsapp.com/send?phone=57<?php echo $fila__contactos['whatsapp_1']?>&text=Hola, vi el anuncio de tu vehículo en AdHoc" class="enlace__whatsapp"target="_blank"><i class="fab fa-whatsapp"></i> Via mensaje</a>
        </div>
     <div class="contactos">
         <a href="mailto:<?php echo $fila__contactos['email']?>" class="enlace__whatsapp"><i class="fas fa-envelope"></i> Via email</a>
     </div>
</div>
<br>
</div>
<?php } ?>
<?php } ?> 
 </div>
</div>
<?php  include'layout/footer.php' ?>

