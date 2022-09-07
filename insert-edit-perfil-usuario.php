<?php 
function insert__datos__edit__perfil__usuario(){
include'conexion-db-accent.php';
$id__usuario = isset($_POST['id']) ? $_POST['id']: '';
if($id__usuario){
    $consulta__datos = "SELECT * FROM  usuarios WHERE id_usuario = '$id__usuario' LIMIT 1";
    $ejecutar__consulta__usuario = mysqli_query($conexion__db__accent,$consulta__datos);
    $resultado__datos = mysqli_fetch_array($ejecutar__consulta__usuario);
    
        
            $nombre_usuario = $_POST['nombre'] ? $_POST['nombre']: '';
            $primer__apellido = $_POST['primerApellido'] ? $_POST['primerApellido']: '';
            $segundo__apellido = $_POST['segundoApellido'] ? $_POST['segundoApellido']: '';
            $email = $_POST['email'] ? $_POST['email']: '';
            $documento = $_POST['documento'] ? $_POST['documento']: '';
            $telefono = $_POST['telefono'] ? $_POST['telefono']: '';
            $facebook = $_POST['facebook'] ? $_POST['facebook']: '';
            $instagram = $_POST['instagram'] ? $_POST['instagram']: '';
            $twitter = $_POST['twitter'] ? $_POST['twitter']: '';
          
            $tipo = "jpg";
            $ruta__foto = $_FILES['avatar']['tmp_name'];
            $nombre = $nombre_usuario. '.'.$tipo;
    
            if(is_uploaded_file($ruta__foto)){
             $destino = 'upload/'.$nombre;
             $nombre__archivo =  $nombre;
             copy($ruta__foto,$destino);
    
            }else{
                $nombre__archivo =  $resultado__datos['avatar'];
            }
    
                $actualizar__datos  = "UPDATE  usuarios SET 	nombre_usuario ='$nombre_usuario',primer_apellido = '$primer__apellido',segundo_apellido ='$segundo__apellido',
                email ='$email', numero_documento = '$documento',numero_telefono = '$telefono', avatar = '$nombre__archivo',facebook ='$facebook',	instagram = '$instagram',twitter='$twitter' WHERE id_usuario = '$id__usuario' LIMIT 1";
                $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__datos);
    
                if($ejecutar__consulta){
                    header("Location: ./edit-perfil-usuario?id={$resultado__datos['id_usuario']}");
                    echo json_encode('true');
                 
                }
                

}



}  

    
    insert__datos__edit__perfil__usuario();
?>