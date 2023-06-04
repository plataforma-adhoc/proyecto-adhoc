<?php
 include'layout/nav-home-usuario.php';
 include'config/config.php'; 
include'conexion-db-accent.php';
$id__usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
$nombre__plan = isset($_GET['nombre_plan']) ? $_GET['nombre_plan'] : '';
// INFORMACION OBLIGATORIA DEL VEHICULO
if(isset($_SESSION['datos-obligatorios'])){
$informacion__obligatoria = $_SESSION['datos-obligatorios'];
$nombre_usuario = $informacion__obligatoria['nombre'];
$avatar = $informacion__obligatoria['avatar'];
$id_usuario = $informacion__obligatoria['id'];
$marca = $informacion__obligatoria['marca'];
$modelo = $informacion__obligatoria['modelo'];
$color = $informacion__obligatoria['color'];
$fecha_fabricacion = $informacion__obligatoria['fecha_fabricacion'];
$matricula = $informacion__obligatoria['matricula'];
$ciudad_matricula = $informacion__obligatoria['ciudad_matricula'];
$ciudad_venta =$informacion__obligatoria['ciudad_venta'];
$propietario = $informacion__obligatoria['propietario'];
$kilometros = $informacion__obligatoria['kilometros'];
$precio_vehiculo = $informacion__obligatoria['precio'];
$puertas = $informacion__obligatoria['puertas'];
$combustible = $informacion__obligatoria['combustible'];
$caja = $informacion__obligatoria['caja'];
$direccion = $informacion__obligatoria['direccion'];
$cilindraje = $informacion__obligatoria['cilindraje'];
$descripcion = $informacion__obligatoria['descripcion'];

}
// INFORMACION ADICIONAL DEL VEHICULO
if(isset($_SESSION['info-adicional'])){
  $info__adicional = $_SESSION['info-adicional'];
$airbag_delantero = $info__adicional['airbag_delantero'];
$airbag_trasero = $info__adicional['airbag_trasero'];
$bloqueo_central = $info__adicional['bloqueo_central'];
$alarma = $info__adicional['alarma'];
$control_acsenso = $info__adicional['control_acsenso'];
$control_decsenso = $info__adicional['control_decsenso'];
$sensores_delanteros = $info__adicional['sensores_delanteros'];
$sensor_reversa = $info__adicional['sensor_reversa'];
$punto_ciego = $info__adicional['punto_ciego'];
$camara_reversa = $info__adicional['camara_reversa'];
$aire_acondicionado = $info__adicional['aire_acondicionado'];
$android_auto = $info__adicional['android_auto'];
$apple_car_play = $info__adicional['apple_car_play'];
$bluetooth = $info__adicional['bluetooh'];
$espejos_electricos = $info__adicional['espejos_electricos'];
$exploradoras = $info__adicional['exploradoras'];
$vidrios__electricos = $info__adicional['vidrios_electricos'];
$techo_corredizo = $info__adicional['techo_corredizo'];
$techo_panoramico = $info__adicional['techo_panoramico'];
$parqueo_automatico = $info__adicional['parqueo_automatico'];
$desempañador_trasero = $info__adicional['desempañador_trasero'];
$gps = $info__adicional['gps'];
$rines_de_lujo = $info__adicional['rines_de_lujo'];
$radio_cassette = $info__adicional['radio_cassete'];
$radio_cd = $info__adicional['radio_cd'];
$pantalla_video = $info__adicional['pantalla_video'];

}

if(isset($_SESSION['datos-contacto'])){
  $datos__de__contacto = $_SESSION['datos-contacto'];
  $Whatsapp_uno = $datos__de__contacto['Whatsapp_uno'];
  $Whatsapp_dos = $datos__de__contacto['Whatsapp_dos'];
  $telefono_uno = $datos__de__contacto['telefono_uno'];
  $telefono_dos= $datos__de__contacto['telefono_dos'];

}
if(isset($_SESSION['datos-imagenes'])){
  $datos__imagenes = $_SESSION['datos-imagenes'];
  $ruta__uno = $datos__imagenes['ruta_1'];
  $ruta__dos = $datos__imagenes['ruta_2'];
  $ruta__tres = $datos__imagenes['ruta_3'];
  $ruta__cuatro = $datos__imagenes['ruta_4'];
  $ruta__cinco = $datos__imagenes['ruta_5'];
  $ruta__seis = $datos__imagenes['ruta_6'];
  $ruta__siete = $datos__imagenes['ruta_7'];
  $ruta__ocho = $datos__imagenes['ruta_8'];
  $ruta__nueve = $datos__imagenes['ruta_9'];
  $ruta__diez = $datos__imagenes['ruta_10'];

}?>

