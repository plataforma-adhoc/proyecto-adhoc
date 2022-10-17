<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Descubre cientos de conductores elegidos disponibles las 24 horas">
  <meta name="google-site-verification" content="pjfiKzcIqtbmwXzIHQRgS4BtoFvv-nM_E3Mjhpi8Uds" />
  <title><?php echo  $titulo="AdHoc | Servicios  De Conductor Elegido Conduce El Vehiculo De Otra Persona" ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">  
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
        <!-- <a href="login-usuario.php" class="enlace__vender__vehiculo">Vender</a> -->
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
                <a href="index.php">Inicio</a>
              </li>
              <li class="nav-link">
              
              <i class="fas fa-user-astronaut"></i>
                  <a href="usuario.php">Crear un registro de usuario</a>
              </li>
              <!-- <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="login-usuario.php">Loguearme como usuario</a>
              </li> -->
              <li class="nav-link">
              <i class="fas fa-user-astronaut"></i>
                <a href="conductor.php">Recibir solicitudes</a>

              </li>
              <!-- <li class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
                <a href="login-conductor.php">Loguearme como conductor</a>
              </li> -->
            </ul>
  </div>
</div>
    </nav>


<div id="myModal" class="modal__registro__de__cuenta">
  <div class="modal__registros">
    <p class="close"><i class="far fa-times-circle"></i></p>
    <p class="titulo__crear__cuenta">Crear una cuenta como </p>
    <div class="contenedor__btn__registros">
      <div>
        <a href="usuario.php"class="btn__cuenta__registro">Usuario <i class="fas fa-arrow-right flecha"></i></a>
      </div>
      <div>
        <a href="conductor.php" class="btn__cuenta__registro">Conductor <i class="fas fa-arrow-right flecha"></i></a>
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