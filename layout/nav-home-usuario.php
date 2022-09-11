<?php  
include'conexion-db-accent.php';  
session_start();
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario.php");
  die();
}
$consulta__datos = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos);
if(mysqli_num_rows($resultado__consulta) > 0){
$datos__resultado = mysqli_fetch_array($resultado__consulta); 

 }
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ad Hoc | <?php echo $datos__resultado['nombre_usuario'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/app.css">
    <link rel="icon" type="image/ico" href="./img/favicon.ico"/>
</head>

<body>
    <header class="hero">
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                    <a href="dashboard-usuario.php"><img src="./img/logo.png" alt="" class="logo__accent logo__home"></a>
                </div>
                <?php  $consulta__comentarios = "SELECT * FROM notificaciones__conductor WHERE id_usuario = '{$_SESSION['id_usuario']}' AND leido = '0'  ORDER BY id_notificacion DESC LIMIT 5";
                $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
                 $total__notificaciones = mysqli_num_rows($ejecutar__consulta) ?>
                <div class="enlaces__varios">
                   <a href="perfil-usuario.php?id=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__perfil__usuario"><img src="upload/<?php  echo $datos__resultado['avatar'] ?>" alt="" class="avatar__perfil"></a>
                   <a href="#" class="enlace__notificaciones" id="abrir-modal"><i class="far fa-bell"></i>
            <?php  if($total__notificaciones > 0){ ?><span class="numero__notificaciones">
              <?php   echo $total__notificaciones ?></span> <?php } ?>
          </a>
              
                    <!-- <label class="btn btn-open " for="nav" id="abrir-menu"><i class="fab fa-creative-commons-nd btn__abrir__menu"></i></label>  -->
                    <div>
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
                  <a href="perfil-usuario.php?idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                    class="enlaces__menu__home">
                    <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__perfil">
                  </a>
                  <div class="item__nombre"><?php echo $datos__resultado['nombre_usuario'] ?></div>


                </li>
                <li class="nav-link">
                  <i class="fas fa-home"></i>
                  <a href="dashboard-usuario.php">Home</a>

                </li>
                <li class="nav-link">
                  <i class="fas fa-history"></i>
                  <a href="historial-usuario.php?idu=<?php echo $datos__resultado['id_usuario'] ?>"
                    class="enlaces__menu__home">Mi historial</a>
                </li>
                <!-- <li class="nav-link">
                <i class="fas fa-briefcase"></i>
                  <a href="servicios.php?idu=<?php  echo $datos__resultado['id_usuario'] ?>">
                    Servicios</a>

                </li> -->
                <li class="nav-link">
                  <i class="fas fa-cogs"></i>
                  <a href="configuracion-usuario.php?idu=<?php  echo $datos__resultado['id_usuario'] ?>">
                    Configuracion</a>

                </li>
                <li class="nav-link">
                <i class="fas fa-mail-bulk"></i>
                  <a href="ayudanos-a-mejorar.php">
                    Ayudanos a mejorar</a>

                </li>
                <li class="nav-link">
                  <i class="fas fa-power-off"></i>
                  <a href="desconectar-usuario.php?idu=<?php  echo $datos__resultado['id_usuario'] ?>">Cerrar
                    sesión</a>
                </li>
              </ul>

              <div class="nav-images">
                <div class="nav-image image-1">
                  <!-- <h2 class="texto__nav__images">Solicita tu conductor elegido desde <span class="precio__hora">$ 25.000 COP</span>  hora, y un conductor elegido llegara a la puerta de tu casa</h2> -->

                </div>
              </div>
            </div>
          </div>
        </div>
               </div>
              
        </nav>
    </header>
    <!-- <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" id="cerrar-menu"><i class="fas fa-times"></i></a>
        <div class="overlay-content">
         <div class="contenedor__enalces__menu__home"><a href="./perfil-usuario?id=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlaces__menu__home"><img src="upload/<?php  echo $datos__resultado['avatar'] ?>" alt="" class="avatar__perfil"><div class="item__nombre"><?php echo $datos__resultado['nombre_usuario'] ?></div></a></div>
           <div class="contenedor__enalces__menu__home"><a href="./dashboard-usuario" class="enlaces__menu__home"> <i class="fas fa-home"></i> Home</a></div>  
           <div class="contenedor__enalces__menu__home"><a href="./historial-usuario" class="enlaces__menu__home"><i class="fas fa-history"></i> Historial</a></div> 
           <div class="contenedor__enalces__menu__home"><a href="./configuracion-usuario?id=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlaces__menu__home"><i class="fas fa-cogs"></i> Configuracion</a></div> 
            <div class="contenedor__enalces__menu__home"><a href="./ayudanos-a-mejorar" class="enlaces__menu__home"><i class="fas fa-mail-bulk"></i> Ayudanos a mejorar</a></div>
           <div class="contenedor__enalces__menu__home"><a href="./perfil-usuario" class="enlaces__menu__home"><i class="fas fa-comments"></i> Comentarios</a></div> 
            <div class="contenedor__enalces__menu__home"><a href="./desconectar-usuario?id=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlaces__menu__home"><i class="fas fa-power-off"></i> Desconectarse</a></div>
        </div>

    </div> -->
    <div id="myModalNotificaciones" class="modal__notificaciones">
        <div class="" id="modal__content__notificaciones">
            <span class="close">x</span>
            <h3 class="titulo__notificaciones">Notificaciones</h3>

        <?php while($fila__recorrido = mysqli_fetch_array($ejecutar__consulta)){
        $consulta__datos__usuario = "SELECT * FROM conductores WHERE id_conductor = '{$fila__recorrido['id_conductor']}' ";
        $ejecutar__consulta__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
        $fila__datos = mysqli_fetch_array($ejecutar__consulta__usuario);
        ?>
                <div class="contenido__notificacion">
                <a href="notificaciones-usuario.php?id=<?php  echo $fila__recorrido['id_notificacion'] ?>"class="enlaces__ver__notificacion">
                    <img src="upload/<?php echo $fila__datos['avatar'] ?>" alt="" class="avatar__perfil">
                    <div class="datos"> <?php echo $fila__datos['nombre_conductor'] ?> ha hecho un comentario <i
                            class="fas fa-comment-alt"></i> <br>
                        <p class="fecha__notificacion"> El dia
                            <?php echo date("d-m-Y",strtotime($fila__recorrido['fecha_notificacion'])) ?></p>
                    </div>
                </a>  
            </div>
            <?php } ?>
            <br>
            <?php   if(mysqli_num_rows($ejecutar__consulta) > 6){ ?>
            <a href="notificaciones.php" class="enlace__mas__notificaciones"><i class="fas fa-plus"></i> ver mas
                notificaciones</a>
                <?php } ?>
        </div>
    </div>
