<?php  
function login__usuaruio(){
    include'conexion/conexion-db-accent.php';
    $email = mysqli_real_escape_string($conexion__db__accent,$_POST['email'] ? $_POST['email']: '');
    $contrasena = mysqli_real_escape_string($conexion__db__accent,$_POST['contrasena'] ? $_POST['contrasena']: '');
   
    if($email ==="" || $contrasena ===""){
      echo json_encode('No podemos procesar tu solicidtud por falta de datos');
    }else{
        $consulta__login = "SELECT *  FROM conductores   WHERE email = '$email' LIMIT 1";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__login);

        if(mysqli_num_rows($ejecutar__consulta) > 0){
            $resultado__consulta__login = mysqli_fetch_array($ejecutar__consulta);
            $verficar__contraseña = password_verify($contrasena,$resultado__consulta__login['contrasena']);

            if(!$verficar__contraseña){
                echo json_encode('la contraseña es incorrecta');
            }else{
                $estado = "disponible";

                $actualizacion__estado = "UPDATE conductores SET status = '$estado' WHERE email = '$email'LIMIT 1";
                $ejecutar__solicitud = mysqli_query($conexion__db__accent,$actualizacion__estado);

                session_start();
                $_SESSION['id_conductor'] = $email;  
                echo json_encode('true');
            }
        
        }else{
            echo json_encode('este usuario no existe');
        }
    
       
    }

    }


   
login__usuaruio();






?>