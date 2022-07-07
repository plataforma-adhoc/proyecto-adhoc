<?php include'layout/nav-home-usuario.php';
include'conexion/conexion-db-accent.php';
$consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE email = '{$_SESSION['id_usuario']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta);
}?>

<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario">Hola <?php echo $datos__resultado['nombre_usuario'] ?></h2>
    <p class="titulo__dashboard">Te presentamos algunos conductores</p>
    <div class="datos__perfiles">
        <a href="./info-conductor"class="card__perfiles__dashboard" data-aos="zoom-in">
            <img src="./img/first-person.jpg" alt="" class="imagen__cards__perfiles">
            <div class="card__datos__conductor"><h2>Nombre</h2></div>
            <div class="card__datos__conductor">
                 <p>10 años de experiencia </p>
                <p>disponible</p>
             </div>
        </a>

    </div>
</div>

<?php include'layout/footer-home.php' ?>