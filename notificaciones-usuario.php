<?php  include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id = isset($_GET['id']) ? $_GET['id'] : '';

$actualizar__notificacion = "UPDATE notificaciones__conductor SET leido = '1' WHERE id_notificacion = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__notificacion);


$consulta__comentarios = "SELECT * FROM notificaciones__conductor WHERE id_usuario = '{$_SESSION['id_usuario']}'   ORDER BY id_notificacion DESC LIMIT 5";
$ejecutar__consulta__notificaciones = mysqli_query($conexion__db__accent,$consulta__comentarios);
?>
<!-- <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button> -->
<div class="container contenedor__notificaiones">
<h3 class="titulo__notificaciones">Notificaciones</h3>
<?php    

while($fila__datos = mysqli_fetch_array($ejecutar__consulta__notificaciones)){ ?>
    <div class="contenido__notificacion"> 
            <a href="perfil-usuario.php?id=<?php  echo $datos__resultado['id_usuario'] ?>#opinion1"class="enlaces__ver__notificacion enlace__notificacion__individual">
                <img src="upload/<?php echo $fila__datos['avatar'] ?>" alt="" class="avatar__perfil">
                <div class="datos datos__de__notificacion"> <?php echo $fila__datos['nombre_usuario'] ?> ha hecho un comentario <i
                        class="fas fa-comment-alt"></i> <br>
                    <p class="fecha__notificacion"> El dia
                        <?php echo date("d-m-Y",strtotime($fila__datos['fecha_notificacion'])) ?></p>
                </div>
            </a>  
       <a href="eliminar-notificacion.php?id=<?php  echo $fila__datos['id_notificacion'] ?>" class="hidde">Eliminar </a>
    
</div>

<?php } ?>


</div>
<br><br>


<?php  include'layout/footer-home.php' ?>