<?php include'conexion-db-accent.php'; 

$json =  file_get_contents('php://input');
$datos = json_decode($json,true);
if(is_array($datos)){
 $id__transacions = $datos['detalles']['id'];
 $monto = $datos['detalles']['purchase_units'][0]['amount']['value'];
 $status = $datos['detalles']['status'];
 $fecha = $datos['detalles']['update_time'];
 $nueva__fecha =  date('Y-m-d H:i:s',strtotime($fecha));
 $email  = $datos['detalles']['payer']['email_address'];
 $id__cliente  = $datos['detalles']['payer']['payer_id'];
$id__usuario = $datos['id'];

$insertar__datos__de__compra = "INSERT INTO compra(id_transaccion,fecha_de_compra,status,email_cliente,id_cliente,total_compra)
VALUES('$id__transacions','$nueva__fecha','$status','$email','$id__cliente','$monto')";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos__de__compra);
if($ejecutar__consulta){

    $consulta__datos__diseño ="UPDATE   disenio__y__estilo__vehiculo SET  nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$consulta__datos__diseño);
    
    $consulta__datos__contacto ="UPDATE   contacto__vendedor SET  nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__datos__contacto);
    
    $consulta__datos__equipamiento ="UPDATE  equipamiento__del__vehiculo SET nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$consulta__datos__equipamiento);
    
    $consulta__datos__fotos="UPDATE   fotos__del__vehiculo  SET nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__datos__fotos);
    
    $consulta__datos__informacion ="UPDATE   informacion__del__vehiculo__en__venta SET nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$consulta__datos__informacion);
    
    
    $consulta__datos__seguridad ="UPDATE   seguridad__del__vehiculo  SET nombre_paquete = 'PREMUIN' WHERE id_usuario = '$id__usuario'";
    $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$consulta__datos__seguridad);
    
    if($ejecutar__consulta__diseño &&  $ejecutar__consulta__contacto  &&  $ejecutar__consulta__equipamiento &&  $ejecutar__consulta__fotos &&
    $ejecutar__consulta__informacion &&   $ejecutar__consulta__seguridad){
     echo json_encode('true');
    }
}


} 