<div class="contenedor__respuesta__pago" id="contenedor-respuesta-final-compra">
  <br><br>
  <img src="./img/en__proceso.png" alt="sin tarjeta de credito" class="img__respuesta__pago"> 
  <h2 class="titulo__respuesta__pago">Tu transacción está pendiente</h2>
  <p  class="texto__respuesta__pago">La solicictud de pago está pendiente,  activaremos el anuncio cuando el pago se haga efectivo</p>
  <div class="container contenedor___respuesta__epayco">
  <h4 style="text-align:center; color:white" class="titulo__respuesta__transaccion"> Respuesta de la Transacción </h4>
        <hr>
    <div class="contenedor__tabla__respuesta">
 <div class="table-responsive">
  <table class="table table-bordered border-secondary">
  <tbody>
    <tr>
      <th colspan="2">Referencia</th>
      <td colspan="1"id="referencia"></td>
    </tr>
    <tr>
      <th colspan="2">Fecha</th>
      <td colspan="1" id="fecha" class=""></td>
    </tr>
    <tr>
      <th colspan="2">Respuesta</th>
      <td colspan="1"id="respuesta"></td>
    </tr>
    <tr>
      <th colspan="2">Motivo</th>
      <td colspan="1"id="motivo"></td>
    </tr>
    <tr>
      <th colspan="2">Banco</th>
      <td colspan="1"class="" id="banco"></td>
    </tr>
    <tr>
      <th colspan="2">Recibo</th>
      <td colspan="1"id="recibo"></td>
    </tr>
    <tr>
      <th colspan="2">Total</th>
      <td colspan="1"class="" id="total"></td>
    </tr>
  </tbody>
