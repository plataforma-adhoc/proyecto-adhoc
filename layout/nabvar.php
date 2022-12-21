
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="  Venta de carros usados  Bogotá, conectamos vendedores con compradores,  !ANUNCIATE YA!">
  <meta name="google-site-verification" content="pjfiKzcIqtbmwXzIHQRgS4BtoFvv-nM_E3Mjhpi8Uds" />
  <meta name="facebook-domain-verification" content="axfghf2epvyczsathwjx2vxr5x17xj" />
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <title><?php echo  $titulo ?></title>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-VZVL3HDXBJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-VZVL3HDXBJ');
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
  <link rel="stylesheet" type="text/css"href="./css/app.css"> 
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="image/ico" href="./img/favicon.png" />
</head>

<body>
<div class="oferta__de__lanzamiento">
 <p class="titulo__promo__de__lanzamiento">! PROMO DE LANZAMIENTO ¡</p>
</div>
  <header class="hero">
    <nav class="nav__hero">
      <div class="container nav__container">
      <div class="logo">
            <a href="/"><img src="./img/logo.png" alt="logo adhoc " class="logo__accent"></a>          
        </div>
        <div class="containers">
          <a href="publicar-vehiculos" class="enlace__vender__vehiculo">Publicar mi usado</a>
          <button class="btn__cuenta" id="myBtn">Crear  cuenta</button>
         
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
                  <i class="fas fa-shopping-bag"></i>
                    <a href="publicar-vehiculos">
                      Publicar carro</a>
  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-coins"></i>
                    <a href="precios">
                     Nuestros precios</a>
  
                  </li>
                  <li class="nav-link">
                  <i class="fas fa-headset"></i>
                    <a href="contacto">
                   Te Asesoramos</a>
  
                  </li>
            </ul>
  </div>
</div>
    </nav>


<div id="myModal" class="modal__registro__de__cuenta">
  <div class="modal__registros">
    <p class="close"><i class="far fa-times-circle"></i></p>
    <p class="titulo__crear__cuenta">Crear una cuenta en AdHoc </p>
    <div class="contenedor__btn__registros">
      <div>
        <a href="usuario"class="btn__cuenta__registro">Crear una cuenta  <i class="fas fa-arrow-right flecha"></i></a>
      </div>
      <div>
        <a href="login-usuario"class="btn__cuenta__registro">Crear una sesion  <i class="fas fa-arrow-right flecha"></i></a>
      </div>
    </div>
  </div>
</div>

<script>
  var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];
btn.onclick = function() {
  modal.style.display = "block";
}

span.onclick = function() {
  modal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

</script>