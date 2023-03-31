<?php    include'layout/nav-home-usuario.php';
       include'config/config.php'; 
  include'conexion-db-accent.php'; 
$informacion__obligatoria = $_SESSION['datos-obligatorios'];
$info__adicional = $_SESSION['info-adicional'];
$datos__de__contacto = $_SESSION['datos-contacto'];
$datos__imagenes = $_SESSION['datos-imagenes'];
  ?>
<div class="container contenedor__respuesta__pago">
  <br><br>
  <img src="./img/pago__cancelado.png" alt="sin tarjeta de credito" class="img__respuesta__pago"> 
  <h2 class="titulo__respuesta__pago">Proceso cancelado</h2>
  <p  class="texto__respuesta__pago">La solicitud de pago fue cancelada por el usuario</p>
  <!-- <header id="main-header" style="margin-top:20px" class="contenedor___respuesta__epayco">
    <div class="row container">
      <div class="col-lg-12 franja">
        <img class="center-block" src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/logo1.png" style="">
      </div>
    </div>
  </header> -->
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
</div>
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
        .some(function(item) { // returns first occurence and stops
          return item.split("=")[0] == param && (param = item.split("=")[1])
        })
      return param
    }
    $(document).ready(function() {
      //llave publica del comercio

      //Referencia de payco que viene por url
      var ref_payco = getQueryParam('ref_payco');
      //Url Rest Metodo get, se pasa la llave y la ref_payco como paremetro
      var urlapp = "https://secure.epayco.co/validation/v1/reference/" + ref_payco;

      $.get(urlapp, function(response) {


        if (response.success) {

          if (response.data.x_cod_response == 1) {
            //Codigo personalizado
            alert("Transaccion Aprobada");

            console.log('transacción aceptada');
          }
          //Transaccion Rechazada
          if (response.data.x_cod_response == 2) {
            console.log('transacción rechazada');
            <?php  
              unset($_SESSION['datos-obligatorios']);
              unset($_SESSION['info-adicional']);
              unset($_SESSION['datos-contacto']);
              unset($_SESSION['datos-imagenes']);
            
              $dir = 'upload/';
              $files = scandir($dir, SCANDIR_SORT_DESCENDING); // Obtener lista de archivos en orden cronológico inverso
              $deleteCount = 10; // Número de imágenes a eliminar

              for ($i = 0; $i < $deleteCount; $i++) {
                  $file = $dir . $files[$i];
                  if (is_file($file)) {
                      unlink($file); // Eliminar archivo
                  }
              }
              ?>

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

    });
  </script>

</div>
<br>


<?php    include'layout/footer-home.php'; ?>