<?php  
include'conexion-db-accent.php';  
session_start();
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario");
  die();
}else{
  $consulta__datos = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
  $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos);
  if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 
}}?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Expires" content="0">
  <meta http-equiv="Last-Modified" content="0">
  <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <title><?php echo ucwords($datos__resultado['nombre_usuario']) ?> en AdHoc| Carros  y motos usadas</title>
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-VZVL3HDXBJ"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-VZVL3HDXBJ');
    ! function (f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function () {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '644310337474777');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=644310337474777&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->
  <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="./css/app.css?v=2">
  <link rel="icon" type="image/ico" href="./img/favicon.png" />
</head>
<body>
  <header class="hero">
    <nav class="nav__hero">
      <div class="container nav__container">
        <div class="logo">
          <a href="dashboard-usuario"><img src="./img/logo.png" alt="logo" class="logo__accent logo__home"></a>
        </div>
        <div class="enlaces__varios">
          <a href="dashboard-usuario" class="enlaces__menu__home home"> <i class="fas fa-home"></i></a>
          <div>      
            <a href="#" class="enlace__notificaciones enlaces__menu__home" data-bs-toggle="modal" data-bs-target="#modal-notificaciones"><i
                class="fas fa-bell"></i>
              <?php 
            $selecion__contador =  "SELECT  id_usuario,leido FROM notificaciones WHERE id_usuario = '{$_SESSION['id_usuario']}' AND leido = '0' ";
            $ejecutar__consulta__notificacion = mysqli_query($conexion__db__accent,$selecion__contador);
            if( $total__comentarios = mysqli_num_rows($ejecutar__consulta__notificacion) > 0){ ?>
              <span class="total__notificaciones"><?php echo $total__comentarios ?></span>
            </a>
            <?php  } ?>
          </div>
          <div>
            <a href="perfil-usuario?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
              class="enlace__perfil__usuario enlaces__menu__home"><img src="upload/<?php  echo $datos__resultado['avatar'] ?>" alt=""
                class="avatar__perfil"></a>
          </div>

          <div>
          </div>
          <label class="btn btn-open btn__open__dashboard" for="nav" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
            aria-controls="offcanvasScrolling"><i class="fab fa-creative-commons-nd"></i></label>
          <input type="checkbox" id="nav" class="nav-opener" />
          <div class="containers">
            <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
              id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasScrollingLabel">MENU</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="nav-links">
                  <li class="nav-link">
                    <a href="perfil-usuario?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                      class="enlaces__menu__home">
                      <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__perfil">
                    </a>
                    <div class="item__nombre"><?php echo $datos__resultado['nombre_usuario'] ?></div>

                  </li>
                  <li class="nav-link">
                    <i class="fas fa-home"></i>
                    <a href="dashboard-usuario" class="enlaces__menu__home">Regresar a mi casa</a>
                  </li>


                  <li class="nav-link">
                    <i class="fas fa-shopping-bag"></i>

                    <a href="publicar-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                      class="enlaces__menu__home">
                      Publicar Vehiculo</a>
                  <li class="nav-link">
                    <i class="fas fa-cogs"></i>
                    <a href="configuracion-usuario?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                      class="enlaces__menu__home">
                      Configuracion</a>

                  </li>
                  <li class="nav-link">
                    <i class="fas fa-mail-bulk"></i>
                    <a href="ayudanos-a-mejorar" class="enlaces__menu__home">
                      Ayudanos a mejorar</a>

                  </li>
                  <li class="nav-link">
                    <i class="fas fa-hand-holding-usd"></i>
                    <a href="mis-carros-anunciados?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                      class="enlaces__menu__home">
                      Historial de anuncios</a>

                  </li>
                  <li class="nav-link">
                    <i class="fas fa-power-off"></i>
                    <a href="desconectar-usuario?id=<?php  echo $datos__resultado['id_usuario'] ?>"
                      class="enlaces__menu__home">Cerrar
                      sesión</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

      </div>
      </div>

      </div>

    </nav>
  </header>

  <?php  mysqli_close($conexion__db__accent)?>
  </div>
  </div>