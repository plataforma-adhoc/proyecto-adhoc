<?php  
$titulo =  "Venta de carros usados| AdHoc.com.co";
$descripcion = "Adhoc | Portal Especializado En La venta De Tu Carro Usado o Moto Usada | Adhoc";
include'layout/nabvar.php'; ?>
<div class="contenedor__slider">
        <div class="slider-contenedor">
            <section class="contenido-slider">
                <div class="container">
                <h1 class="title">Vende tu carro usado <span class="title--active"></span></h1>
                <h2 class="copy">Vende tu vehículo sin estrés ni complicaciones, en la plataforma en línea que te brinda soporte en todo el proceso de venta, desde la publicación hasta la transferencia de propiedad<br><br>
                <p class="texto__banner"><i class="fas fa-mobile-alt"></i> Soporte incluido en tu plan gratis 24/7</p>
                <a href="https://api.whatsapp.com/send?phone=573227603630&text=¡Hola! Estamos encantados de tenerte aquí. ¿En qué podemos ayudarte hoy?" class="contacto__soporte" target="_blank"><i class="fab fa-whatsapp"></i> Contactanos</a> <br>
                <a href="publicar-vehiculos" class="cta">Publicar vehículo </a>
                </div>
                <img src="animacion.svg" alt="">
            </section>
            <section class="contenido-slider">
                <div class="container">
                <h2 class="title">Encuéntrale comprador a tu moto usada desde la sala de tu casa <span class="title--active"></span></h2>
                <a href="https://api.whatsapp.com/send?phone=573227603630&text=¡Hola! Estamos encantados de tenerte aquí. ¿En qué podemos ayudarte hoy?" class="contacto__soporte" target="_blank"><i class="fab fa-whatsapp"></i> Contactanos</a> <br>
                <a href="publicar-moto" class="cta">Publicar ahora</a>
                </div>
                <img src="animacion2.svg" alt="">
            </section>
    </div>
    </div>
</header>
<main>
<?php  
 include'conexion-db-accent.php';
$extraer__datos__publicaciones = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE estado_anuncio = '1' LIMIT 4";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$extraer__datos__publicaciones);
$numero__fila = mysqli_num_rows($ejecutar__consulta);

$seleccion__imagenes = "SELECT * FROM fotos__del__vehiculo  WHERE estado_anuncio = '1' LIMIT 4";
$ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$seleccion__imagenes);
$numero__fila__fotos = mysqli_num_rows($ejecutar__consulta__fotos); 

$consulta__contacto__vendedor = "SELECT * FROM contacto__vendedor WHERE estado_anuncio = '1' LIMIT 4";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__contacto__vendedor);
$numero__fila__contacto = mysqli_num_rows($ejecutar__consulta__contacto); 

if($numero__fila > 4 && $numero__fila__fotos > 4 && $numero__fila__contacto > 4){ ?>
<div class="container  muestra__vehiculos">
    <h3 class="subtitulo__vehiculos">vehículos</h3> 
<div class="vehiculos">
<?php while($fila = mysqli_fetch_array($ejecutar__consulta)){
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
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-facebook iconos__compartir"></i></a>
    </div>
    <div class="compartir">
    <a href="https://twitter.com/intent/tweet?text=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-twitter iconos__compartir"></i></a>
    </div>
    <div class="compartir">
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-linkedin-in  iconos__compartir"></i></a>
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
<?php }?>
</div>

<?php 
if($numero__fila > 4 && $numero__fila__fotos > 4 && $numero__fila__contacto > 4){ ?>
<div class="contenedor__btn__cta">
    <a href="carros-y-camionetas" class="cta">Mas vehiculos <i class="fas fa-plus"></i></a>
</div>
<?php } ?>  
</div>
<?php } ?>
<?php
$extraerDatosMoto = "SELECT * FROM informacion__de__la__moto__en__venta WHERE estadoAnuncio = '1' LIMIT 4";
$ejecutarConsulta = mysqli_query($conexion__db__accent,$extraerDatosMoto);
$filaConsulta = mysqli_num_rows($ejecutarConsulta);

