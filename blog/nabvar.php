
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php echo $descripcion; ?>">
  <meta name="google-site-verification" content="pjfiKzcIqtbmwXzIHQRgS4BtoFvv-nM_E3Mjhpi8Uds" />
  <meta name="facebook-domain-verification" content="axfghf2epvyczsathwjx2vxr5x17xj" />
  <title><?php echo  $titulo ?></title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VZVL3HDXBJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VZVL3HDXBJ');
</script>
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-10993083164"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'AW-10993083164');
  </script>
  <!-- Meta Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '644310337474777');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=644310337474777&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
  <link rel="stylesheet" type="text/css" href="../css/app.css?v=2"> 
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="image/ico" href="../img/favicon.png" />
</head>
<body>
<div class="contenedor-lanzamiento">
    <div class="lanzamiento">
     <div class="contenido-lanzamiento">
       <img src="../img/texto.png" alt="Anunciar vehículo usado">
     </div>
     <div  class="contenido-lanzamiento">
       <img src="../img/vehiculos.png" alt="Anunciar vehículo usado">
     </div>
    </div>
  </div>
    <div class="loader" id="loader">
          <div class="dot"></div>
          <div class="dot"></div>
          <div class="dot"></div>
   </div>
  <header class="hero">
    <nav class="nav__hero">
      <div class="container nav__container ">
      <div class="logo">
            <a href="/"><img src="../img/logo.png" alt="logo adhoc " class="logo__accent"></a>          
        </div>
        <div class="containers">   
            <a href="/"  class="enlace__vender__vehiculo">Inicio</a>   
              <a href="../precios"  class="enlace__vender__vehiculo">Planes </a>
              <a href="../venta-de-carros-usados" class="enlace__vender__vehiculo">Vender carro</a>
              <a href="../venta-de-motos-usadas" class="enlace__vender__vehiculo">Vender  moto</a>
              <a href="--/guia"class="enlace__vender__vehiculo">cómo vender </a>     
              <!-- <button class="btn__cuenta" id="myBtn">Crear  cuenta</button>  -->
              <a href="../usuario"  class="btn__cuenta">Registrarme</a>
              <a href="../login-usuario"  class="enlace__vender__vehiculo">Iniciar sesion</a> 
            </div>         
          <label class="btn btn-open" for="nav" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fab fa-creative-commons-nd"></i></label>
          <input type="checkbox" id="nav" class="nav-opener" />
          <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="offcanvasScrollingLabel">MENU</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
      <ul class="nav-links">
              <li class="nav-link">
              <i class="fas fa-house-user"></i>
                <a href="/">Inicio</a>
              </li>
              <li class="nav-link">  
              <i class="fas fa-user-astronaut"></i>
                  <a href="usuario">Crear un registro </a>
              </li>
              <li class="nav-link">  
              <i class="fas fa-sign-in-alt"></i>
                  <a href="login-usuario">Iniciar sesion </a>
              </li>
             
              <li class="nav-link">
                  <i class="fas fa-shopping-bag"></i>
                    <a href="publicar-vehiculos">
                      Publicar carro</a>
  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-coins"></i>
                    <a href="precios">
                     Planes y precios</a>
  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-headset"></i>
                    <a href="contacto">Contactanos</a>  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-images"></i>
                    <a href="guia">
                   Como vender mi carro</a>  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-book-reader"></i>
                    <a href="blog"> Blog</a>  
                  </li>
            </ul>
  </div>
</div>
</nav>
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
