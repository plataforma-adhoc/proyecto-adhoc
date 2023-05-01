<?php  
$titulo =  "Venta de carros usados| AdHoc";
include'layout/nabvar.php'; ?>
<section class="hero__main">
    <div class="contenedor__imagen__banner">
        <img src="./img/fondo__banner.webp" alt="Entregando las llaves de un carro" class="imagen__banner">
    </div>
    <div class=" container hero__textos">
        <h1 class="title">Quieres vender tu carro usado ?<span class="title--active"></span></h1>
        <h2 class="copy">Vende tu carro usado por el precio justo a un comprador particular en cualquier parte de Colombia<br>
            <span class="copy__active">Anucialo gratis </span></h2>
        
    </div>
</section>
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

if($numero__fila > 0 && $numero__fila__fotos > 0 && $numero__fila__contacto > 0){ ?>
<div class="">
<div class="container  muestra__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
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
  <div class="contenido__contacto__mas__detalles">
    <div class="contactos__del__vehiculo">
      <a href="https://api.whatsapp.com/send?phone=numero<?php echo $fila__contactos['whatsapp_1']?>&text=mensaje=Hola vi el anuncio de tu vehiculo en AdHoc" class="enlace__whatsapp"><i class="fab fa-whatsapp" target="_blank"></i></a>
      </div>
     <a href="detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" class="mas__detalles"><i class="fas fa-plus"></i> Mas detalles
     </a>
    </div>
      <div>
  </div>

  <div>
      <p class="modelo__del__vehiculo precio__del__carro"><i class="fas fa-dollar-sign"></i> <?php echo number_format($fila['precio_del_vehiculo'],2,'.','.') ?></p>
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
<br>
</div>
<?php }
?>
</div>
<div class="contenedor__btn__cta">
    <a href="carros-y-camionetas" class="cta">Mas vehiculos <i class="fas fa-plus"></i></a>
