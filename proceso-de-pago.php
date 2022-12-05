<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';  
$id__paquete = isset($_GET['idpaq']) ? $_GET['idpaq'] : '';
$id__usuario = isset($_GET['idu']) ? $_GET['idu'] : '';

if($id__paquete && $id__usuario){
    $consulta = "SELECT * FROM planes__de__publicaciones WHERE id_paquete = '$id__paquete'";
    $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
    if($ejecutar__la__consulta){
      $fila = mysqli_fetch_array($ejecutar__la__consulta); 
      $nombre__paquete = $fila['nombre_paquete'];
      $valor__paquete = $fila['valor_paquete'];
      $descuento = $fila['descuento'];
      $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );

      ?>
      <div class="container contenedor__compra contenedor__pago">
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
<div id="paypal-button-container"></div>
</div>
<?php  } ?>
<?php  } ?>
</div>
<?php include'layout/footer-home.php' ?>   


<script>
paypal.Buttons({
  style:{
    label:'pay'
  },
  createOrder: function(data, actions) {
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: <?php echo $precio__descuento; ?>
          }
        }]
      });
    },
    onApprove: function(data, actions) {
      let url__servidor  = 'https://adhoc.com.co/'
      actions.order.capture().then(function(detalles){
        return fetch('capturar-datos',{
         method:'POST',
         headers:{
          'content-type' : 'application/json'
  
         },
         body:JSON.stringify({
          detalles:detalles,
          id:<?php  echo $_SESSION['id_usuario'] ?>

          
         })
        
        })

      }).then(respuesta => respuesta.json())
      .then(data =>{
        if(data ==='true'){
          window.location.href ='compra-confirmada'
        }
        console.log(data)
      })
      
  },
  onCancel:function(data){
    Swal.fire({
   background:'#202F36',
    icon: 'error',
     title: `Tu compra fue cancelada`,
     footer: 'Pero calma en otro momento podemos cerrar el trato',
                   
      })
      let datos = new FormData()
      datos.append('id',<?php echo  $_SESSION['id_usuario']  ?>)
      fetch('pago-cancelado',{
        method:'POST',
        body:datos
      }).then(respuesta => respuesta.json())
      .then(resultado =>{
        if(resultado === 'true'){
          console.log(resultado);

        }
      })
  },
}).render('#paypal-button-container')
</script>
 <?php


