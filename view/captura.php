<?php
include'config/config.php'; 
include'conexion/conexion-db-accent.php';
session_start();
$json =  file_get_contents('php://input');
$datos = json_decode($json,true);

if(is_array($datos)){

    $id__transaccion = $datos['detalles']['id'];
    $fecha = $datos['detalles']['update_time'];
    $status = $datos['detalles']['status'];
    $nueva__fecha =  date('Y-m-d H:i:s',strtotime($fecha));
    $email  = $datos['detalles']['payer']['email_address'];
    $id__cliente = $datos['detalles']['payer']['payer_id'];
    $monto = $datos['detalles']['purchase_units'][0]['amount']['value'];

    $insertar__datos = "INSERT INTO compra(id_transaccion, fecha_de_compra,status,email_cliente,id_cliente,total_compra)
    VALUES('$id__transaccion','$nueva__fecha','$status','$email','$id__cliente','$monto')";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos);
    $id = mysqli_insert_id($conexion__db__accent);

    if($id > 0){
    $servicios = isset($_SESSION['carrito']['servicios']) ? $_SESSION['carrito']['servicios'] : null;
    if($servicios != null){
        foreach ($servicios as $clave => $cantidad) {
            $consulta__productos = "SELECT id_producto,nombre_producto,	valor_producto,descuento FROM productos    WHERE id_producto = '$clave' AND  activo = 1";
            $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__productos);
            $lista__servicio = mysqli_fetch_array($ejecutar__consulta);

        $precio__producto = $lista__servicio['valor_producto'];
        $descuento__producto = $lista__servicio['descuento'];
        $nombre__servicio = $lista__servicio['nombre_producto'];
        $cantidad = $cantidad;
        $precio__descuento  =  $precio__producto - (($precio__producto * $descuento__producto) / 100) ;

        $sql__insert = "INSERT INTO detalles__de__la__compra(id_compra,id_servicio,nombre_servicio,precio_compra,cantidad_compra)
        VALUES('$id','$clave','$nombre__servicio',' $precio__descuento','$cantidad')";

        $ejecutar__consulta = mysqli_query($conexion__db__accent,$sql__insert);
     if($ejecutar__consulta){
        echo json_encode('true');
     }
    
          
              
            }
            unset($_SESSION['carrito']['servicios']);   
    }

    }



}



?>