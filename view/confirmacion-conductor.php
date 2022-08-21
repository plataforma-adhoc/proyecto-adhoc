<?php
include'layout/nabvar.php';
  include'conexion/conexion-db-accent.php';
 $email =  $_GET['email'] ? $_GET['email']: '';
 $token =  $_GET['token'] ? $_GET['token']: '';

 if($email ==="" || $token === ''){
  header('Location: ./password-usuario');
 }else{
   $consulta__recuperar__contrasena = "SELECT clave__nueva FROM recuperar__contrasena__conductor WHERE email = '$email' AND token = '$token'";
   $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__recuperar__contrasena);
   $resultado__consulta = mysqli_fetch_array($ejecutar__consulta);
   if(!$resultado__consulta){
     header('Location: ./password-conductor');
  die();
   }else{
     
     $contrasena = password_hash($resultado__consulta['clave__nueva'],PASSWORD_BCRYPT);
     $actualizar__contrasena = mysqli_query($conexion__db__accent,"UPDATE conductores SET contrasena ='$contrasena' WHERE email = '$email' LIMIT 1");
     
     
     $eliminar__solicitud = mysqli_query($conexion__db__accent,"DELETE  FROM recuperar__contrasena__conductor WHERE email ='$email'");

   }

  }?>

 <div class="conatiner contenedor__actualizacion">
   <div class="actualizacion">
     <h1 class="titulo__actualizacion">Tu contraseña se actualizo con exito</h1>
    </div>
    <div class="contenedor__enlace__iniciar__sesion">
        <a href="./login-conductor" class="enlace__iniciar__sesion">iniciar sesion</a>
    </div>
  
 
 </div>
<br><br><br>
 <?php include'layout/footer.php'; 
 ?>