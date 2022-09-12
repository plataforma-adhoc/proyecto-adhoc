<?php 
function insert__datos__edit__perfil__conductor(){
    include'conexion-db-accent.php';
$id__conductor = isset($_POST['id']) ? $_POST['id']:'';
if($id__conductor){
 echo $id__conductor;  
$consulta__datos = "SELECT * FROM  conductores WHERE id_conductor = '$id__conductor' LIMIT 1";
$ejecutar__consulta__conductor = mysqli_query($conexion__db__accent,$consulta__datos);
$resultado__datos = mysqli_fetch_array($ejecutar__consulta__conductor);



        $nombre_conductor = $_POST['nombre'] ? $_POST['nombre']: '';
        $primer__apellido = $_POST['primerApellido'] ? $_POST['primerApellido']: '';
        $segundo__apellido = $_POST['segundoApellido'] ? $_POST['segundoApellido']: '';
        $email = $_POST['email'] ? $_POST['email']: '';
        $documento = $_POST['documento'] ? $_POST['documento']: '';
        $telefono = $_POST['telefono'] ? $_POST['telefono']: '';
        $licencia = $_POST['licencia'] ? $_POST['licencia']: '';
        $categoria= $_POST['categoria'] ? $_POST['categoria']: '';
        $facebook = $_POST['facebook'] ? $_POST['facebook']: '';
        $instagram = $_POST['instagram'] ? $_POST['instagram']: '';
        $twitter = $_POST['twitter'] ? $_POST['twitter']: '';
        $descripcion = $_POST['descripcion'] ? $_POST['descripcion']: '';
      
        $tipo = "jpg";
        $ruta__foto = $_FILES['avatar']['tmp_name'];
        $nombre = time(). '.'.$tipo;

        if(is_uploaded_file($ruta__foto)){
         $destino = 'upload/'.$nombre;
         $nombre__archivo =  $nombre;
         copy($ruta__foto,$destino);

        }else{
            $nombre__archivo =  $resultado__datos['avatar'];
        }

            $actualizar__datos  = "UPDATE  conductores SET 	nombre_conductor ='$nombre_conductor',primer_apellido = '$primer__apellido',segundo_apellido ='$segundo__apellido',
            email ='$email', numero_documento	 = '$documento',numero_telefono = '$telefono',numero_licencia = '$licencia',categoria_licencia ='$categoria',
            avatar = '$nombre__archivo',facebook ='$facebook',instagram = '$instagram',twitter='$twitter', quien_soy = '$descripcion' WHERE id_conductor = '$id__conductor'";
            $ejecutar__consulta = mysqli_query($conexion__db__accent,$actualizar__datos);

            if($ejecutar__consulta){
            //  header("Location: edit-perfil-conductor.php?id={$resultado__datos['id_conductor']}");
            header("Location: edit-perfil-conductor.php?id={$resultado__datos['id_conductor']}");

           echo json_decode('true');
             
       
            }
            


        }  
}  

    
    insert__datos__edit__perfil__conductor();
?>
