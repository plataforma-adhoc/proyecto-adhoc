<?php
function login__usuario(){
    include'conexion/conexion-db-accent.php';
    $email = mysqli_real_escape_string($conexion__db__accent,$_POST['email'] ? $_POST['email']: '');
    $estado = 'disponible';
    $contrasena = mysqli_real_escape_string($conexion__db__accent,$_POST['contrasena'] ? $_POST['contrasena']: '');
    if($email ==="" || $contrasena ===""){
      echo json_encode('No podemos procesar tu solicidtud por falta de datos');
    }else{
        $consulta__login = "SELECT *  FROM usuarios   WHERE email = '$email' LIMIT 1";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__login);

        if(mysqli_num_rows($ejecutar__consulta) > 0){
            $resultado__consulta__login = mysqli_fetch_array($ejecutar__consulta);
            $verficar__contraseña = password_verify($contrasena,$resultado__consulta__login['contrasena']);

            if(!$verficar__contraseña){
                echo json_encode('la contraseña es incorrecta');
            }else{

                session_start();
                $_SESSION['id_usuario'] = $resultado__consulta__login['id_usuario'];  
                echo json_encode('true');

                $actalizar__estado = mysqli_query($conexion__db__accent,"UPDATE usuarios SET status = '$estado' WHERE imail = '$email' ");
            }
        
        }else{
            echo json_encode('este usuario no existe');
        }
    
       
    }

    }


   
login__usuario();

?>