$seleccionImagenes = "SELECT * FROM fotos__de__la__moto  WHERE estado_anuncio = '1' LIMIT 4";
$ejecutarConsultaFotos = mysqli_query($conexion__db__accent,$seleccionImagenes);
$filaFotos = mysqli_num_rows($ejecutarConsultaFotos ); 

$consultaContactoVendedor = "SELECT * FROM contacto__vendedor__moto WHERE estado_anuncio = '1' LIMIT 4";
$ejecutarConsultaContacto = mysqli_query($conexion__db__accent,$consultaContactoVendedor);
$filaContacto = mysqli_num_rows($ejecutarConsultaContacto); 

if($filaConsulta > 4 && $filaFotos > 4 && $filaContacto > 4){ ?>
<div class="container  muestra__motos">
<h3 class="subtitulo__vehiculos">Motos</h3> 
<div class="vehiculos">
<?php while($filaMotos = mysqli_fetch_array($ejecutarConsulta)){
   $filaFotos = mysqli_fetch_array($ejecutarConsultaFotos);
 $filaContacto = mysqli_fetch_array($ejecutarConsultaContacto) ?>
    <div class="descripcion__del__vehiculo">
    <div class="contenedor__imagen__vehiculo">
         <img src="<?php echo $filaFotos['foto_1'] ?>" alt="Foto portada del carro usado en venta" class="imagen__del__vehiculo">
         <?php if($filaMotos['nombrePaquete'] ==="PREMIUN"){ ?>
          <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Patrocinado <?php echo ucwords($filaMotos['nombreVendedor'])?> </p>
<?php } ?>
<?php if($filaMotos['nombrePaquete'] ==="GRATIS"){ ?>
 <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Anunciado por <?php echo ucwords($filaMotos['nombreVendedor'])?></p>
<?php } ?>
 <p class="modelo__del__vehiculo precio__del__carro"><i class="fas fa-dollar-sign"></i> <?php echo number_format($filaMotos['precio'],2,'.','.') ?></p>          
</div>
<div class="datos__del__vehiculo">
  <div class="motor">
  <p class="motor__del__vehiculo"><?php echo ucwords($filaMotos['marca']) ?></p>
  <p class="motor__del__vehiculo"><?php echo ucwords($filaMotos['modelo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo  $filaMotos['cilindraje'] ?></p>
</div> 
  <div class="kilometraje__y__año">
  <div>
      <p class="kilometros"><i class="fas fa-clock"></i> <?php echo  number_format($filaMotos['kilometros'],2,'.','.') ?></p>
  </div>
  <div>
      <p class="modelo__del__vehiculo"><i class="fas fa-calendar"></i> <?php echo $filaMotos['fechaFabricacion'] ?></p>
  </div>
  </div>
  <div class="contenido__precio__y__mas__detalles">
    <div class="precio__del__vehiculo">
        <div class="precio">
            <a href="detalles-moto?idp=<?php echo $filaMotos['idPublicacionMoto']?>&idu=<?php echo $filaMotos['idUsuario']?>" class="mas__detalles"><i class="fas fa-plus"></i>  detalles</a>
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
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-facebook iconos__compartir"></i></a>
    </div>
    <div class="compartir">
    <a href="https://twitter.com/intent/tweet?text=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-twitter iconos__compartir"></i></a>
    </div>
    <div class="compartir">
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target="_blank"><i class="fab fa-linkedin-in  iconos__compartir"></i></a>
    </div>
  </div>
 
</div>
</div>
<div class="contactos__del__vehiculo">
        <div class="contactos">
            <a href="https://api.whatsapp.com/send?phone=57<?php echo $filaContacto['whatsapp']?>&text=Hola, vi el anuncio de tu moto en AdHoc" class="enlace__whatsapp"target="_blank"><i class="fab fa-whatsapp"></i> Via mensaje</a>
        </div>
     <div class="contactos">
         <a href="mailto:<?php echo $filaContacto['email']?>" class="enlace__whatsapp"><i class="fas fa-envelope"></i> Via email</a>
     </div>
</div>
<br>
</div>
<?php }?>
</div>

<?php 
if($filaMotos > 4 && $filaFotos > 4 && $filaContacto > 4){ ?>
<div class="contenedor__btn__cta">
    <a href="motos" class="cta"> <i class="fas fa-plus"> Motos </i></a>
</div>
<?php } ?>  
</div>
<?php } ?>
</div>
</div>
<br><br>
    <div class="container services">
        <h2 class="subtitle subtitulo">Qué te ofrecemos<span class="point">.</span></h2>
        <div class="contenedor__funciones">
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Campañas de marketing digital</h2>
                    <p class="parrafo__contenido__funciones"> 
                    Sabemos que este proceso puede resultar complicado y estresante,
                     por lo que nos encargamos de llevar a los potenciales compradores directamente hasta ti.
                       </p>
                </div>
            </div>
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Tienes una empresa?</h2>
                    <p class="parrafo__contenido__funciones">
                    ¿Buscas  vender varios  carros usados? regístrate, publica tus vehículos y listo. Con un sistema simple y eficiente, puedes publicar tantos vehículos como quieras, sin preocuparte por múltiples cuentas o registros.     
                </p>
                </div>
            </div>
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Obten beneficios exclusivos</h2>
                    <p class="parrafo__contenido__funciones">
                    Accede a promociones especiales y ofertas exclusivas entre otros. 
                    Unete hoy mismo y obtén beneficios únicos.                            
                </p>
                </div>
            </div>

            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Incio sin costo</h2>
                    <p class="parrafo__contenido__funciones"> ¡Prueba nuestra plataforma durante los primeros 60 días sin costo alguno! 
                        Sin necesidad de proporcionar información de tarjeta de crédito o débito, 
                        tendrás acceso a todas las funcionalidades y soporte incluido.</p>
                </div>
                       </div>
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Mide tus resultados </h2>
                    <p class="parrafo__contenido__funciones">información detallada sobre las visualizaciones de tu anuncio. 
                        ¡Que esperas unete hoy mismo!</p>
                    <!-- <strong class="en__construccion">Nuevo</strong> -->
                </div>
            </div>
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Consejos de seguridad</h2>
                    <p class="parrafo__contenido__funciones">
                    No solo te brindamos un espacio para publicar tu vehículo, 
                    sino también asesoramiento en cómo prepararlo para su venta. 
                    
                    </p>
                    <a href="guia" class="card__button">leer mas</a>
                </div>
            </div>
        </div>
    </div>    
    </div>
    <h2 class="subtitle subtitle subtitulo">Por qué elegir nuestro portal para vender tu carro usado ? <span class="point">.</span></h2>
    <p class="copy__section texto__copy"> aquí te presentamos algunas de las razones.</p>
    <div class="contenedor__eleccion">
        <div class="container servicios">
            <div class="slider slider__1 ">
                <div>
                    <i class="fas fa-chalkboard-teacher iconos__slider"></i>
                    <p class="subtitulo__slider">Brindamos un servicio de soporte al cliente excepcional para ayudarte
                        en todo el proceso de publicación de tu anuncio.</p>
                </div>
            </div>
            <div class="slider slider__3 ">
                <div>
                    <i class="fas fa-images iconos__slider"></i>
                    <p class="subtitulo__slider">En nuestra plataforma, puedes publicar fotos y detalles de tu carro
                         para que los compradores puedan ver todo lo que tienen que saber antes de hacer una oferta.
                    </p>
                </div>
            </div>

            <div class="slider slider__7">
                <div>
                    <i class="fas fa-money-check-alt iconos__slider"></i>
                    <p class="subtitulo__slider">Nuestro servicio de anuncios clasificados de carros usados ayuda a hombres y mujeres ocupados a vender  de manera rápida y eficiente, 
                        para que pueda seguir con su día a día sin preocupaciones.</p>
                </div>
            </div>
            <div class="slider slider__8">
                <div>
                    <i class="fas fa-window-restore iconos__slider"></i>
                    <p class="subtitulo__slider"> Hemos diseñado nuestro sitio para que sea fácil de usar y encontrar lo
                        que buscas.
                        Nuestro objetivo es hacer que la experiencia de publicar y encontrar un carro usado sea lo más
                        fácil posible
                    </p>
                </div>
            </div>
            
        </div>
        
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
            style="stroke: none; fill: #000524;"></path>
        </svg>
        
    <div style="height: auto; overflow: hidden; background:red;"></div>
    </div>

    <section class="services__vender__carro">
        <div class="container">
            <h3 class="subtitle subtitulo">Servicios <span class="point">.</span></h3>
            <p class="copy__section texto__copy"> Anuncia tu carro o moto a la hora que quieras y desde donde quieras, somos tu concesionario en linea. </p>
            <article class="container-cards-servicios">
                <div class="card__services">
                    <div class="imagen__services">
                    <img src="./img/carro.png" alt="carro icono" class="iconos__servicios">
                    </div>
                    <div class="cards__text">
                        <p class="card__list">Vehículo</p>
                        <p class="card__copy"> Vende tu carro a un particular por el precio justo. </p>
                        <a href="publicar-vehiculos" class="card__button">Anunciar </a>
                    </div>
                </div>
                
                <div class="card__services">
                    <div class="nuevo__servicio">Nuevo</div>
                    <div class="imagen__services">
                    <img src="./img/moto.png" alt="moto"  class="iconos__servicios">
                    </div>
                    <div class="cards__text">
                        <p class="card__list">Moto</p>
                        <p class="card__copy">Convierte tu moto en efectivo y encuentra al comprador perfecto.</p>
                        <a href="publicar-moto" class="card__button">Anunciar</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="container nuestra__forma__de__pago">
        <h2 class="subtitulo__nuestra__forma">Medios de pago</h2>
        <article class="container-cards cards__formas__de__pago">
            <div class="card__precios" id="formas-de-pago">
                <div class="cards__text">
                    <p class="card__list paypal">Billetera digital</p>
                    <div class="linea"></div>
                    <img src="./img/logo__daviplata.png" alt="Logo Daviplata" class="img__billeteras">
                    <img src="./img/paypal.png" alt="Logo Paypal" class="img__billeteras">
                </div>
            </div>
            <div class="card__precios">
                <div class="cards__text">
                    <p class="card__list credito">Transferencia bancaria</p>
                    <div class="linea"></div>
                    <br>
                    <img src="./img/safetypay.png" alt="Logo Safetypay" class="img__billeteras">
                    <img src="./img/pse.png" alt="Logo pse" class="img__billeteras">
                </div>
            </div>
            <div class=" card__precios">
                <div class="cards__text">
                    <p class="card__list credito">Tarjeta de crédito </p>
                    <div class="linea"></div>
                    <br>
                    <img src="./img/mastercard.png" alt="Trajeta Master Cards" class="img__tarjetas__de__credito">
                    <img src="./img/dinners__club.png" alt="tarjeta Dinners club" class="img__tarjetas__de__credito">
                    <img src="./img/american__express.png" alt="Taejeta American Xpress" class="img__tarjetas__de__credito">
                    <img src="./img/visa.png" alt="Tarjeta Visa" class="img__tarjetas__de__credito">
                </div>
            </div>
            <div class="card__precios__efectivo">
                <div class="cards__text__efectivo">
                    <p class="card__list credito">Efectivo </p>
                    <div class="linea"></div>
                    <br>
                    <div class="contendor__imagenes__efectivo">
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/gana.png" alt="Logo Gana" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/su__red.png" alt="Logo su red" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/punto__red.png" alt="Logo Punto Red" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/red__servi.png" alt="Logo Red Servi" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/la__perla.png" alt="Logo la Perla " class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/su__chance.png" alt="Logo Su chance" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/jer.png" alt="Logo Jer" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                        <img src="./img/logo__pagatodo.png" alt="Logo Paga todo" class="img__pago__en__efectivo">
                    </div>
                    <div class="contenedor__imagenes__pago__efectivo">
                       <img src="./img/efecty.png" alt="Logo Efecty" class="img__pago__en__efectivo">
                    </div>                                           
                    </div>
                    <br><br>
                </div>
            </div>
        </article>
    </section>   
</main>
<?php include'layout/footer.php'; ?>
