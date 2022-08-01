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

 $consulta__datos__conductor = "SELECT *  FROM conductores  LIMIT 1";
$resultado__consulta__datos__conductor = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta__datos__conductor) > 0){
  $datos__resultado__conductor = mysqli_fetch_array($resultado__consulta__datos__conductor); 

 }
?>
<div class="container contenedor__datos__perfil"> 
    <div class="info__perfil">
        <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="foto__de__perfil">
        <div>
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
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos"><?php echo $datos__resultado['nombre_usuario'] ?></p>
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
                <p class="datos__basicos"><?php echo $datos__resultado['segundo_apellido'] ?></p>
            </div>
             <div>
             <p class="datos__basicos fecha__registro">Miembro desde : <?php echo $datos__resultado['fecha_de_registro'] ?></p>

             </div>

        </div>
    </div>
</div>

<?php    

?>
<div class="container contenedor__opinion">
  <p class="titulo__opinion">Centro de opiniones</p>
  <div class="opinion">
    <div class="opinion__1" id="comentario-1">
        <div class="item__opinion">
            <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion"><p><?php echo $datos__resultado['nombre_usuario'] ?></p></div>
        </div>
            <div class="parrafo__item__opinion">
                <p class="parrafo">hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh</p>
                <p class="fecha__publicacion">02-26-2022</p>
        </div>
        </div>
    
    </div>
    <div class="opinion">
    <div class="opinion__1" id="comentario-1">
        <div class="item__opinion">
            <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion"><p><?php echo $datos__resultado['nombre_usuario'] ?></p></div>
        </div>
            <div class="parrafo__item__opinion">
                <p class="parrafo">hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh</p>
                <p class="fecha__publicacion">02-26-2022</p>
        </div>
        </div>
    
    </div>
    <div class="opinion__2" id="comentario-2">
    </div>

<form  class="formulario__respuesta" id="form-comentario-usuario">
        <input type="text" placeholder="Escribe una posible respuesta" class="respuesta" name="respuesta" autocomplete="off"id="respuesta-comentario">
        <input type="hidden" value="<?php  echo $datos__resultado['id_usuario'] ?>" name="idUsuario">
        <input type="hidden" value="<?php  echo $datos__resultado__conductor['id_conductor'] ?>" name="idConductor">
        <button class="boton__respuesta" type="submit"><i class="fas fa-paper-plane"></i></button>
</form>
</div>
<br><br>
<?php   include'layout/footer-home.php' ?>