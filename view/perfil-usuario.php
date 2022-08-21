<?php   include'layout/nav-home-usuario.php';
include'conexion/conexion-db-accent.php';

$id_usuario = isset($_GET['id']) ? $_GET['id']:'';
if($id_usuario ===""){
  header("Location: ./dashboard-usuario");
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
<div class="container contenedor__datos__perfil"> 
    <div class="info__perfil">
        <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="foto__de__perfil">
        <div class="redes__sociales">
        <?php  if($datos__resultado['facebook'] !=NULL ){ ?>
            <a href="<?php echo $datos__resultado['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
             <?php } ?>  
              
             <?php  if($datos__resultado['instagram'] !=NULL ){ ?>
                <a href="<?php echo $datos__resultado['instagram'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-instagram"></i></a>
             <?php } ?> 

             <?php  if($datos__resultado['twitter'] !=NULL ){ ?>
                <a href="<?php echo $datos__resultado['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
             <?php } ?>
                    
            </div>
        <a href="./edit-perfil-usuario?id=<?php echo $datos__resultado['id_usuario'] ?>" class="enlace__editar__perfil">Editar perfil <i class="fas fa-long-arrow-alt-right"></i></a>
        </div>
        <div class="info__perfil">
        <p class="biografia__detallada">Biografia detallada</p>
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos"><strong>Nombre :</strong> <?php echo $datos__resultado['nombre_usuario'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido :</strong> <?php echo $datos__resultado['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido :</strong> <?php echo $datos__resultado['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"> <strong>E-mail :</strong> <?php echo $datos__resultado['email'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento :</strong> <?php echo $datos__resultado['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono :</strong> <?php echo $datos__resultado['numero_telefono'] ?></p>
            </div>
           
             <div>
             <p class="datos__basicos fecha__registro">Miembro desde : <?php echo date("d-m-Y",strtotime($datos__resultado['fecha_de_registro'])) ?></p>

             </div>

        </div>
    </div>
</div>

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
        <form  class="formulario__respuesta" id="form-comentario-usuario">
            <input type="hidden" value="<?php  echo $datos__resultado['id_usuario'] ?>" name="idUsuario">
            <input type="hidden" value="<?php  echo $datos__resultado__conductor['id_conductor'] ?>" name="idConductor">
            
            <input type="text" placeholder="Escribe una posible respuesta" class="respuesta" name="respuesta" autocomplete="off"id="respuesta-comentario"> 
            <button class="boton__respuesta"><i class="fas fa-paper-plane"></i></button>

            <?php  if(mysqli_num_rows($ejecutar__consulta) < 0){ ?>
                    <h2 class="titulo__opinion"><i class="fas fa-comment-dots"></i> Aun no hay comentarios</h2>
            <?php } ?>
        </form>
    </div>

</div>
<br><br>
<?php   include'layout/footer-home.php' ?>