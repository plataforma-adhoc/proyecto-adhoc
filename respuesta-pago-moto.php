<?php
 include'layout/nav-home-usuario.php';
 include'config/config.php'; 
include'conexion-db-accent.php';
$id__usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
$nombre__plan = isset($_GET['nombre_plan']) ? $_GET['nombre_plan'] : '';
if(isset($_SESSION['datosDeLaMoto'])){
    $datosDeLaMoto = $_SESSION['datosDeLaMoto'];
    $nombreUsuario = $datosDeLaMoto ['nombre'];
    $avatar = $datosDeLaMoto['avatar'];
    $idUsuario = $datosDeLaMoto ['id'];
    $marca = $datosDeLaMoto ['marca'];
    $modelo = $datosDeLaMoto ['modelo'];
    $color = $datosDeLaMoto ['color'];
    $fechaFabricacion = $datosDeLaMoto['fechaFabricacion'];
    $matricula = $datosDeLaMoto['matricula'];
    $ciudadMatricula = $datosDeLaMoto['ciudadMatricula'];
    $ciudadVenta = $datosDeLaMoto['ciudadVenta'];
    $propietario = $datosDeLaMoto['propietario'];
    $kilometros = $datosDeLaMoto['kilometros'];
    $precio= $datosDeLaMoto['precio'];
    $tipo = $datosDeLaMoto['tipo'];
    $cilindraje = $datosDeLaMoto['cilindraje'];
    $descripcion = $datosDeLaMoto['descripcion'];
    
    }

    if(isset($_SESSION['datosContactoMoto'])){
        $datosDeContacto = $_SESSION['datosContactoMoto'];
        $email = $datosDeContacto['email'];
        $Whatsapp = $datosDeContacto['Whatsapp'];
        $telefono = $datosDeContacto['telefono'];
      
      }

      if(isset($_SESSION['fotosDeLaMoto'])){
        $fotosDeLaMoto = $_SESSION['fotosDeLaMoto'];
        $rutaUno = $fotosDeLaMoto['ruta_1'];
        $rutaDos = $fotosDeLaMoto['ruta_2'];
        $rutaTres = $fotosDeLaMoto['ruta_3'];
        $rutaCuatro = $fotosDeLaMoto['ruta_4'];
        $rutaCinco = $fotosDeLaMoto['ruta_5'];
        $rutaSeis = $fotosDeLaMoto['ruta_6'];
        $rutaSiete = $fotosDeLaMoto['ruta_7'];
        $rutaOcho = $fotosDeLaMoto['ruta_8'];
        $rutaNueve = $fotosDeLaMoto['ruta_9'];
        $rutaDiez = $fotosDeLaMoto['ruta_10'];
      
      }?>

<div class="container contenedor__final__compra" id="contenedor-respuesta-final-compra">
  <h1 class="titulo__final__compra">Muchas Gracias </h1>
  <h2 class="subtitulo__final__compra">Por tu confianza en nosotros</h2>
  <a href="dashboard-usuario" class="enlace__final__compra">Regresar al inicio</a>
</div>
<div class="container contenedor___respuesta__epayco">
  <h4 style="text-align:center; color:white"> Respuesta de la Transacción </h4>
  <hr>
  <div class="contenedor__tabla__respuesta ">
    <div class="table-responsive">
      <table class="table table-bordered border-secondary">
        <tbody>
          <tr>
            <th colspan="2">Referencia</th>
            <td colspan="1" id="referencia"></td>
          </tr>
          <tr>
            <th colspan="2">Fecha</th>
            <td colspan="1" id="fecha" class=""></td>
          </tr>
          <tr>
            <th colspan="2">Respuesta</th>
            <td colspan="1" id="respuesta"></td>
          </tr>
          <tr>
            <th colspan="2">Motivo</th>
            <td colspan="1" id="motivo"></td>
          </tr>
          <tr>
            <th colspan="2">Banco</th>
            <td colspan="1" class="" id="banco"></td>
          </tr>
          <tr>
            <th colspan="2">Recibo</th>
            <td colspan="1" id="recibo"></td>
          </tr>
          <tr>
            <th colspan="2">Total</th>
            <td colspan="1" class="" id="total"></td>
          </tr>
        </tbody>
      </table>
    </div>
    <footer class="footer__respuesta">
      <div class="logos">
        <img
          src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/pagos_procesados_por_epayco_260px.png">
      </div>
      <div class="logos">
        <img
          src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/credibancologo.png"
          height="40px" style="margin-top:50px">
      </div>
    </footer>
  </div>
