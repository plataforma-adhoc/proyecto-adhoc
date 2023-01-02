<?php   include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';

$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario ===""){
  header("Location: dashboard-usuario");
  exit;
}




?>

    <div class="contenedor__subtitulo__ad__panel">
</div>
<div class="otros__datos__de__perfil">
  
  <a href="desconectar-usuario.php?id=<?php  echo $datos__resultado__conductor['id_conductor'] ?>" class="enlaces__de__mi__cuenta"><i class="fas fa-sign-out-alt"></i></i>Cerrar mi sesion</a>
            <a href="configuracion-usuario?idu=<?php echo $datos__resultado__conductor['id_conductor'] ?>" class="enlaces__de__mi__cuenta"><i class="fas fa-lock"></i> Acceso y seguridad</a>

    </div>
    <div class="container contenedor__datos__perfil"> 
<div class="datos__de__perfil">

<div class="card__solicitudes perfil">
     <div class="img">
       <img src="upload/<?php echo $datos__resultado['avatar'] ?>" class="imagen__de_perfil">
    </div>
    <div class="infos">
      <div class="name">
      <div>
            <p class="parrafo__de__mi__cuenta"><i class="fas fa-user-circle"></i> Mi cuenta</p>
        </div>
   <h2>Nombre : <?php echo ucwords($datos__resultado['nombre_usuario'])  ?></h2>
   <h4> Apellidos : <?php echo ucwords($datos__resultado['primer_apellido']) ?> <?php echo ucwords($datos__resultado['segundo_apellido']) ?></h4>
   <br>
   <h2>Datos basicos</h2>
   <h4>Email : <?php echo $datos__resultado['email'] ?></h4>
   <h4>Telefono : <?php echo $datos__resultado['numero_telefono'] ?></h4>
   <h4>Fecha de registro: <?php echo  date("d-m-Y",strtotime($datos__resultado['fecha_de_registro'])) ?></h4> 

  </div>

  <p class="text">

    </p>

    <ul class="stats">
    <li>  <h4>
    <?php  if($datos__resultado['facebook'] !=NULL ){ ?>
    <a href="https://www.facebook.com/<?php echo $datos__resultado['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
        <?php } ?> 
    </h4> 
</li>
    <li>  <h4> <?php  if($datos__resultado['instagram'] !=NULL ){ ?>
    <a href="https://www.instagram.com/<?php echo $datos__resultado['instagram'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-instagram"></i></a>
    <?php } ?></h4> 
    </li>
    <li>  <h4> <?php  if($datos__resultado['twitter'] !=NULL ){ ?>
        <a href="https://twitter.com/<?php echo $datos__resultado['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
    <?php } ?></h4> 
</li>
  </ul>

  <div class="links">
     <a href="edit-perfil-usuario?id=<?php echo $datos__resultado['id_usuario'] ?>" class="follow">Editar mi cuenta <i class="fas fa-long-arrow-alt-right"></i></a>

  </div>

</div>
</div>
</div>
</div>
     
</div>
</div>
<br><br>

<?php   include'layout/footer-home.php' ?>