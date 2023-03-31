
<?php 
function insertar_datos_del_vehiculo(){
session_start();
include'conexion-db-accent.php'; 
if(session_status() === PHP_SESSION_NONE) {
   // Las variables de sesión están destruidas, enviar una respuesta de error
   header('HTTP/1.1 500 Internal Server Error');
   exit('No se pueden enviar más datos, la sesión ha expirado.');
}else{


// Si las variables de sesión aún existen, procesar los datos normalmente
// ...
$datos = file_get_contents('php://input');
$datos = json_decode($datos);  

//DATOS OBLIGATORIOS DEL VEHICULO
$nombre_usuario = $datos->nombre__usuario;
$id__usuario= $datos->id__usuario;
$nombre__plan = $datos->nombre_plan;
$avatar = $datos->avatar;
$marca = $datos->marca;
$modelo = $datos->modelo;
$color = $datos->color;
$fecha__fabricacion = $datos->fecha_fabricacion;
$matricula= $datos->matricula;
$ciudad__matricula= $datos->ciudad_matricula;
$ciudad__venta = $datos->ciudad_venta;
$propietario= $datos->propietario;
$kilometros = $datos->kilometros;
$precio = $datos->precio;
$numero__puertas = $datos->numero_puertas;
$combustible = $datos->tipo_combustible;
$caja = $datos->caja;
$direccion = $datos->direccion;
$cilindraje = $datos->cilindraje;
$descripcion = $datos->descripcion;

// INFORMACION ADICIONAL DEL VEHICULO
$airbag__delantero = $datos->airbag_delantero;
$airbag__trasero = $datos->airbag_trasero;
$bloqueo__central = $datos->bloqueo_central;
$alarma = $datos->alarma;
$control__asenso = $datos->control_acsenso;
$control__decsenso = $datos->control_decsenso;
$sensores__delanteros = $datos->sensores_delanteros;
$sensor__reversa = $datos->sensor_reversa;
$punto__ciego = $datos->punto_ciego;
$camara__reversa = $datos->camara_reversa;


$aire__acondicionado = $datos->aire_acondicionado;
$android__auto = $datos->android_auto;
$apple__car__play = $datos->apple_car_play;
$bluetooth = $datos->bluetooth;
$espejos__electricos = $datos->espejos_electricos;
$exploradoras =  $datos->exploradoras;
$vidrios__electricos = $datos->vidrios_electricos;
$techo__corredizo = $datos->techo_corredizo;
$techo__panoramico = $datos->techo_panoramico;
$parqueo__automatico = $datos->parqueo_automatico;
$desempañador__trasero = $datos->desempañador_trasero;
$gps = $datos->gps;


$rines__de__lujo = $datos->rines_de_lujo;
$radio__cassette = $datos->radio_cassette;
$radio__cd = $datos->radio_cd;
$pantalla__de__video = $datos->pantalla_video;

 //DATOS DEL CONTACTO DEL VENDEDOR
$Whatsapp__uno = $datos->Whatsapp_uno;
$Whatsapp__dos = $datos->Whatsapp_dos;
$telefono__uno = $datos->telefono_uno;
$telefono__dos = $datos->telefono_dos;

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
$estado__anuncio = 1;
if($nombre_usuario === "" || $id__usuario === "" || $nombre__plan === "" || $avatar === "" || $marca === "" || $modelo === "" || $color === "" ||
 $fecha__fabricacion === "" || $matricula === "" || $ciudad__matricula === "" || $ciudad__venta === "" || $propietario === "" || $kilometros === "" || $precio === "" || $numero__puertas === "" ||
 $combustible === "" || $caja === "" || $direccion === "" || $cilindraje === "" || $descripcion === "" || $airbag__delantero === "" || $airbag__trasero === "" || $bloqueo__central === "" ||
 $alarma === "" || $control__asenso === "" || $control__decsenso === "" || $sensores__delanteros === "" || $sensor__reversa === "" || $punto__ciego === "" || $camara__reversa === "" ||
 $aire__acondicionado === "" || $android__auto === "" || $apple__car__play === "" || $bluetooth === "" || $espejos__electricos === "" || $exploradoras === "" || $vidrios__electricos === "" ||
 $techo__corredizo === "" || $techo__panoramico === "" || $parqueo__automatico === "" || $desempañador__trasero === "" || $gps === "" || $rines__de__lujo === "" || $radio__cassette === "" ||
 $radio__cd === "" || $pantalla__de__video === "" || $Whatsapp__uno === "" || $telefono__uno === ""){
 echo json_encode('vacios');
}else{

$insertar__contacto__vendedor = "INSERT INTO contacto__vendedor(id_usuario,whatsapp_1,whatsapp_2,telefono_1,telefono_2,nombre_paquete,estado_anuncio)
VALUES('$id__usuario','$Whatsapp__uno','$Whatsapp__dos','$telefono__uno','$telefono__dos','$nombre__plan','$estado__anuncio')";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$insertar__contacto__vendedor);


$insertar__datos__obligatorio = "INSERT INTO  informacion__del__vehiculo__en__venta(nombre_vendedor,foto_vendedor,id_usuario,marca_del_vehiculo,modelo_vehiculo,color_vehiculo,anio_fabricacion,matricula_del_vehiculo,ciudad_registro_matricula,ciudad_de_venta,unico_propietario,kilometros_del_vehiculo,
precio_del_vehiculo,numero_puertas,tipo_combustible,tipo_de_caja,tipo_de_direccion,cilindraje_vehiculo,descripcion_vehiculo,estado_anuncio)
VALUES('$nombre_usuario','$avatar','$id__usuario','$marca','$modelo','$color','$fecha__fabricacion','$matricula','$ciudad__matricula','$ciudad__venta','$propietario','$kilometros',
'$precio','$numero__puertas','$combustible','$caja','$direccion','$cilindraje','$descripcion','$estado__anuncio')";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$insertar__datos__obligatorio);

//SEGURIDAD DEL VEHICULO
$insertar__datos__seguridad = "INSERT INTO seguridad__del__vehiculo (id_usuario,air_bag_delantero,air_bag_trasero,bloqueo_central,alarma,control_de_ascenso,control_de_descenso,sensor_delantero,sensor_reversa,sensor_punto_ciego,camara_reversa,nombre_paquete,estado_anuncio)
VALUES('$id__usuario','$airbag__delantero','$airbag__trasero','$bloqueo__central','$alarma','$control__asenso','$control__decsenso','$sensores__delanteros','$sensor__reversa','$punto__ciego','$camara__reversa','$nombre__plan','$estado__anuncio')";
$ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$insertar__datos__seguridad);

// EQUIPAMINETO DEL VEHICULO
$insertar__datos__equipamiento = "INSERT INTO equipamiento__del__vehiculo(id_usuario,aire_acondicionado,android_auto,apple_car_play,bluetooth,espejos_electrico,exploradoras,vidrios_electricos,techo_corredizo,techo_panoramico, parqueo_automatico,desempaniador_trasero,gps,nombre_paquete,estado_anuncio)
VALUES('$id__usuario','$aire__acondicionado','$android__auto','$apple__car__play','$bluetooth','$espejos__electricos','$exploradoras','$vidrios__electricos',
'$techo__corredizo','$techo__panoramico','$parqueo__automatico','$desempañador__trasero','$gps','$nombre__plan','$estado__anuncio')";
$ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$insertar__datos__equipamiento);