</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
  function getQueryParam(param) {
    location.search.substr(1)
      .split("&")
      .some(function (item) { 
        return item.split("=")[0] == param && (param = item.split("=")[1])
      })
    return param
  }

  function checkPaymentStatus() {
    var ref_payco = getQueryParam('ref_payco');
    var urlapp = "https://secure.epayco.co/validation/v1/reference/" + ref_payco;
    $.get(urlapp, function (response) {
      if (response.success) {
        if (response.data.x_cod_response == 1) {
          let urlServidor = 'https://adhoc.com.co/'
          //Codigo personalizado
          // alert("Transaccion Aprobada");
          fetch(urlServidor+'insertar-info-motos', {
            method: 'POST',
           body: JSON.stringify({
      nombreUsuario: "<?php  if(isset($nombreUsuario)){echo $nombreUsuario;} ?>",
      idUsuario:"<?php if(isset($idUsuario)){ echo $idUsuario; }?>",
      nombrePlan:"<?php if(isset($nombre__plan)){ echo $nombre__plan; } ?>",
      avatar : "<?php if(isset($avatar)){ echo $avatar; }?>" ,
      marca : "<?php if(isset($marca)){echo $marca; }?>" ,
      modelo : "<?php if(isset($modelo)){echo $modelo; }?>" ,
      color: "<?php if(isset($color)){echo $color; }?>" ,
      fechaFabricacion:"<?php if(isset($fechaFabricacion)){echo $fechaFabricacion; }?>",
      matricula: "<?php if(isset($matricula)){echo $matricula; } ?>" ,
      ciudadMatricula: "<?php if(isset($ciudadMatricula)){echo $ciudadMatricula; }?>" ,
      ciudadVenta: "<?php if(isset($ciudadVenta)){echo $ciudadVenta; }?>",
      propietario: "<?php if(isset($propietario)){echo $propietario; }?>" ,
      kilometros: "<?php if(isset($kilometros)){echo $kilometros; }?>",
      precio:"<?php if(isset($precio)){echo $precio; }?>",
      tipo:"<?php if(isset($tipo)){echo $tipo; }?>",
      cilindraje: "<?php if(isset($cilindraje)){echo $cilindraje;} ?>",
      descripcion: "<?php if(isset($descripcion)){echo $descripcion; }?>",

      //DATOS DEL CONTACTO DEL VENDEDOR
      email: "<?php if(isset($email)){echo $email;} ?>",
      telefono: "<?php if(isset( $telefono)){echo $telefono;} ?>",
      Whatsapp: "<?php if(isset($Whatsapp)){echo $Whatsapp;} ?>",

      //RUTAS DE LAS IMAGENES
      ruta_1: "<?php if(isset($rutaUno)){echo $rutaUno;} ?>",
      ruta_2: "<?php if(isset($rutaDos)){echo $rutaDos;} ?>",
      ruta_3: "<?php if(isset($rutaTres)){echo $rutaTres;} ?>",
      ruta_4: "<?php if(isset($rutaCuatro)){echo $rutaCuatro;} ?>",
      ruta_5: "<?php if(isset($rutaCinco)){echo $rutaCinco;} ?>",
      ruta_6: "<?php if(isset($rutaSeis)){echo $rutaSeis;} ?>",
      ruta_7: "<?php if(isset($rutaSiete)){echo $rutaSiete;} ?>",
      ruta_8: "<?php if(isset($rutaOcho)){echo $rutaOcho;} ?>",
      ruta_9: "<?php if(isset($rutaNueve)){echo $rutaNueve;} ?>",
      ruta_10: "<?php if(isset($rutaDiez)){echo $rutaDiez;} ?>",
    }) ,
              headers: {
                'Content-Type': 'application/json'
              }
            }).then(respuesta => respuesta.json())
            .then(data => {
              console.log(data)
              if(data ==='ok'){
                fetch(urlServidor+'eliminar-variables-sesion-moto', { method: 'POST' })
                .then(res => {
                  if (res === 'ok') {
                    console.log(res);
                    location.reload()
                  } 
                })
                .catch(error => {
                  alert('Error al enviar la petición: ', error);
                });
              }
            })
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
    setInterval(checkPaymentStatus, 5000);
    checkPaymentStatus();
    console.log('recargando la funcion')
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
    <a href="https://www.tiktok.com/@adhoc_co" target="_blank"><i class="fab fa-tiktok"></i></a>
    <a href="https://www.instagram.com/adhoc.com.co" target="_blank"><i class="fab fa-instagram instagram"></i></a>
  </div>
</div>

<?php
 include'layout/footer-home.php';
?>