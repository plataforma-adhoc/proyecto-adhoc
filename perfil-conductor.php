
<?php  include'layout/nav-home-conductor.php'; 
include'conexion-db-accent.php';

$id__conductor = isset($_GET['id']) ?  $_GET['id']: '';
if($id__conductor ===""){
 header("Location: dashboard-conductor.php");
 exit;
} 




$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado__conductor = mysqli_fetch_array($resultado__consulta); 


 }?>
    <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="contenedor__subtitulo__ad__panel">
    <h2 class="subtitulo__ad__panel">Mi Cuenta</h2>
</div>
<div class="otros__datos__de__perfil">
    <a href="desconectar-conductor.php?id=<?php  echo $datos__resultado__conductor['id_conductor'] ?>" class="enlaces__de__mi__cuenta"><i class="fas fa-sign-out-alt"></i></i>Cerrar mi sesion</a>
    <a href="configuracion-conductor.php?id=<?php echo $datos__resultado__conductor['id_conductor'] ?>" class="enlaces__de__mi__cuenta"><i class="fas fa-lock"></i> Acceso y seguridad</a>
    
    </div>
<div class="container contenedor__datos__perfil">
    <div class="datos__de__perfil">  
<div class="card__solicitudes perfil">
     <div class="img">
       <img src="upload/<?php echo $datos__resultado__conductor['avatar'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos info__perfil">
      <div class="name">
      <div>
            <p class="parrafo__de__mi__cuenta"><i class="fas fa-user-circle"></i> Mi cuenta</p>
        </div>
   <h2>Nombre : <?php echo $datos__resultado__conductor['nombre_conductor']  ?></h2>
   <h4>Apellidos : <?php echo $datos__resultado__conductor['primer_apellido'] ?> <?php echo $datos__resultado__conductor['segundo_apellido'] ?></h4>
   <h2>Biografia detallada</h2>
   <h4>Email :<?php echo $datos__resultado__conductor['email'] ?></h4>
   <h4>Documento : <?php echo $datos__resultado__conductor['numero_documento'] ?></h4>
   <h4>Telefono : <?php echo $datos__resultado__conductor['numero_telefono'] ?></h4>
   <h4>Licencia : <?php echo $datos__resultado__conductor['numero_licencia'] ?></h4>
   <h4>Categoria : <?php echo $datos__resultado__conductor['categoria_licencia'] ?></h4> 
   <h4>Miembro desde : <?php echo  date("d-m-Y",strtotime($datos__resultado__conductor['fecha_de_registro'])) ?></h4> 
   <?php    if($datos__resultado__conductor['localidad'] != NULL){   ?>
   <h4>Lugar de ubicación: <?php echo $datos__resultado__conductor['localidad'] ?>, Bogota - Cundinamarca</h4>
<?php } ?>

   <?php    if($datos__resultado__conductor['quien_soy'] != NULL){   ?>
   <h4><?php echo $datos__resultado__conductor['quien_soy'] ?></h4>
<?php } ?>

  </div>

  <p class="text">

    </p>

    <ul class="stats">
    <li>  <h4>
    <?php  if($datos__resultado__conductor['facebook'] !=NULL ){ ?>
    <a href="https://www.facebook.com/<?php echo $datos__resultado__conductor['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
        <?php } ?> 
    </h4> 
</li>
    <li>  <h4> <?php  if($datos__resultado__conductor['instagram'] !=NULL ){ ?>
    <a href="https://www.instagram.com/<?php echo $datos__resultado__conductor['instagram'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-instagram"></i></a>
    <?php } ?></h4> 
    </li>
    <li>  <h4> <?php  if($datos__resultado__conductor['twitter'] !=NULL ){ ?>
        <a href="https://www.twitter.com/<?php echo $datos__resultado__conductor['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
    <?php } ?></h4> 
</li>
  </ul>

  <div class="links">
     <a href="edit-perfil-conductor.php?id=<?php echo $datos__resultado__conductor['id_conductor'] ?>" class="follow">Editar mi cuenta <i class="fas fa-long-arrow-alt-right"></i></a>

  </div>

</div>
</div>
</div>


</div>
</div> 
<div>
</div>
<div class="container contenedor__formulario__datos__de_pago">
    <p class="titulo__opinion">Metodo de pago</p>
    <p class="parrafo__metodo__pago">Configura tu metodo de pago a continuacion</p>
    <form class="formulario__registro metodo__de__pago" id="formulario-metodo-pago">
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <select name="opciones" id=""class="seleccionar capturarDatos">
                <option value="Nequi" class="select">Nequi</option>
                <option value="daviplata"  class="select">daviplata</option>
            </select>

        </div>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Numero de cuenta" name="numeroCuenta"  class="capturarDatos">
            </div>
        </div>
        <input type="hidden" placeholder="Numero de cuenta" name="idConductor"  class="capturarDatos" value="<?php echo $datos__resultado__conductor['id_conductor'] ?>">
        <div class="block">
            <input type="submit" value="ENVIAR DATOS" class="boton__registro" name="enviar">
        </div>

    </div>
    <div class="item__info__pagos">
        <p><i class="fas fa-info-circle"></i> <strong>Nota : </strong> recuerda que los pagos se haran al finalizar la semana </p>
        </div>   
</form>
</div>

<br><br><br><br>
<div class="container contenedor__opinion" id="opinion1">
  <p class="titulo__opinion">Centro de opiniones</p>
  <div class="contenido__comentario">
<?php    
$consulta__comentarios = "SELECT * FROM comentario__usuario WHERE id_conductor = '{$_SESSION['id_conductor']}'";
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
<br><br>

<?php  include'layout/footer-home.php' ?>