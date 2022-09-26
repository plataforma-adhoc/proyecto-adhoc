<?php   include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';

$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario ===""){
  header("Location: dashboard-usuario.php");
  exit;
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
   <h2>Nombre : <?php echo $datos__resultado['nombre_usuario']  ?></h2>
   <h4> Apellidos : <?php echo $datos__resultado['primer_apellido'] ?> <?php echo $datos__resultado['segundo_apellido'] ?></h4>
   <h2>Biografia detallada</h2>
   <h4>Email : <?php echo $datos__resultado['email'] ?></h4>
   <h4>Documento : <?php echo $datos__resultado['numero_documento'] ?></h4>
   <h4>Telefono : <?php echo $datos__resultado['numero_telefono'] ?></h4>
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
  <div class="contenido__comentario">
<?php    
$consulta__comentarios = "SELECT * FROM comentario__conductor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
while($fila = mysqli_fetch_array($ejecutar__consulta)){?>
  <div class="opinion">
        <div class="item__opinion">
               <p class="nombre__item__opinion"> De <?php echo $fila['nombre'] ?></a></p>
                <p class="parrafo"><?php echo $fila['comentario'] ?></p>
                <p class="fecha__publicacion">esto fue el  <?php echo $fila['fecha_de_calificacion'] ?></p>
  
        </div>
    
    </div>
 <?php } ?>
</div> 
</div>
<br><br>
<?php   include'layout/footer-home.php' ?>