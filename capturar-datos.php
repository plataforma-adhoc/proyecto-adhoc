<?php 
include'conexion-db-accent.php'; 
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
     echo json_encode('true');
    
}


} 

