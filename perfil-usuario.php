<?php   
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario ===""){
  header("Location: dashboard-usuario");
  exit;
}?>
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
   <h2 class="nombre__del__usuario">Nombre : <?php echo ucwords($datos__resultado['nombre_usuario'])  ?></h2>
   <h4 class=""> Apellidos : <?php echo ucwords($datos__resultado['primer_apellido']) ?> <?php echo ucwords($datos__resultado['segundo_apellido']) ?></h4>
   <br>
   <h2 class="datos__basicos">Datos basicos</h2>
   <h4>Email : <?php echo $datos__resultado['email'] ?></h4>
   <h4>Fecha de registro: <?php echo  date("d-m-Y",strtotime($datos__resultado['fecha_de_registro'])) ?></h4> 
  </div>
  <div class="links">
     <a href="edit-perfil-usuario?id=<?php echo $datos__resultado['id_usuario'] ?>" class="follow">Editar mi cuenta <i class="fas fa-long-arrow-alt-right"></i></a>
  </div>
</div>
</div>
<a href="desconectar-usuario?id=<?php  echo $_SESSION['id_usuario']?>" class="enlaces__de__mi__cuenta"><i class="fas fa-sign-out-alt"></i></i>Cerrar  sesion</a>
<a href="configuracion-usuario?idu=<?php echo $_SESSION['id_usuario'] ?>" class="enlaces__de__mi__cuenta"><i class="fas fa-lock"></i> Seguridad</a>
</div>
</div>     
</div>
</div>
<br><br>

<?php   include'layout/footer-home.php' ?>