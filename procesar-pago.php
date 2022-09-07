<?php  include'layout/nav-home-usuario.php';
       include'config/config.php'; 

$servicios = isset($_SESSION['carrito']['servicios']) ? $_SESSION['carrito']['servicios'] : null;
$id_conductor =  isset($_GET['idc']) ? $_GET['idc'] : '';

if($servicios != null || $id_conductor !=""){
    $lista__carrito = array();
    foreach ($servicios as $clave => $cantidad) {
        $consulta__productos = "SELECT id_producto,nombre_producto,	valor_producto,descuento, $cantidad AS cantidad FROM productos    WHERE id_producto = '$clave' AND  activo = 1";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__productos);
            $lista__carrito[] = mysqli_fetch_array($ejecutar__consulta);

      
          
        }  
}else{
    header("Location: servicios.php");
    exit;
    
}?>


<div class="container contenedor__compra contenedor__pago">
    <h2 class="titulo__compra">detalles de tus servicios </h2>
    <?php   
if($lista__carrito == null){
  echo ' <tr><td colspan="5"><h3 class="titulo__compra">No has selecionado ningun servicio de conductor elegido</h3></td> </tr>  ';

}else{
    $total = 0;
    foreach($lista__carrito as $servicio){
        $id = $servicio['id_producto'];
        $nombre__producto = $servicio['nombre_producto'];
        $precio__producto = $servicio['valor_producto'];
        $descuento__producto = $servicio['descuento'];
        $precio__descuento  =  $precio__producto - (($precio__producto * $descuento__producto) / 100) ;
        $subtotal = $cantidad * $precio__descuento;
        $total += $subtotal; ?>
<div class="table-responsive ">
      <table class="table table-borderless">
      <thead class="table-dark tabla">
    <tr>
      <th scope="col" class="texto__compra">Nombre servicio</th>
      <th scope="col"class="texto__compra">Subtotal</th>
    

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="texto__compra"><?php  echo $nombre__producto ?></th>
      <td class="texto__compra"><?php echo  number_format($subtotal,2,'.','.') ?></td> 
      <td>
      </td>
    </tr>  
  </tbody>
</table>
</div>
<br>
<?php  } ?>
<?php  } ?>
<?php   if($lista__carrito != null){  ?>
<div class="contenedor__saldo">
 <h2 id="total" class="total__servicio total__a__pagar"> Total a pagar  $ <?php  echo  number_format($total,2,'.','.') ?></h2>
 
</div>
<?php } ?>
</div>

<div class="container contenedor__detalles__de__pago">
  <h2 class="titulo__pago">Procesar  pago</h2>
<div id="paypal-button-container" class="contenedor__boton__paypal"></div>
</div>

<?php  include'layout/footer-home.php';  ?>


<script>
paypal.Buttons({
  style: {
    layout: 'vertical',
    color:  'blue',
    shape:  'rect',
    label:  'pay'
  },
  createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: <?php  echo $total ?>
          }
        }]
      });
    },
    onApprove: function(data, actions) {
        let URL = 'captura';
    return actions.order.capture().then(function(detalles) {
        console.log(detalles)
        fetch(URL,{
        method:'POST',
        headers:{
              'content-type':'application/json'
        },
        body:JSON.stringify({
            detalles:detalles,
            identificadores:{
              idc:<?php   echo $id_conductor ?>,
              idu:<?php  echo $datos__resultado['id_usuario'] ?>
            }
          
        })

        }).then(respuesta => respuesta.json())
        .then(data=>{
          if(data === 'true'){
           window.location.href='compra-completada.php?idc=<?php echo $id_conductor  ?>&idu=<?php echo $datos__resultado['id_usuario'] ?>'
          }
          console.log(data)
        })

    });
  },
  onCancel: function (data) {
    Swal.fire({
    background:'#202F36',
  icon: 'error',
  title: 'El proceso de pago ha sido cancelado',
  showClass: {
    popup: 'animate__animated animate__fadeInDown'
  },
  hideClass: {
    popup: 'animate__animated animate__fadeOutUp'
  }
})
  }
}).render('#paypal-button-container');


 </script>