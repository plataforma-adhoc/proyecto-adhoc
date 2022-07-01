<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página web AlexCG Design</title>
    <link rel="stylesheet" href="./css/app.css">
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <header class="hero">
        <nav class="nav__hero">
            <div class="container nav__container">
                <div class="logo">
                    <a href="./"><img src="./img/logo__accent.png" alt="" class="logo__accent"></a>
                </div>


                <div class="containers">
                    <label class="btn btn-open" for="nav" id="abrir-menu"><i class="fab fa-creative-commons-nd"></i></label>
                    <input type="checkbox" id="nav" class="nav-opener" />
               </div>
        </nav>
    </header>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" id="cerrar-menu">&times;</a>
        <div class="overlay-content">
            <a href="#">About</a>
            <a href="#">Services</a>
            <a href="#">Clients</a>
            <a href="#">Contact</a>
        </div>

    </div>

