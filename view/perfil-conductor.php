<?php  include'layout/nav-home-conductor.php';

include'conexion/conexion-db-accent.php';
$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE email = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 }?>
<div class="container contenedor__datos__perfil">
    <div class="info__perfil">
        <img src="upload/<?php  echo $datos__resultado['avatar'] ?>" alt="" class="foto__de__perfil">
        <div>
            <a href="" class="enlace__de__redes__sociales"><i class="fab fa-facebook"></i></a>
            <a href="" class="enlace__de__redes__sociales"><i class="fab fa-instagram"></i></a>
            <a href="" class="enlace__de__redes__sociales"><i class="fab fa-twitter"></i></a>

        </div>

        <a href="./edit-perfil-conductor?id=<?php echo $datos__resultado['id_conductor'] ?>" class="enlace__editar__perfil">Editar perfil <i
                class="fas fa-long-arrow-alt-right"></i></a>
    </div>
    <div class="info__perfil">
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['nombre_conductor'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['email'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['numero_telefono'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['numero_licencia'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['categoria_licencia'] ?></p>
            </div>
            <div>
                <p class="datos__basicos quien__soy"><?php echo $datos__resultado['quien_soy'] ?></p>
            </div>
            <div>
                <p class="datos__basicos fecha__registro"><?php echo $datos__resultado['fecha_de_registro'] ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container contenedor__opinion">
    <p class="titulo__opinion">Centro de opiniones</p>
    <div class="opinion__1">
        <div class="item__opinion">
            <img src="./img/first-person.jpg" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion">
                <p>Nombre</p>
            </div>
        </div>
        <div class="parrafo__item__opinion">
            <p class="parrafo">
                hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh
            </p>
            <p class="fecha__publicacion">02-26-2022</p>
        </div>

    </div>

    <div class="opinion__1">
        <div class="item__opinion">
            <img src="./img/first-person.jpg" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion">
                <p>Nombre</p>
            </div>
        </div>
        <div class="parrafo__item__opinion">
            <p class="parrafo">
                hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh
            </p>
            <p class="fecha__publicacion">02-26-2022</p>
        </div>

    </div>
    <form action="" class="formulario__respuesta">
        <input type="text" placeholder="Escribe una posible respuesta" class="respuesta">
        <button class="boton__respuesta"><i class="fas fa-paper-plane"></i></button>
    </form>
</div>
<br><br>

<?php  include'layout/footer-home.php' ?>