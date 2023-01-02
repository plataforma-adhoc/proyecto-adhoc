<?php
function obtener__graficos(){
    include'conexion-db-accent.php';
    $id__usuario = isset($_POST['id']) ? $_POST['id']: '';
    if($id__usuario){
        $array = array();
        $selecionar__datos__graficos = "SELECT * FROM contador__de__visitas__al__perfil__del__carro WHERE id_usuario = '$id__usuario'";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$selecionar__datos__graficos);
        if($ejecutar__consulta){
            while($fila = mysqli_fetch_array($ejecutar__consulta)){
            $array[] = $fila;
        }
        echo json_encode($array);
        mysqli_close($conexion__db__accent);
      }  
    }
}
obtener__graficos();

?>