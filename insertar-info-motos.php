<?php 
function insertarDatosDelLaMoto(){
session_start();
include'conexion-db-accent.php'; 
$datos = file_get_contents('php://input');
$datos = json_decode($datos);  

$nombreUsuario = $datos->nombreUsuario;
$idUsuario= $datos->idUsuario;
$nombrePlan = $datos->nombrePlan;
$avatar = $datos->avatar;
$marca = $datos->marca;
$modelo = $datos->modelo;
$color = $datos->color;
$fechaFabricacion = $datos->fechaFabricacion;
$matricula= $datos->matricula;
$ciudadMatricula= $datos->ciudadMatricula;
$ciudadVenta = $datos->ciudadVenta;
$propietario= $datos->propietario;
$kilometros = $datos->kilometros;
$precio = $datos->precio;
$tipo = $datos->tipo;
$cilindraje = $datos->cilindraje;
$descripcion = $datos->descripcion;


 //DATOS DEL CONTACTO DEL VENDEDOR
$email= $datos->email;
$Whatsapp = $datos->Whatsapp;
$telefono = $datos->telefono;


//RUTAS DE LAS IMAGENES
$ruta__1 = $datos->ruta_1;
$ruta__2 = $datos->ruta_2;
$ruta__3 = $datos->ruta_3;
$ruta__4 = $datos->ruta_4;
$ruta__5 = $datos->ruta_5;
$ruta__6 = $datos->ruta_6;
$ruta__7 = $datos->ruta_7;
$ruta__8 = $datos->ruta_8;
$ruta__9 = $datos->ruta_9;
$ruta__10 = $datos->ruta_10;
$estadoAnuncio = 1;

$insertarContactoVendedor = "INSERT INTO contacto__vendedor__moto(id_usuario,email,telefono,whatsapp,nombre_paquete,estado_anuncio)
VALUES('$idUsuario','$email','$telefono','$Whatsapp','$nombrePlan','$estadoAnuncio')";
$ejecutarConsultaContacto = mysqli_query($conexion__db__accent,$insertarContactoVendedor);

$insertarInfoMoto = "INSERT INTO  informacion__de__la__moto__en__venta(nombreVendedor,fotoVendedor,idUsuario,marca,modelo,color,fechaFabricacion,matricula,ciudadRegistroMatricula,ciudadDeVenta,propietario,kilometros,
precio,tipo,cilindraje,descripcion,nombrePaquete,estadoAnuncio)
VALUES('$nombreUsuario','$avatar','$idUsuario','$marca','$modelo','$color','$fechaFabricacion','$matricula','$ciudadMatricula','$ciudadVenta','$propietario','$kilometros',
'$precio','$tipo','$cilindraje','$descripcion','$nombrePlan','$estadoAnuncio')";
$ejecutarconsultaInfoMoto = mysqli_query($conexion__db__accent,$insertarInfoMoto);

  $insertarFotos = "INSERT INTO fotos__de__la__moto(id_usuario,foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10,nombre_paquete,estado_anuncio)
     VALUES('$idUsuario','$ruta__1','$ruta__2','$ruta__3','$ruta__4','$ruta__5','$ruta__6','$ruta__7','$ruta__8','$ruta__9','$ruta__10','$nombrePlan','$estadoAnuncio')";
     $ejecutarConsultaFotos = mysqli_query($conexion__db__accent,$insertarFotos);

 if($ejecutarConsultaContacto && $ejecutarconsultaInfoMoto && $ejecutarConsultaFotos ){
    echo json_encode('ok');

 }
}
insertarDatosDelLaMoto();