</div>
</div>
</div>
<?php } ?>    

    <div class="container services">
        <h2 class="subtitle subtitulo">Qué me ofrece AdHoc ?<span class="point">.</span></h2>
        <div class="contenedor__funciones">
            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Campañas de marketing digital</h2>
                    <p class="parrafo__contenido__funciones"> En nuestra plataforma, realizamos amplias campañas de marketing digital en toda Colombia para ayudarte a encontrar compradores para tu carro usado. 
                        Sabemos que vender un auto puede ser un proceso complicado y a veces estresante, 
                        por eso nos encargamos de llevar a los compradores de carros usados  hasta ti.
                       </p>
                </div>
            </div>

            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Tienes una empresa?</h2>
                    <p class="parrafo__contenido__funciones">Ya sea que estés buscando comprar un carro usado o vender el tuyo, nuestra plataforma te ofrece una manera sencilla y eficiente de hacerlo. 
                        Todo lo que necesitas hacer es crear una cuenta y empezar a publicar tus vehículos en nuestra plataforma.
                        Nuestro sistema te permite publicar tantos vehículos como quieras, sin tener que preocuparte por tener múltiples cuentas o registros. </p>
                </div>
            </div>

            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Obten beneficios exclusivos</h2>
                    <p class="parrafo__contenido__funciones">Si estás buscando vender tu carro usado en Colombia, 
                        anunciarlo con nosotros es la mejor opción. Te ofrecemos beneficios exclusivos, 
                        una audiencia amplia y relevante de compradores potenciales, y asesoramiento y soporte personalizado durante todo el proceso de venta. 
                        ¡No esperes más para empezar a vender tu carro usado con nosotros! </p>
                </div>
            </div>

            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Incio sin costo</h2>
                    <p class="parrafo__contenido__funciones"> ¡Prueba nuestra plataforma durante los primeros 30 días sin costo alguno! 
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
                    <p class="parrafo__contenido__funciones">en nuestra plataforma no solo te ofrecemos una manera fácil y efectiva de vender tu carro usado, sino también información detallada sobre las visualizaciones de tu anuncio y los compradores interesados. 
                        ¡Regístrate hoy mismo y descubre todo lo que podemos hacer por ti!</p>
                    <!-- <strong class="en__construccion">Nuevo</strong> -->
                </div>
            </div>

            <div class="contenido__funciones">
                <div>
                    <i class="fas fa-circle"></i>
                </div>
                <div>
                    <h2 class="subtitulo__funciones">Consejos de seguridad</h2>
                    <p class="parrafo__contenido__funciones">Te brindamos asesoramiento sobre cómo preparar tu vehículo para la venta, 
                        incluyendo la limpieza y el mantenimiento necesario para atraer a los compradores potenciales. 
                        También te proporcionamos consejos sobre cómo establecer un precio justo y competitivo para tu vehículo, 
                        y cómo presentar tu vehículo de manera efectiva en el anuncio</p>
                    <a href="carros-y-camionetas#asesoramiento" class="card__button">leer mas</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <h2 class="subtitle subtitle subtitulo">Por qué elegir nuestro portal para vender tu carro usado ? <span
            class="point">.</span></h2>
    <p class="copy__section texto__copy"> aquí te presentamos algunas de las razones</p>
    <div class="contenedor__eleccion">
        <div class="container servicios">
            <div class="slider slider__1 ">
                <div>
                    <i class="fas fa-chalkboard-teacher iconos__slider"></i>
                    <p class="subtitulo__slider">Brindamos un servicio de soporte al cliente excepcional para ayudarte
                        en todo el proceso de publicación de tu anuncio para tu carro usado</p>
                </div>
            </div>

            <div class="slider slider__3 ">
                <div>
                    <i class="fas fa-images iconos__slider"></i>
                    <p class="subtitulo__slider">En nuestra plataforma, puedes publicar fotos y detalles de tu carro
                        usado para que los compradores puedan ver todo lo que tienen que saber antes de hacer una oferta
                    </p>

                </div>
            </div>

            <div class="slider slider__7">
                <div>
                    <i class="fas fa-money-check-alt iconos__slider"></i>
                    <p class="subtitulo__slider">Publica tu carro en nuestro portal hoy mismo y comienza a recibir
                        ofertas en poco tiempo. ¡Anuncia con nosotros y obtén resultados!</p>
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
    </div>
    </div>
    <div style="height: 150px; overflow: hidden;">
    </div>

    </div>

    <section class="services services__vender__carro">
        <div class="container">
            <h3 class="subtitle subtitulo">Hazle saber a Colombia que estás vendiendo tu carro<span
                    class="point">.</span></h3>
            <p class="copy__section texto__copy"> Anuncia tu carro a la hora que quieras y desde donde quieras, AdHoc te
                ayuda a vender tu carro de forma segura. </p>
            <article class="container-cards">
                <div class=" card__services">
                    <div class="imagen__services">
                        <img src="img/Tiempo__real.svg" class="card__img" alt="recibiendo mensajes">

                    </div>
                    <div class="cards__text">
                        <p class="card__list">Recibe ofertas en tu celular</p>
                        <!-- <h3 class="card__title">Entrega las llaves<span class="point">.</span></h3> -->
                        <p class="card__copy">Todas las ofertas de compras las podras recibir en tu telefono.
                            Chatea o recibe llamadas de tu posible comprador.
                        </p>
                        <a href="usuario" class="card__button">Registrarme </a>
                    </div>
                </div>
                <div class="card__services" id="formas-de-pago">
                    <div class="imagen__services">
                        <img src="img/En__linea.svg" class="card__img" alt="Escribiendo mensaje">
                    </div>
                    <div class="cards__text">
                        <p class="card__list">No estas convencido ? </p>
                        <!-- <h3 class="card__title">Metodos de pago<span class="point">.</span></h3> -->
                        <p class="card__copy">
                            Un equipo humano esta dispuesto a resolver tus dudas cuando lo necesites.
                        </p>
                        <a href="contacto" class="card__button">Necesito ayuda</a>

                    </div>
                </div>
                <div class="card__services">
                    <div class="imagen__services">
                        <img src="img/dinero.svg" class="card__img" alt="Celular en la mano con signo de pesos">

                    </div>
                    <div class="cards__text">
                        <p class="card__list">Ha llegado el momento de vender tu carro ? </p>
                        <!-- <h3 class="card__title">Seguridad<span class="point">.</span></h3> -->
                        <p class="card__copy">
                            Vende tu carro a un particular por el precio justo.
                        </p>
                        <a href="publicar-vehiculos" class="card__button">Anunciar</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
    <section class="container nuestra__forma__de__pago">
        <h2 class="subtitulo__nuestra__forma">Medios de pago</h2>
        <!-- <p class="paypal__parrafo"></p> -->
        <article class="container-cards cards__formas__de__pago">
            <div class="card precios card__precios" id="formas-de-pago">
                <div class="cards__text">
                    <p class="card__list paypal">Billetera digital</p>
                    <div class="linea"></div>
                    <img src="./img/logo__daviplata.png" alt="Logo Daviplata" class="img__billeteras">
                    <img src="./img/paypal.png" alt="Logo Paypal" class="img__billeteras">
                </div>
            </div>
            <div class="card precios  card__precios">
                <div class="cards__text">
                    <p class="card__list credito">Transferencia bancaria</p>
                    <div class="linea"></div>
                    <br>
                    <img src="./img/safetypay.png" alt="Logo Safetypay" class="img__billeteras">
                    <img src="./img/pse.png" alt="Logo pse" class="img__billeteras">
                </div>
            </div>
            <div class="card precios  card__precios">
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
            <div class="card precios  card__precios__efectivo">
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
   
    <section class=" container contenedor__anuncio__propio">
        <div class=" contenido__img__anuncio">
            <img src="./img/imagen__anuncio__carros.png" alt="mujer en su celular  e icono de redes sociales"
                class="imagen__anuncio__carros">
        </div>
        <div class="contenido__anuncio__texto">
            <h4 class="subtitulo__anuncio">¿Estás buscando vender tu carro usado de manera rápida y sencilla?</h4>
            <p class="texto__anuncio"> ¡Entonces has venido al lugar correcto! En nuestro sitio web, te ofrecemos una
                plataforma fácil de usar y confiable para que puedas publicar tu anuncio y llegar a una gran
                audiencia de compradores interesados.
                <br><br>
                Crea tu cuenta, registra los datos de tu carro usado y ahora estara listo para ser publicado.
            </p>
            <a href="publicar-vehiculos" class="publicar__carro">Publicar mi carro <i
                    class="fas fa-arrow-right flecha"></i></a>
        </div>
    </section>
    <br><br>
</main>

<?php include'layout/footer.php'; ?>
