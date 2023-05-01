<?php  include'layout/nav-home-usuario.php';
       include'config/config.php'; 
  include'conexion-db-accent.php'; 

$id__paquete = isset($_GET['idpaq']) ? $_GET['idpaq'] : '';
$id__usuario = isset($_GET['idu']) ? $_GET['idu'] : '';
if($id__usuario && $id__paquete){
 $consulta = "SELECT * FROM planes__de__publicaciones WHERE id_paquete = '$id__paquete'";
    $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
    if($ejecutar__la__consulta){
      $fila = mysqli_fetch_array($ejecutar__la__consulta); 
      $nombre__paquete = $fila['nombre_paquete'];
      $valor__paquete = $fila['valor_paquete'];
      $descuento = $fila['descuento'];
      $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );

      ?>
      <div class="container  container__proceso__de__pago">
    <h2 class="titulo__compra">Detalles de tu pago  </h2>
    <div class="table-responsive ">
    <table class="table table-dark table-striped  table-hover ">

    <tr>
      <th scope="col" class="texto__compra">Nombre del plan</th>
      <th scope="col"class="texto__compra">Total a pagar</th>
    

    </tr>
    <tbody>
    <tr>
      <th scope="row" class="texto__compra"><?php  echo  $nombre__paquete ?></th>
      <td class="texto__compra"><?php 
      if($descuento > 0){ echo  number_format($precio__descuento,2,'.','.') ?></td> 
    <?php }else {?>
      <?php  echo $valor__paquete; ?>
      <?php }?>
    </tr>  
  </tbody>
</table>
</div>
<br>
<p class="texto__otros__medios"> <i class="fas fa-lock"></i> Paga seguro </p>
<div class="contenedor__botones__de__pago">
  <div class="botones__de__pago epayco">
  <button class="contenedor__imagen__otros__pagos" id="otros-medios-de-pago">
    <i class="far fa-credit-card"></i>  Pagar con epayco
  </button>
</div>
<div class="botones__de__pago formas__de__pago">
  <div>
    <img src="./img/mastercard.png" alt="master cards"class="img__tarjetas__de__credito">
  </div>
  <div>
    <img src="./img/efecty.png" alt="efecty logo"class="img__tarjetas__de__credito">
  </div>
  <div>
    <img src="./img/american__express.png" alt="pse"class="img__tarjetas__de__credito">
  </div>
  <div>
    <img src="./img/visa.png" alt="pse"class="img__tarjetas__de__credito">
  </div>
    <div>    
 <img src="./img/pse.png" alt="pse"class="img__billeteras">
  </div>
  <div>    
    <img src="./img/logo__daviplata.png" alt="daviplata"class="img__billeteras">

  </div>
</div>
 


  </div>
</div>
<br>

</div>
</div>
<?php  } ?>
<?php  } ?>
</div>

<?php include'layout/footer-home.php' ?>   

<script>


function formasDePago(){
var medios__de__pago = document.getElementById('otros-medios-de-pago')
if(medios__de__pago){
medios__de__pago.addEventListener('click',function(){
var  handler = ePayco.checkout.configure({
  				key: '3ca56470e406e78da32222a6642ef3b7',
  				test: false
  			});
        var data={
          //Parametros compra (obligatorio)
          name: "<?php  echo  $nombre__paquete ?>",
          description: "Pagar plan <?php  echo  $nombre__paquete ?>",
          currency: "cop",
          amount: "<?php  echo  $precio__descuento ?>",
          invoice:generateRandomString(),
          tax_base: "0",
          tax: "0",
          country: "co",
          lang: "es",
          autoclick:'false',

          //Onpage="false" - Standard="true"
          external: "false",
          response: "http://localhost/accent__hollding/respuesta-pago?id_usuario=<?php echo $id__usuario ?>&nombre_plan=<?php  echo  $nombre__paquete ?>",
          pending:"http://localhost/accent__hollding/pago-pendiente?id_usuario=<?php echo $id__usuario ?>&nombre_plan=<?php  echo  $nombre__paquete ?>",
          rejected:"http://localhost/accent__hollding/pago-no-aprobado",
          confirmation:"http://localhost/accent__hollding/confirmacion" ,

  
          //Atributos cliente
          name_billing: "Andres Perez",
          address_billing: "Carrera 19 numero 14 91",
          type_doc_billing: "cc",
          mobilephone_billing: "3050000000",
          number_doc_billing: "100000000"

         //atributo deshabilitación metodo de pago
      

          }
          handler.open(data)

       })
        }  
        }
        
        formasDePago();

function generateRandomString() {
  var chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  var randomString = '';
  for (var i = 0; i < 17; i++) {
    var randomNum = Math.floor(Math.random() * chars.length);
    randomString += chars.substring(randomNum, randomNum + 1);
  }
  return randomString;
}


 </script>