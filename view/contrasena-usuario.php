<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
  
    require 'Exception.php';
    require 'PHPMailer.php';
    require 'SMTP.php';

    include'conexion/conexion-db-accent.php';
    $email__contrasena = $_POST['email'] ? $_POST['email']: '';
    if($email__contrasena ===""){
      echo json_encode('Necesitamos el email para continuar');
    }else{
      $consulta__contraseña = "SELECT id_usuario FROM usuarios WHERE email = '$email__contrasena' LIMIT 1";
      $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__contraseña);
      if(mysqli_num_rows($resultado__consulta) > 0){
        $resultado__fila = mysqli_fetch_array($resultado__consulta);
        
        $nueva__contrasena = rand(10000000,99999999);
        $id__usuario = $resultado__fila['id_usuario'];
        $contrasena__encryptada  = password_hash($nueva__contrasena,PASSWORD_BCRYPT);
        $token = md5($resultado__fila['id_usuario']. time(). rand(1000,9999));

        $insertar__datos = mysqli_query($conexion__db__accent,"INSERT INTO recuperar__contrasena__usuario (email,clave__nueva,token) VALUES('$email__contrasena','$nueva__contrasena','$token')");
      
      
      $url = "http://localhost/accent__hollding/view/confirm-recuperacion-contrasena-usuario?email='$email__contrasena'&token=.'$token'";
      $mail = new PHPMailer(true);

      try {
          //Server settings
          $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
          $mail->isSMTP();                                           
          $mail->Host       = 'smtp.office365.com';                  
          $mail->SMTPAuth   = true;                                 
          $mail->Username   = 'luisrbn10@outlook.es';                   
          $mail->Password   = 'Luisruben1073992580';                            
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
          $mail->Port       = 465;                                    
      
          $email__contrasena = $_POST['email'] ? $_POST['email']: '';
          //Recipients
          $mail->setFrom('luisrbn10@outlook.es', 'Accent Corparation ');
          $mail->addAddress($email__contrasena, 'Joe User');                  
       
      
          //Content
          $mail->isHTML(true);                                  
          $mail->Subject = 'Has solicitado el cambio de tus credencial de acceso a nuestra plataforma';
          $mail->Body    = 'Haz clik en el siguiente enlace <a href="'.$url.'">Pulsa aqui!</a>  para activar su credencial de acceso!</b>';
          $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
      
          $mail->send();
          echo json_encode('ok');
      } catch (Exception $e) {
          echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
      }
      
      }else{
      echo  json_encode('No existe ese usuario');
      }

    }

   
  
    

    

    
    



