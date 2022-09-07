<?php  include'layout/nav-home-usuario.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

$actualizar__notificaion = "UPDATE notificaciones__conductor SET leido = '1' WHERE id_notificacion = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__notificaion);


$consulta__comentarios = "SELECT * FROM notificaciones__conductor WHERE id_conductor = '{$_SESSION['id_usuario']}'   ORDER BY id_notificacion DESC LIMIT 5";
$ejecutar__consulta__notificaciones = mysqli_query($conexion__db__accent,$consulta__comentarios);
?>

<div class="container contenedor__notificaiones">
<h3 class="titulo__notificaciones">Notificaciones</h3>
<?php    while($fila__datos = mysqli_fetch_array($ejecutar__consulta__notificaciones)){  
    $consulta__datos__usuario = "SELECT * FROM conductores WHERE id_conductor = '{$fila__datos['id_usuario']}' ";
    $ejecutar__consulta__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    $fila__datos__usuario = mysqli_fetch_array($ejecutar__consulta__usuario);
    ?>
    <div class="contenido__notificacion">
    
            <a href="perfil-usuario.php?id=<?php  echo $datos__resultado['id_usuario'] ?>#opinion1"class="enlaces__ver__notificacion enlace__notificacion__individual">
                <img src="upload/<?php echo $fila__datos__usuario['avatar'] ?>" alt="" class="avatar__perfil">
                <div class="datos datos__de__notificacion"> <?php echo $fila__datos__usuario['nombre_conductor'] ?> ha hecho un comentario <i
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