<?php    
session_start();
if(!isset($_SESSION['id_usuario'])){
  header("Location: ./login-usuario");
  die();
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web AlexCG Design</title>
    <link rel="stylesheet" href="./css/app.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/ico" href="./img/favicon.ico"/>
</head>

<body>
    <header class="hero">
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                    <a href="./dashboard-usuario"><img src="./img/logo__accent.png" alt="" class="logo__accent"></a>
                </div>


                <div class="enlaces__varios">
                   <a href="./perfil-usuario" class="enlace__perfil__usuario"><img src="./img/avatar__defecto.svg " alt="" class="avatar__perfil"></a> 
                    <label class="btn btn-open" for="nav" id="abrir-menu"><i class="fab fa-creative-commons-nd btn__abrir__menu"></i></label> 
                    <div>
                    </div>
               </div>
        </nav>
    </header>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" id="cerrar-menu"><i class="fas fa-times"></i></a>
        <div class="overlay-content">
         <div class="contenedor__enalces__menu__home"><a href="./perfil-usuario" class="enlaces__menu__home"><img src="./img/avatar__defecto.svg " alt="" class="avatar__perfil"><div class="item__nombre">Juan fbhdfsdfs</div></a></div>
           <div class="contenedor__enalces__menu__home"><a href="./dashboard-usuario" class="enlaces__menu__home"> <i class="fas fa-home"></i> Home</a></div> 
           <div class="contenedor__enalces__menu__home"><a href="./historial-usuario" class="enlaces__menu__home"><i class="fas fa-history"></i> Historial</a></div> 
           <div class="contenedor__enalces__menu__home"><a href="./configuracion-usuario" class="enlaces__menu__home"><i class="fas fa-cogs"></i> Configuracion</a></div> 
            <div class="contenedor__enalces__menu__home"><a href="./ayudanos-a-mejorar" class="enlaces__menu__home"><i class="fas fa-mail-bulk"></i> Ayudanos a mejorar</a></div>
           <div class="contenedor__enalces__menu__home"><a href="./perfil-usuario" class="enlaces__menu__home"><i class="fas fa-comments"></i> Reseñas</a></div> 
            <div class="contenedor__enalces__menu__home"><a href="./desconectar-usuario" class="enlaces__menu__home"><i class="fas fa-power-off"></i> Desconectarse</a></div>
        </div>

    </div>