</table>
</div>
<footer class="footer__respuesta">
        <div class="logos">
          <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/pagos_procesados_por_epayco_260px.png"> 
      </div>
      <div class="logos">
      <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/credibancologo.png"
            height="40px" style="margin-top:50px">
      </div>
  </footer>   
  <div class="contenido__enlace__respuesta"> 
  <a href="dashboard-usuario" class="enlace__respuesta__pago"> <i class="fas fa-arrow-left"></i> Volver al inicio</a>
  </div>
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>

  function getQueryParam(param) {
    location.search.substr(1)
      .split("&")
      .some(function (item) { // returns first occurence and stops
        return item.split("=")[0] == param && (param = item.split("=")[1])
      })
    return param
  }

  function checkPaymentStatus() {
    //Referencia de payco que viene por url
    var ref_payco = getQueryParam('ref_payco');
    //Url Rest Metodo get, se pasa la llave y la ref_payco como paremetro
    var urlapp = "https://secure.epayco.co/validation/v1/reference/" + ref_payco;

    $.get(urlapp, function (response) {
     if (response.success) {
        if (response.data.x_cod_response == 1 ){
          var url__servidor = 'https://adhoc.com.co/'
          //Codigo personalizado
          // alert("Transaccion Aprobada");   
          console.log("Transaccion Aprobada");   
          fetch( url__servidor+'insertar-info-vehiculo', {
              method: 'POST',
              body: JSON.stringify({
      // INFORMACION OBLIGATORIA DEL VEHICULO
      nombre__usuario: "<?php if(isset($nombre_usuario)){echo $nombre_usuario;}  ?>",
      id__usuario:"<?php  if(isset($id_usuario)){echo $id_usuario;} ?>",
      nombre_plan:"<?php if(isset($nombre__plan)){echo $nombre__plan;} ?>",
      avatar : "<?php  if(isset($avatar)){echo $avatar;} ?>" ,
      marca : "<?php  if(isset( $marca)){echo  $marca;} ?>" ,
      modelo : "<?php if(isset( $modelo)){echo  $modelo;} ?>" ,
      color: "<?php if(isset($color)){echo $color;} ?>" ,
      fecha_fabricacion:"<?php if(isset($fecha_fabricacion )){echo $fecha_fabricacion  ;}?>",
      matricula: "<?php if(isset($matricula)){echo $matricula;}  ?>" ,
      ciudad_matricula: "<?php if(isset($ciudad_matricula)){echo $ciudad_matricula;}  ?>" ,
      ciudad_venta: "<?php if(isset($ciudad_venta)){echo $ciudad_venta;} ?>",
      propietario: "<?php if(isset($propietario)){echo $propietario;}  ?>" ,
      kilometros: "<?php if(isset($kilometros)){echo $kilometros;}  ?>",
      numero_puertas:"<?php if(isset($puertas)){echo $puertas;} ?>",
      precio:"<?php if(isset($precio_vehiculo)){echo $precio_vehiculo;} ?>" ,
      tipo_combustible: "<?php if(isset($combustible)){echo $combustible;}  ?>" ,
      caja: "<?php if(isset($caja)){echo $caja;} ?>",
      direccion: "<?php if(isset($direccion )){echo $direccion ;} ?>",
      cilindraje: "<?php if(isset($cilindraje)){echo $cilindraje;} ?>",
      descripcion: "<?php if(isset($descripcion)){echo $descripcion;}?>",

      // INFORMACION ADICIONAL DEL VEHICULO
      airbag_delantero: "<?php if(isset($airbag_delantero)){echo $airbag_delantero;}   ?>",
      airbag_trasero: "<?php  if(isset($airbag_trasero )){echo $airbag_trasero ;}  ?>" ,
      bloqueo_central: "<?php if(isset($bloqueo_central)){echo $bloqueo_central;}  ?>" ,
      alarma: "<?php if(isset($alarma)){echo $alarma;}  ?>",
      control_acsenso: "<?php if(isset($control_acsenso)){echo $control_acsenso;}  ?>" ,
      control_decsenso: "<?php if(isset($control_decsenso)){echo $control_decsenso;}  ?>" ,
      sensores_delanteros: "<?php if(isset($sensores_delanteros)){echo$sensores_delanteros;}  ?>" ,
      sensor_reversa: "<?php if(isset($sensor_reversa)){echo $sensor_reversa;}  ?>",
      punto_ciego: "<?php if(isset($punto_ciego)){echo $punto_ciego;}  ?>",
      camara_reversa: "<?php if(isset($camara_reversa)){echo $camara_reversa;}  ?>",
      aire_acondicionado: "<?php if(isset($aire_acondicionado)){echo $aire_acondicionado;}  ?>",
      android_auto: "<?php if(isset($android_auto)){echo $android_auto;}  ?>",
      apple_car_play: "<?php if(isset($apple_car_play)){echo $apple_car_play;}  ?>",
      bluetooth: "<?php if(isset($bluetooth)){echo $bluetooth;} ?>",
      espejos_electricos: "<?php if(isset($espejos_electricos)){echo $espejos_electricos;}  ?>",
      exploradoras:"<?php if(isset($exploradoras)){echo $exploradoras;} ?>",
      vidrios_electricos:"<?php if(isset($vidrios__electricos)){echo $vidrios__electricos;}?>",
      techo_corredizo: "<?php if(isset($techo_corredizo)){echo $techo_corredizo;}  ?>",
      techo_panoramico: "<?php if(isset($techo_panoramico)){echo $techo_panoramico;}  ?>",
      parqueo_automatico: "<?php if(isset($parqueo_automatico)){echo $parqueo_automatico;}  ?>",
      desempañador_trasero: "<?php if(isset($desempañador_trasero)){echo $desempañador_trasero;} ?>",
      gps:"<?php if(isset($gps)){echo $gps;} ?>",
      rines_de_lujo:"<?php if(isset($rines_de_lujo)){echo $rines_de_lujo;} ?>",
      radio_cassette: "<?php if(isset($radio_cassette)){echo $radio_cassette;} ?>",
      radio_cd: "<?php if(isset($radio_cd)){echo $radio_cd;} ?>",
      pantalla_video: "<?php if(isset($pantalla_video)){echo $pantalla_video;} ?>",

      //DATOS DEL CONTACTO DEL VENDEDOR
      Whatsapp_uno: "<?php if(isset( $Whatsapp_uno)){echo $Whatsapp_uno;}  ?>",
      Whatsapp_dos: "<?php if(isset($Whatsapp_dos)){echo $Whatsapp_dos;}  ?>",
      telefono_uno: "<?php if(isset($telefono_uno)){echo $telefono_uno;}  ?>",
      telefono_dos: "<?php if(isset($telefono_dos)){echo $telefono_dos;}  ?>",


      //RUTAS DE LAS IMAGENES
      ruta_1: "<?php if(isset($ruta__uno)){echo $ruta__uno;} ?>",
      ruta_2: "<?php if(isset($ruta__dos)){echo $ruta__dos;} ?>",
      ruta_3: "<?php if(isset($ruta__tres)){echo $ruta__tres;}  ?>",
      ruta_4: "<?php if(isset($ruta__cuatro)){echo $ruta__cuatro;}  ?>",
      ruta_5: "<?php if(isset($ruta__cinco)){echo $ruta__cinco;}  ?>",
      ruta_6: "<?php if(isset($ruta__seis)){echo $ruta__seis;}  ?>",
      ruta_7: "<?php if(isset($ruta__siete)){echo $ruta__siete;}  ?>",
      ruta_8: "<?php if(isset($ruta__ocho)){echo $ruta__ocho;}  ?>",
      ruta_9: "<?php if(isset($ruta__nueve)){echo $ruta__nueve;} ?>",
      ruta_10: "<?php if(isset($ruta__diez)){echo $ruta__diez; }  ?>",
    }) ,
              headers: {
                'Content-Type': 'application/json'
              }

            })
            .then(respuesta => respuesta.json())
            .then(data => {
              if(data ==='ok'){
                console.log(data)
                 fetch( url__servidor+'eliminar-variables-sesion', { method: 'POST' })
                .then(res => {
                  if (res === 'ok') {
                    console.log(res);
                    clearInterval(paymentStatusInterval);
                  } 
                })
                .catch(error => {
                  console.log('Error al enviar la petición: ', error);
                });
              // Recargar la página
              window.location.reload();
  }
            })

          
        //  insertar__datos__del__vehculo();
        }
        //Transaccion Rechazada
        if (response.data.x_cod_response == 2) {
          console.log('transacción rechazada');
        }
        //Transaccion Pendiente
        if (response.data.x_cod_response == 3) {
          console.log('transacción pendiente');
        }
        //Transaccion Fallida
        if (response.data.x_cod_response == 4) {
          console.log('transacción fallida');
        }

        $('#fecha').html(response.data.x_transaction_date);
        $('#respuesta').html(response.data.x_response);
        $('#referencia').text(response.data.x_id_invoice);
        $('#motivo').text(response.data.x_response_reason_text);
        $('#recibo').text(response.data.x_transaction_id);
        $('#banco').text(response.data.x_bank_name);
        $('#autorizacion').text(response.data.x_approval_code);
        $('#total').text(response.data.x_amount + ' ' + response.data.x_currency_code);


      } else {
        alert("Error consultando la información");
      }
    });


  }
 
  $(document).ready(function () {
    //llave publica del comercio
   // Ejecuta la función checkPaymentStatus cada 5 segundos
    // setInterval(checkPaymentStatus, 6000);
//  checkPaymentStatus();
var paymentStatusInterval;
function startCheckingPaymentStatus() {
  // Inicia la comprobación del estado de pago cada 5 segundos
  paymentStatusInterval = setInterval(checkPaymentStatus, 10000);
  console.log('recargando la funcion')
}
startCheckingPaymentStatus();  
  })
</script>
<div class="container contenedor__parrafo__final__compra">
  <p class="parrafo__final__compra">¡Gracias por publicar tu vehiculo en nuestra plataforma !
    Estamos muy contentos de que nos hayas elegido. Trabajamos para que siempre obtengas la máxima satisfacción,
    no nos cabe duda de que volveremos a verte de nuevo por aqui muy pronto. <br>
    ¡Que tu carro se venda muy rapido !</p>
  <h3 class="subtitulo__redes__sociales">Puedes seguirnos en nuestras redes sociales</h3>
  <div class="redes__sociales">
    <a href="https://www.facebook.com/adhoc.com.co" target="_blank"><i class="fab fa-facebook facebook"></i></a>
    <a href="https://www.tiktok.com/@adhoc_co" target="_blank"><i class="fab fa-twitter twitter"></i></a>
    <a href="https://www.instagram.com/adhoc.com.co" target="_blank"><i class="fab fa-instagram instagram"></i></a>
  </div>
</div>
<br><br>
<?php include'layout/footer-home.php';?>

