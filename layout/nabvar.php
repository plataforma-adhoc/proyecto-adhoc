<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre cientos de conductores elegidos, disponibles las 24 horas">
  <title><?php echo  $titulo="Ad Hoc | Servicios Profesional De Conductor Elegido" ?></title>
  <link rel="stylesheet" href="./css/app.css">
  <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="icon" type="image/ico" href="./img/favicon.ico" />
</head>

<body>
  <header class="hero">
    <nav class="nav__hero">
      <div class="container nav__container">
      <div class="logo">
            <a href="index.php"><img src="./img/logo.png" alt="" class="logo__accent"></a>
            <!-- <p class="texto__beta beta__home">BETA</p> -->
              
        </div>


        <div class="containers">
          <label class="btn btn-open" for="nav"><i class="fab fa-creative-commons-nd"></i></label>
          <input type="checkbox" id="nav" class="nav-opener" />
          <div class="nav">
            <div class="nav-header">
              <div class="nav-title">MENU</div>
              <label class="btn btn-nav" for="nav">
                <svg style="width: 36px; height: 36px" viewBox="0 0 24 24">
                  <path fill="currentColor"
                    d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                </svg>
              </label>
            </div>
            <ul class="nav-links">
              <li class="nav-link">
              <i class="fas fa-house-user"></i>
                <a href="index.php">Inicio</a>
              </li>
              <li class="nav-link">
              
              <i class="fas fa-user-astronaut"></i>
                  <a href="usuario.php">Crear un registro de usuario</a>
              </li>
              <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="login-usuario.php">Loguearme como usuario</a>
              </li>
              <li class="nav-link">
              <i class="fas fa-user-astronaut"></i>
                <a href="conductor.php">Recibir solicitudes</a>

              </li>
              <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="login-conductor.php">Loguearme como conductor</a>
              </li>
            </ul>
            <div class="nav-images">
              <div class="nav-image image-1">
                <h2 class="texto__nav__images">Solicita tu conductor elegido desde <span class="precio__hora">$ 25.000 COP</span>  hora, y un conductor elegido llegara a la puerta de tu casa</h2>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
  