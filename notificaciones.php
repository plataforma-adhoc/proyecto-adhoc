<?php  include'layout/nav-home-conductor.php';
$id = isset($_GET['id']) ? $_GET['id'] : '';

$actualizar__notificaion = "UPDATE notificaciones__usuario SET leido = '1' WHERE id_notificacion = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__notificaion);


$consulta__comentarios = "SELECT * FROM notificaciones__usuario WHERE id_conductor = '{$_SESSION['id_conductor']}'   ORDER BY id_notificacion DESC LIMIT 5";
$ejecutar__consulta__notificaciones = mysqli_query($conexion__db__accent,$consulta__comentarios);
?>

<div class="container contenedor__notificaiones">
<h3 class="titulo__notificaciones">Notificaciones</h3>
<?php    while($fila__datos = mysqli_fetch_array($ejecutar__consulta__notificaciones)){?>
    <div class="contenido__notificacion">
                <a href="perfil-conductor?id=<?php  echo $datos__resultado['id_conductor'] ?>#opinion"class="enlaces__ver__notificacion enlace__notificacion__individual">
                    <img src="upload/<?php echo $fila__datos['avatar'] ?>" alt="" class="avatar__perfil">
                    <div class="datos datos__de__notificacion"> <?php echo $fila__datos['nombre_conductor'] ?> ha hecho un comentario <i
                            class="fas fa-comment-alt"></i> <br>
                        <p class="fecha__notificacion"> El dia
                            <?php echo date("d-m-Y",strtotime($fila__datos['fecha_notificacion'])) ?></p>
                    </div>
                </a>  
       <a href="eliminar-notificacion?id=<?php  echo $fila__datos['id_notificacion'] ?>" class="hidde">Eliminar </a>

</div>

<?php } ?>
</div>
<br><br>


<?php  include'layout/footer-home.php' ?>