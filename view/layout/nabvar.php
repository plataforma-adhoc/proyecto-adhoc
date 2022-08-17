<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página web AlexCG Design</title>
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
          <a href="./"><img src="./img/logo__accent.png" alt="" class="logo__accent"></a>
          <span class="texto__beta">BETA</span>
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
                <a href="./">Inicio</a>
              </li>
              <li class="nav-link">
              
              <i class="fas fa-user-astronaut"></i>
                  <a href="./usuario">Crear un registro de usuario</a>
              </li>
              <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="./login-usuario">Loguearme como usuario</a>
              </li>
              <li class="nav-link">
              <i class="fas fa-user-astronaut"></i>
                <a href="./conductor">Recibir solicitudes</a>

              </li>
              <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="./login-conductor">Loguearme como conductor</a>
              </li>
            </ul>
            <div class="nav-images">
              <div class="nav-image image-1">
                <h2 class="texto__nav__images">Solicita tu conductor elegido desde <span class="precio__hora">$ 25.000 COP</span>  hora y haz que tus mejores momentos  sean inolvidables</h2>
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>