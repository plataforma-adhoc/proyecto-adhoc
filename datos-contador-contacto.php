<?php
function obtenerGraficosContacto(){
    include'conexion-db-accent.php';
    $id__usuario = isset($_POST['id']) ? $_POST['id']: '';
    if($id__usuario){
        $array = array();
        $selecionar__datos__graficos = "SELECT * FROM clicks__contacto__motos WHERE id_usuario = '$id__usuario'";
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
obtenerGraficosContacto();


?>