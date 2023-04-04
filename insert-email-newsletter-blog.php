<?php 
function insertarNewsletterBlog(){
include'conexion-db-accent.php';  
$email = isset($_POST['email']) ? $_POST['email']: '';
if($email){

     $seleccionar__email__newsletter = "SELECT email_newsletter FROM  newsletter WHERE  email_newsletter = '$email'";
     $ejecutar__seleccion = mysqli_query($conexion__db__accent,$seleccionar__email__newsletter);
     if(mysqli_num_rows($ejecutar__seleccion) > 0){
  echo json_encode('E-mail registrado');
 }else{
     $insertar__email__newsletter = "INSERT INTO  newsletter(email_newsletter) VALUES('$email')";
     $ejecutar__insersion =  mysqli_query($conexion__db__accent,$insertar__email__newsletter);
     if($ejecutar__insersion){
       echo json_encode('Ya guardamos tu E-mail');
     }

 }
}  
}
insertarNewsletterBlog();
?>