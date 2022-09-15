<?php include'layout/nav-home-usuario.php';

$id = isset($_GET['idc']) ? $_GET['idc'] : '';
if($id ==="" || $id !=$id){
header("Location: dashboard-usuario.php");
}
$consulta__datos__conductor = "SELECT * FROM conductores WHERE id_conductor = '$id' LIMIT 1";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
$datos__resultado__conductor = mysqli_fetch_array($ejecutar__consulta);

?>
<button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="contenedor__subtitulo__ad__panel">
    <h2 class="subtitulo__ad__panel">Informacion del conductor</h2>
</div>
<div class="container contenedor__datos__perfil">
<div class="datos__de__perfil">
<div class="card__solicitudes perfil">
     <div class="img">
       <img src="upload/<?php echo $datos__resultado__conductor['avatar'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos">
      <div class="name">
   <h2><?php echo $datos__resultado__conductor['nombre_conductor']  ?></h2>
   <h4><?php echo $datos__resultado__conductor['primer_apellido'] ?> <?php echo $datos__resultado__conductor['segundo_apellido'] ?></h4>
   <h2>Biografia detallada</h2>
   <h4><?php echo $datos__resultado__conductor['email'] ?></h4>
   <h4><?php echo $datos__resultado__conductor['numero_documento'] ?></h4>
   <h4><?php echo $datos__resultado__conductor['numero_telefono'] ?></h4>
   <h4><?php echo $datos__resultado__conductor['numero_licencia'] ?></h4>
   <h4><?php echo $datos__resultado__conductor['categoria_licencia'] ?></h4> 
   <h4><?php echo  date("d-m-Y",strtotime($datos__resultado__conductor['fecha_de_registro'])) ?></h4> 
   <?php    if($datos__resultado__conductor['quien_soy'] != NULL){   ?>
   <h4><?php echo $datos__resultado__conductor['quien_soy'] ?></h4>
<?php } ?>

  </div>

  <p class="text">

    </p>

    <ul class="stats">
    <li>  <h4>
    <?php  if($datos__resultado__conductor['facebook'] !=NULL ){ ?>
    <a href="<?php echo $datos__resultado__conductor['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
        <?php } ?> 
    </h4> 
</li>
    <li>  <h4> <?php  if($datos__resultado__conductor['instagram'] !=NULL ){ ?>
    <a href="<?php echo $datos__resultado__conductor['instagram'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-instagram"></i></a>
    <?php } ?></h4> 
    </li>
    <li>  <h4> <?php  if($datos__resultado__conductor['twitter'] !=NULL ){ ?>
        <a href="<?php echo $datos__resultado__conductor['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
    <?php } ?></h4> 
</li>
  </ul>

  <div class="links">
     <a href="servicios.php?idc=<?php  echo $datos__resultado__conductor['id_conductor']  ?>" class="follow">Elegir conductor <i class="fas fa-long-arrow-alt-right"></i></a>

  </div>

</div>
</div>
</div>
</div>
     
<div class="container contenedor__opinion">
    <p class="titulo__opinion">Que opinan otros usuarios de este conductor</p>
    <?php      
$consulta__comentarios = "SELECT * FROM comentarios__usuario WHERE id_conductor = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
if(mysqli_num_rows($ejecutar__consulta) > 0){

while($fila = mysqli_fetch_array($ejecutar__consulta)){ ?>
<div class="opinion">
 <div class="opinion__1" >
     <div class="item__opinion">
         <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__opinion__1">
         <div class="nombre__item__opinion"><p><?php echo $datos__resultado['nombre_usuario'] ?></p></div>
     </div>
         <div class="parrafo__item__opinion">
             <p class="parrafo"><?php echo $fila['comentario'] ?></p>
             <p class="fecha__publicacion"><?php echo $fila['fecha_comentario'] ?></p>
     </div>
     </div>
 
 </div>

 <?php } ?>
 <?php }else{ ?>
    <p class="titulo__opinion">No hay comentarios aun</p>

 <?php } ?>
 </div> 
<br><br>

<?php include'layout/footer-home.php'  ?>