// DISEÑO Y ESTILO DEL VEHICULO
$insertar__datos__estilo = "INSERT INTO disenio__y__estilo__vehiculo(id_usuario,rines_de_lujo,radio_cassette,radio_cd,pantalla_de_video,nombre_paquete,estado_anuncio)
VALUES('$id__usuario','$rines__de__lujo','$radio__cassette','$radio__cd','$pantalla__de__video','$nombre__plan','$estado__anuncio')";
$ejecutar__consulta__estilos = mysqli_query($conexion__db__accent,$insertar__datos__estilo);

  $insertar__fotos = "INSERT INTO fotos__del__vehiculo(id_usuario,foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10,nombre_paquete,estado_anuncio)
     VALUES('$id__usuario','$ruta__1','$ruta__2','$ruta__3','$ruta__4','$ruta__5','$ruta__6','$ruta__7','$ruta__8','$ruta__9','$ruta__10','$nombre__plan','$estado__anuncio')";
     $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$insertar__fotos);
 if($ejecutar__consulta__contacto && $ejecutar__consulta && $ejecutar__consulta__seguridad && $ejecutar__consulta__equipamiento && $ejecutar__consulta__estilos && $ejecutar__consulta__fotos){
    echo json_encode('ok');


 }
}
}
}
insertar_datos_del_vehiculo();

