<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

include'conexion-db-accent.php';

$nombre__usuario = mysqli_real_escape_string($conexion__db__accent,$_POST['nombre'] ?  $_POST['nombre']: '');
$primer__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['primerApellido'] ? $_POST['primerApellido']:'');
$segundo__apellido =  mysqli_real_escape_string($conexion__db__accent,$_POST['segundoApellido'] ? $_POST['segundoApellido'] : '');
$email =  mysqli_real_escape_string($conexion__db__accent,$_POST['email'] ?  $_POST['email']: '');
$contraseña = password_hash($_POST['contrasena'] ? $_POST['contrasena'] : '',PASSWORD_BCRYPT);


if($nombre__usuario ==="" || $primer__apellido ==="" || $segundo__apellido ===""  || $contraseña ==="" ){
  echo json_encode('Los campos estan vacios o  hay datos incorrectos');
}else{
  $consulta__usuario__registrado = "SELECT *  FROM usuarios   WHERE email = '$email' LIMIT 1";
  $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__usuario__registrado);
  
  if(mysqli_num_rows($resultado__consulta) > 0){
    $fila = mysqli_fetch_array($resultado__consulta);
    echo json_encode('No podemos registrar un nuevo usuario con ese E-mail');
    
  }else{
  
    $insertar__datos = "INSERT INTO usuarios (nombre_usuario, primer_apellido, segundo_apellido, email, contrasena) 
    VALUES ('$nombre__usuario', '$primer__apellido', '$segundo__apellido', '$email',  '$contraseña')";
    $resultado = mysqli_query($conexion__db__accent,$insertar__datos);
    if($resultado){
      session_start();
  
  $consulta__usuario = "SELECT *  FROM usuarios   WHERE email = '$email' LIMIT 1";
  $resultado= mysqli_query($conexion__db__accent,$consulta__usuario);
  
  if(mysqli_num_rows($resultado) > 0){
    $fila__datos = mysqli_fetch_array($resultado);
    $_SESSION['id_usuario'] = $fila__datos['id_usuario'];  
    echo json_encode('true');

    $contenido__mensaje = ' <h1>Hola '.$fila__datos['nombre_usuario'] .'<br> </h1>';
    $contenido__mensaje .='<p> Parece que acabas de unirte a Adhoc </p>';
    $contenido__mensaje .='<p> Te damos la bienvenida a nuestra plataforma </p>';
    $contenido__mensaje .='<p>Esperamos que la disfrutes y tu carro se venda en el menor tiempo posible.<br></p>';
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
        $mail->setFrom('soporteadhoc@outlook.com', 'AdHoc ');
        $mail->addAddress($email,$fila__datos['nombre_usuario'] );                  
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
      // echo json_encode('no');
    }
    
    }

}





?>