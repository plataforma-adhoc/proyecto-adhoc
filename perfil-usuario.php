<?php   include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';

$id_usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id_usuario ===""){
  header("Location: dashboard-usuario.php");
  exit;
}


$consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 }

 $consulta__datos__conductor = "SELECT *  FROM conductores";
$resultado__consulta__datos__conductor = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta__datos__conductor) > 0){
  $datos__resultado__conductor = mysqli_fetch_array($resultado__consulta__datos__conductor); 

 }
?>
    <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
    <div class="contenedor__subtitulo__ad__panel">
    <h2 class="subtitulo__ad__panel">Mi perfil</h2>
</div>
    <div class="container contenedor__datos__perfil"> 
<div class="datos__de__perfil">
<div class="card__solicitudes perfil">
     <div class="img">
       <img src="upload/<?php echo $datos__resultado['avatar'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos">
      <div class="name">
   <h2><?php echo $datos__resultado['nombre_usuario']  ?></h2>
   <h4><?php echo $datos__resultado['primer_apellido'] ?> <?php echo $datos__resultado['segundo_apellido'] ?></h4>
   <h2>Biografia detallada</h2>
   <h4><?php echo $datos__resultado['email'] ?></h4>
   <h4><?php echo $datos__resultado['numero_documento'] ?></h4>
   <h4><?php echo $datos__resultado['numero_telefono'] ?></h4>
   <h4><?php echo  date("d-m-Y",strtotime($datos__resultado['fecha_de_registro'])) ?></h4> 

  </div>

  <p class="text">

    </p>

    <ul class="stats">
    <li>  <h4>
    <?php  if($datos__resultado['facebook'] !=NULL ){ ?>
    <a href="<?php echo $datos__resultado['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
        <?php } ?> 
    </h4> 
</li>
    <li>  <h4> <?php  if($datos__resultado['instagram'] !=NULL ){ ?>
    <a href="<?php echo $datos__resultado['instagram'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-instagram"></i></a>
    <?php } ?></h4> 
    </li>
    <li>  <h4> <?php  if($datos__resultado['twitter'] !=NULL ){ ?>
        <a href="<?php echo $datos__resultado['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
    <?php } ?></h4> 
</li>
  </ul>

  <div class="links">
     <a href="edit-perfil-usuario.php?id=<?php echo $datos__resultado['id_usuario'] ?>" class="follow">Editar mi perfil <i class="fas fa-long-arrow-alt-right"></i></a>

  </div>

</div>
</div>
</div>
</div>
     
</div>
</div>
<br><br>
<div class="container contenedor__opinion" id="opinion1">
  <p class="titulo__opinion">Centro de opiniones</p>
  <p class="parrafo__info__opinion"><span><i class="fas fa-bullhorn"></i> ATENCION : </span> en este panel de comentarios esta prohibido usar groserias,hablar en tono obseno,
    insultar alos demas, u otro tipo de agresion berval, esto es solo para hacer comentarios sobre el servicio prestado . 
    Si tienes dudas te invitamos a conocer nuestros <a href="./terminos-y-condiciones-de-uso" class="enlace__a__terminos">Terminos y condiciones</a>
</p>
<?php    
$consulta__comentarios = "SELECT * FROM comentarios__conductor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
while($fila = mysqli_fetch_array($ejecutar__consulta)){?>
  <div class="opinion">
    <div class="opinion__1" id="comentario-1">
        <div class="item__opinion">
            <img src="upload/<?php echo $datos__resultado__conductor['avatar'] ?>" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion"><p><?php echo $datos__resultado__conductor['nombre_conductor'] ?></p></div>
        </div>
            <div class="parrafo__item__opinion">
                <p class="parrafo"><?php echo $fila['comentario'] ?></p>
                <p class="fecha__publicacion"><?php echo $fila['fecha_comentario'] ?></p>
        </div>
        </div>
    
    </div>
 <?php } ?>
    <div  id="comentario-usuario"></div>
      
        <form class="form-search" id="form-comentario-usuario">
        <?php   $consulta__datos__conductor = "SELECT id_conductor  FROM conductores";
        $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
        $datos__resultado__id = mysqli_fetch_array($resultado__consulta); ?>

      

    <?php  if(mysqli_num_rows($ejecutar__consulta) < 0){ ?>
        <h2 class="titulo__opinion"><i class="fas fa-comment-dots"></i> Aun no hay comentarios</h2>
        <?php }else{ ?>
            <input type="hidden" value="<?php  echo $datos__resultado['id_usuario'] ?>" name="idUsuario">
            <input type="hidden" value="<?php echo  $datos__resultado__id['id_conductor'] ?>" name="idConductor">
            <button class="boton__respuesta"><i class="fas fa-paper-plane"></i></button>
            <input type="text" placeholder="Escribe una respuesta"name="respuesta" autocomplete="off"id="respuesta-comentario">
            <?php }?>

  </form>
<?php   include'layout/footer-home.php' ?>