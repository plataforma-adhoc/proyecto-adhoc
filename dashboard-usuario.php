<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario");
  die();
}
    $consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    if(mysqli_num_rows($resultado__consulta) > 0){
      $datos__resultado = mysqli_fetch_array($resultado__consulta);
    

}?>



<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola <strong> <?php echo $datos__resultado['nombre_usuario'] ?></strong></h2>
    <br><br>
    <div class="contenedor__del__buscador">
      <h2 class="subtitulo__buscador">¿Que conductor buscamos hoy? </h2>
        <div class="buscador">
        <form class="example">
        <input type="text" placeholder="Buscar un conductor" name="campo" id="campo">
</form>

</div>
  </div>
    
    <p class="titulo__dashboard">Conductores disponibles</p>

    <div class="datos__perfiles__conductor" id="conductores-disponibles">
</div>
</div>
<?php   if($datos__resultado['avatar'] === 'avatar__defecto.png'){  ?>
<div class="container card__perfil__sin__editar datos__sin__editar__usuario" id="ventana-perfil">
<a href="#" class="cerrar__ventana" id="cerrar-ventana">X</a>
<div class="contenido">
  <img src="./img/perfil.svg" alt="configuracion perfil" class="avatar__de__configuracion">
 </div>
 <div class="contenido">
   <h3 class="subtitulo__perfil__sin__editar"><strong><?php echo $datos__resultado['nombre_usuario'] ?></strong> Configura tu foto de perfil</h3>
   <p class="subtitulo__perfil__sin__editar">Termina de configurar tus datos para que las personas sepan que tu perfil es confiable.</p>
   <a href="edit-perfil-usuario?idu=<?php echo $datos__resultado['id_usuario'] ?>" class="enlace__a__edicion btn__usuario">Empezar</a>
 </div>
</div>
 <?php } ?>

<!-- <?php  
 $consulta__servicios__completados = "SELECT estado_recorrido,status_2 FROM datos__inicio__recorrido WHERE estado_recorrido = 'Recorrido terminado' AND id_conductor ='{$_SESSION['id_usuario']}' AND status_2 = '0' ";  
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__servicios__completados);
$total__completados = mysqli_num_rows($ejecutar__consulta);
$estado__recorrido = mysqli_fetch_array($ejecutar__consulta);

if($estado__recorrido['estado_recorrido'] ==='Recorrido terminado') {?>
<div class="modal__recorrido">
<div class="contendido__modal__recorrido">
  <div>
    <img src="./img/icon__celebracion.svg" alt="" class="imagen__celebracion">

  </div>
  <div>
    <h4 class="subtitulo__estado__recorrido">Tu servicio de conductor elegido acaba de terminar</h4>
    <p class="parrafo__recorrido">Dejanos saber tu opinion sobres el conductor que elegiste </p>
     <a href="perfil-usuario.php?id=<?php  echo $datos__resultado['id_usuario']  ?>#opinion1" class="btn__dejar__opinion ">Dejar mi opinion</a>
  </div>
</div>

</div>

<?php  }  ?> -->



<?php include'layout/footer-home.php' ?>