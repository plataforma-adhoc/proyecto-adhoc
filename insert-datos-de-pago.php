<?php
function actualizar__estado__anuncio(){
    include'conexion-db-accent.php';
    $data = file_get_contents('php://input');
        $data = json_decode($data);   
        $id__paquete = $data->id__paquete;
        $id__usuario = $data->id__usuario;
        $id__estilos = $data->id__estilos;
        $id__contacto = $data->id__contacto;
        $id__equipamiento = $data->id__equipamiento;
        $id__fotos = $data->id__fotos;
        $id__informacion = $data->id__informacion;
        $id__seguridad = $data->id__seguridad;


if($id__paquete && $id__usuario && $id__estilos && $id__contacto && $id__equipamiento && $id__fotos && $id__informacion && $id__seguridad){

 $actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET estado_anuncio = '1' WHERE id_estilos = '$id__estilos' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__diseño);

 $actualizar__contacto = "UPDATE contacto__vendedor SET  estado_anuncio = '1'  WHERE id_contacto = '$id__contacto' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);

 $actualizar__equipamiento = "UPDATE equipamiento__del__vehiculo SET  estado_anuncio = '1'  WHERE id_equipamiento = '$id__equipamiento' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__equipamiento);

 $actualizar__fotos = "UPDATE fotos__del__vehiculo SET  estado_anuncio = '1'  WHERE id_fotos = '$id__fotos' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);

 $actualizar__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET estado_anuncio = '1'   WHERE id_publicacion_vehiculo = '$id__informacion' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
 
 $actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET  estado_anuncio = '1'  WHERE id_seguridad = '$id__seguridad' AND id_usuario = '$id__usuario'";
 $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__seguridad);
if($ejecutar__actualizacion && $ejecutar__actualizacion__contacto && $ejecutar__actualizacion__equipamiento && $ejecutar__actualizacion__fotos 
&& $ejecutar__actualizacion__informacion && $ejecutar__actualizacion__seguridad ){
echo json_encode('ok');
}else{
echo json_encode('no se pudo acatualizar');

}
}else{
  echo json_encode('<script>
  alert("Ha ocurrido un error al procesar la solicitud")
  </script>');  
}
}
actualizar__estado__anuncio();
?>