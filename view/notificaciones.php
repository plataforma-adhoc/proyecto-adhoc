<?php  include'layout/nav-home-conductor.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

$actualizar__notificaion = "UPDATE notificaciones__conductor SET leido = '1' WHERE id_notificacion = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__notificaion);


$consulta__comentarios = "SELECT * FROM notificaciones__conductor WHERE id_conductor = '{$_SESSION['id_conductor']}'   ORDER BY id_notificacion DESC LIMIT 5";
$ejecutar__consulta__notificaciones = mysqli_query($conexion__db__accent,$consulta__comentarios);
?>

<div class="container contenedor__notificaiones">
<h3 class="titulo__notificaciones">Notificaciones</h3>
<?php    while($fila__datos = mysqli_fetch_array($ejecutar__consulta__notificaciones)){  
    $consulta__datos__usuario = "SELECT * FROM usuarios WHERE id_usuario = '{$fila__datos['id_usuario']}' ";
    $ejecutar__consulta__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    $fila__datos__usuario = mysqli_fetch_array($ejecutar__consulta__usuario);
    ?>
<div class="contenido__notificacion">
    <a href="" class="enlace__notificacion__individual">
        <div>
            <img src="upload/<?php echo $fila__datos__usuario['avatar'] ?>" alt="" class="avatar__notificacion">
        </div>
        <div class="parrafo__de__notificaciones"><p> <span class="nombre__comentario"><?php echo $fila__datos__usuario['nombre_usuario'] ?></span> ha dado su opinio  <i class="fas fa-comment-alt"></i></p>
        
    </div>
</a>
<a href="./eliminar-notificacion?id=<?php  echo $fila__datos['id_notificacion'] ?>" class="hidde">Eliminar esta notificacion</a>
</div>
<?php } ?>
</div>



<?php  include'layout/footer-home.php' ?>