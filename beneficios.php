<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario");
  die();
}
?>

<div class="container contenedor__de__beneficios">
 <h1 class="titulo__beneficios">Tus beneficios</h1>
 <div class="contenido__de__beneficios">
    <h2 class="subtitulo__beneficios">No hay beneficios actualmente</h2>
<p class="parrafo__beneficios">Nos encontramos trabajando actualmente para brindarte los mejores beneficios 
    por anunciar tu vehiculo con nosotros esperalos muy pronto.
</p>
 </div>
</div>

<?php include'layout/footer-home.php' ?>