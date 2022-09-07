<?php  

include'conexion-db-accent.php';
$opciones = isset($_POST['opciones']) ? $_POST['opciones']: '';
$numero__cuenta  = isset($_POST['numeroCuenta']) ? $_POST['numeroCuenta']: '';
$id__conductor  = isset($_POST['idConductor']) ? $_POST['idConductor']: '';



if($opciones ===""   || $numero__cuenta ===""){
    echo json_encode("No podemos procesar tu solicitud por falta de datos");
}else{
    $insert__datos__cuenta = "UPDATE  conductores SET entidad_bancaria = '$opciones', cuenta_de_pago = '$numero__cuenta' WHERE id_conductor = '$id__conductor' ";
    $ejecutar__consulta  = mysqli_query($conexion__db__accent,$insert__datos__cuenta);
    if($ejecutar__consulta){
     echo json_encode('ok');
    }else{
        echo json_encode('false');
    
    }

}

?>