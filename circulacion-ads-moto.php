<?php
function actualizarEstadoAnuncio(){
    include'conexion-db-accent.php';
    $data = file_get_contents('php://input');
        $data = json_decode($data);   
        $id__paquete = $data->id__paquete;
        $id__usuario = $data->id__usuario;
        $id__contacto = $data->id__contacto;
        $id__fotos = $data->id__fotos;
        $id__publicacion = $data->id__publicacion;
if($id__paquete && $id__usuario && $id__contacto  && $id__fotos && $id__publicacion){
 $actualizarContacto = "UPDATE contacto__vendedor__moto SET  estado_anuncio = '1'  WHERE id_contacto = '$id__contacto' AND id_usuario = '$id__usuario'";
 $ejecutarActualizacionContacto = mysqli_query($conexion__db__accent,$actualizarContacto);

 $actualizarFotos = "UPDATE fotos__de__la__moto SET  estado_anuncio = '1'  WHERE id_fotos = '$id__fotos' AND id_usuario = '$id__usuario'";
 $ejecutarActualizacionFotos  = mysqli_query($conexion__db__accent,$actualizarFotos);

 $actualizarInformacion = "UPDATE informacion__de__la__moto__en__venta SET estadoAnuncio = '1'   WHERE idPublicacionMoto = '$id__publicacion' AND idUsuario = '$id__usuario'";
 $ejecutarActualizacionInformacion = mysqli_query($conexion__db__accent,$actualizarInformacion);
if($ejecutarActualizacionContacto && $ejecutarActualizacionFotos && $ejecutarActualizacionInformacion ){
echo json_encode('ok');
}else{
echo json_encode('no se pudo actualizar la informacion');
}
}else{
  echo json_encode('<script>
  alert("Ha ocurrido un error al procesar la solicitud")
  </script>');  
}
}
actualizarEstadoAnuncio();
?>