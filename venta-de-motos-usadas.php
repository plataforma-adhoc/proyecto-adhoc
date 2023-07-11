<?php 
$titulo = "🚀Venta de motos usadas | vende tu moto usada ¡hoy mismo!";
$descripcion ="Motos usadas en  Bogotá | vende tu moto usada en Bogotá  o en toda Colombia fácil y rápido| recibe el mejor precio por tu moto |  ¡inicia gratis Ya!🚀";
include'layout/nabvar.php';?>
<section class="hero-main"> 
  <div class="container hero-textos">
    <div class="texto-de-hero">
      <h1 class="title titulo-venta"> <strong>🚀Venta de motos usadas <br> vende tu moto  usada ¡hoy mismo!</strong><span class="title--active"></span></h1>
      <h2 class="copy copy-venta">Vende tu moto usada por el precio justo <br><br>
      <p class="texto__banner"><i class="fas fa-mobile-alt"></i> Soporte incluido en tu plan gratis 24/7</p>
      <a href="https://api.whatsapp.com/send?phone=573227603630&text=¡Hola! Estamos encantados de tenerte aquí. ¿En qué podemos ayudarte hoy?" class="contacto__soporte" target="_blank"><i class="fab fa-whatsapp"></i> Recibe  soporte</a> <br>
      <a href="publicar-moto" class="cta cta-venta">Publicar moto</a>
    </div>
    <div class="contenedor-imagen-fondo-venta-de-carros-usados">
      <img src="./img/venta-de-motos-usadas.svg" alt="Venta De Carros Usados En Colombia" title="Motos usadas" class="imagen-venta-carros-de-usados">
    </div>
  </div> 
 </section>
 <div class="contenido-venta-de-carros-usados">
  <div class="contenedor-fijo">
    <div class="contenido-fijo">
        <h2 class="subtitulos-contenido">Marketplace de motos usadas </h2>
    <p class="parrafo-contenido">Necesitas vender tu moto ?. Te ayudamos en el proceso de venta conectandote con cientos de potenciales compradores qualificados
        haciendo qué el proceso sea más facil.  
</p>
<a href="usuario" class="card__button btn-reg">Quiero crear una cuenta</a>
    </div>
  </div>
  <div class="contenido-con-scroll">
    <div class="contenido-scroll">
        <h2 class="subtitulos-contenido">Tu moto usada en las mejores manos</h2>
        <p class="parrafo-contenido">
            Convierte tu usada en efectivo, muchos compradores están buscando la moto que tu estás vendiendo. Unete hoy mismo y empieza a recibir ofertas de compra.
    </p>
    <h2 class="subtitulos-contenido">Datos de rendimiento</h2>
    <p class="parrafo-contenido">Analiza los resultados de tu anuncio con nuestra grafica que te permite ver la cantidad de personas que han visitado tu anuncio y las que se han contactado contigo.</p>
    <div class="contenedor-grafica-vehiculo-usados">
        <img src="./img/grafica-vehiculos-usados" alt="Grafica de rendimiento motos usadas" class="img-grafica-vehiculos-usados" title="Grafica">
    </div>
    <h2 class="subtitulos-contenido">Crea tu anuncio y llega a tus compradores</h2>
    <p class="parrafo-contenido">Destaca lo mejor de tu moto completando el  formulario en unos simples pasos, para que puedas enfocarte en lo que realmente te interesa. 
    </p>
    <div class="contenedor-grafica-vehiculo-usados">
        <img src="./img/venta-de-motos-usadas-creando-anuncio" alt="Creando el anuncio de motos usadas" class="img-grafica-vehiculos-usados" title="Creando el anuncio">
    </div>
    <h2 class="subtitulos-contenido">Sube hasta 10 fotografias</h2>
    <p class="parrafo-contenido">10 imagenes valen más que mil palabras, destaca esas fotografias que hacen especial a tu moto usada.  te brindamos una guia para tomar buenas fotografias y crear un anuncio atractivo.
        </p>
        <a href="guia" class="btn-guia">Ver guia</a>
        <br><br>
        <div class="contenedor-grafica-vehiculo-usados fotografias">
        <img src="./img/fotografia-venta-de-motos-usadas.svg" alt="Toamndo las fotografias de la moto usada" class="img-grafica-vehiculos-usados" title="Tomando las fotografias">
    </div>
        <h2 class="subtitulos-contenido">Soporte</h2>
        <p class="parrafo-contenido"> Te brindamos soporte via chat en tiempo real con un equipo humano  y acceso a todas nuestras funcionalidades con tu plan de prueba.
            ¡Que esperas para unirte! <br>
            registrate hoy mismo ofrece tu moto usada y recibe ofertas en poco tiempo.
    </p>
    </div>
  </div>
</div>
<?php include'layout/footer.php' ?>
<script>
    document.addEventListener('DOMContentLoaded', function() {
  var menu = document.querySelector('.nav__hero');
  var altura = menu.offsetTop;
  
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > altura) {
      menu.classList.add('menu__sticky');
    } else {
      menu.classList.remove('menu__sticky');
    }
  });
});

</script>