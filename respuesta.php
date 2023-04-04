<?php include'layout/nav-home-usuario.php'; 
$id__paquete = isset($_GET['id_paquete']) ? $_GET['id_paquete'] : '';
$id__usuario = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';
$id__estilos = isset($_GET['id_estilos'])? $_GET['id_estilos']: '';
$id__contacto = isset($_GET['id_contacto'])? $_GET['id_contacto']: '';
$id__equipamiento = isset($_GET['id_equipamiento'])? $_GET['id_equipamiento']: '';
$id__fotos = isset($_GET['id_fotos'])? $_GET['id_fotos']: '';
$id__informacion = isset($_GET['id_informacion'])? $_GET['id_informacion']: '';
$id__seguridad = isset($_GET['id_seguridad'])? $_GET['id_seguridad']: ''; ?>


<div class="container contenedor__final__compra" id="contenedor-respuesta-final-compra">
 <h1 class="titulo__final__compra">Muchas Gracias  </h1>
 <h2 class="subtitulo__final__compra">Por tu confianza en nosotros</h2>
 <a href="dashboard-usuario" class="enlace__final__compra">Regresar al inicio</a>
</div>
<!-- <header id="main-header" style="margin-top:20px" class="contenedor___respuesta__epayco">
    <div class="row container">
      <div class="col-lg-12 franja">
        <img class="center-block" src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/logo1.png" style="">
      </div>
    </div>
  </header> -->
  <div class="container contenedor___respuesta__epayco">
  <h4 style="text-align:center; color:white"> Respuesta de la Transacción </h4>
        <hr>
    <div class="contenedor__tabla__respuesta ">
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
        .some(function(item) { // returns first occurence and stops
          return item.split("=")[0] == param && (param = item.split("=")[1])
        })
      return param
    }
    function checkPaymentStatus() {
 //Referencia de payco que viene por url
 var ref_payco = getQueryParam('ref_payco');
      //Url Rest Metodo get, se pasa la llave y la ref_payco como paremetro
      var urlapp = "https://secure.epayco.co/validation/v1/reference/" + ref_payco;

      $.get(urlapp, function(response) {


        if (response.success) {
          if (response.data.x_cod_response == 1) {
            let url__servidor  = 'https://adhoc.com.co/' 
            //Codigo personalizado
            alert("Transaccion Aprobada");
            console.log('transacción aceptada');
    fetch( url__servidor+'insert-datos-de-pago',{
     method:'POST',
     body: JSON.stringify({
    id__paquete:<?php echo $id__paquete; ?>,
    id__usuario: <?php echo $id__usuario; ?>,
    id__estilos: <?php echo $id__estilos; ?>,
    id__contacto: <?php echo $id__contacto; ?>,
    id__equipamiento: <?php echo $id__equipamiento; ?>,
    id__fotos: <?php echo $id__fotos; ?>,
    id__informacion: <?php echo $id__informacion; ?>,
    id__seguridad: <?php echo $id__seguridad; ?>
  }),
  headers: {
    'Content-Type': 'application/json'
  }
     
    }).then(respuesta => respuesta.json())
    .then(data => {
      console.log(data)
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
    $(document).ready(function() {
      //llave publica del comercio
// Ejecuta la función checkPaymentStatus cada 5 segundos
    // setInterval(checkPaymentStatus, 5000);
    // console.log('recargando la funcion')
    })
    

  </script>
<div class="container contenedor__parrafo__final__compra">
    <p class="parrafo__final__compra">¡Gracias por publicar  tu vehiculo en nuestra plataforma ! 
    Estamos muy contentos de que nos hayas elegido. Trabajamos para que siempre obtengas la máxima satisfacción, 
    no nos cabe duda de que volveremos a verte de nuevo por aqui  muy pronto. <br>
    ¡Que tu carro se venda muy rapido !</p>
<h3 class="subtitulo__redes__sociales">Puedes seguirnos en nuestras redes sociales</h3>
<div class="redes__sociales">
<a href="https://www.facebook.com/adhocColombia" target="_blank"><i class="fab fa-facebook facebook"></i></a>
<a href="https://twitter.com/adhoc_colombia" target="_blank"><i class="fab fa-twitter twitter"></i></a>
<a href="https://www.instagram.com/adhoc_colombia/" target="_blank"><i class="fab fa-instagram instagram"></i></a>
  	 				
 
</div>
</div>


<?php include'layout/footer-home.php' ?>

