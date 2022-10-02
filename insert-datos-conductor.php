<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

include'conexion-db-accent.php';

$nombre__conductor = mysqli_real_escape_string($conexion__db__accent,$_POST['nombre'] ?  $_POST['nombre']: '');
$primer__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['primerApellido'] ? $_POST['primerApellido']:'');
$segundo__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['segundoApellido'] ? $_POST['segundoApellido'] : '');
$email =  mysqli_real_escape_string($conexion__db__accent,$_POST['email'] ?  $_POST['email']: '');
$documento =  mysqli_real_escape_string($conexion__db__accent,$_POST['documento'] ? $_POST['documento'] :'');
$numero__telefono =  mysqli_real_escape_string($conexion__db__accent,$_POST['telefono'] ? $_POST['telefono'] :'');
$numero__licencia =  mysqli_real_escape_string($conexion__db__accent,$_POST['licencia'] ? $_POST['licencia'] :'');
$categoria__licencia =  mysqli_real_escape_string($conexion__db__accent,$_POST['categoria'] ? $_POST['categoria'] :'');
$contraseña = password_hash($_POST['contrasena'] ? $_POST['contrasena'] : '',PASSWORD_BCRYPT);




if($nombre__conductor ==="" || $primer__apellido ==="" || $segundo__apellido ==="" || $documento ==="" || $numero__telefono ==="" || $numero__licencia ==="" 
 || $categoria__licencia ==="" || $contraseña ==="" ){
  echo json_encode('No podemos procesar tu solicidtud por falta de datos');
}else{

  $consulta__conductor__registrado = "SELECT *  FROM  conductores   WHERE email = '$email' LIMIT 1";
  $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__conductor__registrado);
  
  if(mysqli_num_rows($resultado__consulta) > 0){
    echo json_encode('Es imposible registar un nuevo conductor con ese email');
    
  
  }else{
    $insertar__datos = "INSERT INTO conductores (nombre_conductor, primer_apellido, segundo_apellido, email, numero_documento, numero_telefono, numero_licencia,
    categoria_licencia, contrasena) 
    
    VALUES ('$nombre__conductor', '$primer__apellido', '$segundo__apellido', '$email', '$documento', '$numero__telefono','$numero__licencia','$categoria__licencia' ,'$contraseña')";
    $resultado = mysqli_query($conexion__db__accent,$insertar__datos);
    if($resultado){
      session_start();
  
  $consulta__conductor = "SELECT *  FROM  conductores   WHERE email = '$email' LIMIT 1";
  $resultado = mysqli_query($conexion__db__accent,$consulta__conductor);
  if(mysqli_num_rows($resultado) > 0){
    $fila__datos = mysqli_fetch_array($resultado);
    $_SESSION['id_conductor'] = $fila__datos['id_conductor'];
      echo json_encode('true');
      
      $contenido__mensaje = ' <h1>Hola '.$fila__datos['nombre_conductor'] .'<br> </h1>';
      $contenido__mensaje .='<p> Parece que acabas de unirte a Adhoc </p>';
      $contenido__mensaje .='<p> Te damos la bienvenida a nuestra de parte de nuestro equipo </p>';
      $contenido__mensaje .='<p>Espero que   disfrutes usando nuestra plataforma <br></p>';
      $contenido__mensaje .='<p>Equipo de Adhoc  <br></p>';
     
    
      $mail = new PHPMailer(true);
      try {
                    
          $mail->isSMTP();                                           
          $mail->Host       = 'smtp.office365.com';                  
          $mail->SMTPAuth   = true;                                 
          $mail->Username   = 'soporteadhoc@outlook.com';                   
          $mail->Password   = 'contrasenasoporte01';                            
          // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;  
          $mail->SMTPSecure = 'tls';        
          $mail->Port       = 587;  
                                 
          //Recipients
          $mail->setFrom('soporteadhoc@outlook.com', 'Ad Hoc ');
          $mail->addAddress($email,$fila__datos['nombre_conductor'] );                  
          // $mail->addAttachment('./img/logo__accent.png');
      
          //Content
          $mail->isHTML(true);                                  
          $mail->Subject = 'Gracias por  crear tu cuenta con nosotros';
          $mail->Body    = utf8_decode($contenido__mensaje);
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
          $mail->send();
          
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }


  }
    }else{
      echo json_encode('no existe');
    }
  
  }

}  



  



?>