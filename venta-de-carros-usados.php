<?php 
$titulo = "🚀Venta de carros usados | vende tu carro usado en Colombia";
$descripcion ="Venta de carros usados  |  vende tu carro usado en Colombia fácil y rápido | recibe el mejor precio por tu vehículo usado ya mismo en la palma de tu mano 🚀";
include'layout/nabvar.php';?>
<section class="hero-main"> 
  <div class="container hero-textos">
    <div class="texto-de-hero">
      <h1 class="title titulo-venta"> <strong>Venta de carros usados</strong> <span class="title--active"></span></h1>
      <h2 class="copy copy-venta">Vende tu vehículo en tu   marketplace de carros usados   en Colombia<br><br>
      <p class="texto__banner"><i class="fas fa-mobile-alt"></i> Soporte incluido en tu plan gratis 24/7</p>
      <a href="https://api.whatsapp.com/send?phone=573227603630&text=¡Hola! Estamos encantados de tenerte aquí. ¿En qué podemos ayudarte hoy?" class="contacto__soporte" target="_blank"><i class="fab fa-whatsapp"></i> Recibe  soporte</a> <br>
      <a href="publicar-vehiculos" class="cta cta-venta">Publicar vehículo</a>
    </div>
    <div class="contenedor-imagen-fondo-venta-de-carros-usados">
      <img src="./img/venta-de-carros-usados.svg" alt="Venta De Carros Usados En Colombia" title="carros usados" class="imagen-venta-carros-de-usados">
    </div>
  </div> 
 </section>
 <div class="contenido-venta-de-carros-usados">
  <div class="contenedor-fijo">
    <div class="contenido-fijo">
        <h2 class="subtitulos-contenido">Marketplace de venta de carros usados en Colombia</h2>
    <p class="parrafo-contenido">Somos un marketplace de <strong>venta de carros usados</strong>
    que tiene como objetivo ayudarte aa vender tu vehiculo usado llegando a ciento de potenciales compradores en Colombia.
</p>
<a href="usuario" class="card__button btn-reg">Quiero crear una cuenta</a>
    </div>
  </div>
  <div class="contenido-con-scroll">
    <div class="contenido-scroll">
        <h2 class="subtitulos-contenido">Tu vehículo en las mejores manos</h2>
        <p class="parrafo-contenido">Sabemos que vender un vehiculo usado muchas veces puede ser un proceso dificil si no cuentas con experiencia al momento de venderlo, <br>
        aqui puedes encontrar una guia que te puede ayudar a tomar fotografias de calidad para que tu anuncio sea los más eficaz posible.
    </p>
    <a href="guia" class="btn-guia">Ver guia</a>
    <h2 class="subtitulos-contenido">Grafica de rendimiento</h2>
    <p class="parrafo-contenido">Mide y analiza como va  el anuncio de tu carro usado, con una grafica que te ayuda a ver el avance y no estes a ciegas</p>
    <div class="contenedor-grafica-vehiculo-usados">
        <img src="./img/grafica-vehiculos-usados" alt="" class="img-grafica-vehiculos-usados">
    </div>
    <h2 class="subtitulos-contenido">Crea tu anuncio</h2>
    <p class="parrafo-contenido">Crea un  anuncio atractvo en nuestro marketplace de carros usados en pocos pasos y cuentale a tu audiencia que hace diferente a tu vehículo de 
        los demas. 
    </p>
    <div class="contenedor-grafica-vehiculo-usados">
        <img src="./img/venta-de-carros-usados-creando-anuncio" alt="" class="img-grafica-vehiculos-usados">
    </div>
    <h2 class="subtitulos-contenido">Publica tu vehiculo gratis</h2>
    <p class="parrafo-contenido">Inicia tu prueba con 60 dias gratis, no necesitas registar una tarjeta de credito o debito para iniciar solo crea una cuenta gratis,
        registra la información de tu vehículo usado en pocos pasos y estara listo, sube hasta 10 imagenes.  
        </p>
        <h2 class="subtitulos-contenido">Soporte incluido</h2>
        <p class="parrafo-contenido"> Te brindamos soporte via chat en tiempo real con un equipo humano  y acceso a todas nuestras funcionalidades con tu plan de prueba.
            ¡Que esperas para vender tu vehículo usado! <br>
            registrate hoy mismo y crea tu anuncio Ya!
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