<?php  include'layout/nav-home-usuario.php';
       include'config/config.php'; 
include'conexion-db-accent.php'; 


$servicios = isset($_SESSION['carrito']['servicios']) ? $_SESSION['carrito']['servicios'] : null;
$id_conductor =  isset($_GET['idc']) ? $_GET['idc'] : '';

$lista__carrito = array();
if($servicios != null || $id_conductor !=""){
    foreach ($servicios as $clave => $cantidad) {
        $consulta__productos = "SELECT id_producto,nombre_producto,	valor_producto,descuento, $cantidad AS cantidad FROM productos    WHERE id_producto = '$clave' AND  activo = 1";
        $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__productos);
            $lista__carrito[] = mysqli_fetch_array($ejecutar__consulta); 
        } 
}?>

<div class="container contenedor__compra">
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
      <th scope="col"  class="texto__compra">Precio</th>
      <th scope="col"class="texto__compra">Cantidad</th>
      <th scope="col"class="texto__compra">Subtotal</th>
      <th scope="col"class="texto__compra">Acciones</th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="texto__compra"><?php  echo $nombre__producto ?></th>
      <td class="texto__compra"><?php  echo number_format($precio__producto,2,'.','.') ?></td>
      <td class="texto__compra"><?php  echo $cantidad ?></td>
      <td class="texto__compra"><?php echo  number_format($subtotal,2,'.','.') ?></td> 
      <td>
      <a href="#" class="boton__eliminar__servicio" data-bs-id="<?php echo $id  ?>" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-trash-alt"></i></a>
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
 <h2 id="total" class="total__servicio"> Total a pagar  $ <?php  echo  number_format($total,2,'.','.') ?></h2>
 <a href="procesar-pago?idc=<?php  echo $id_conductor  ?>" class="enlace__proceder__pago">Proceder a pagar</a>

</div>
<?php } ?>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Eliminar producto</h5>
      </div>
      <div class="modal-body">
        <p class="modal-title">Estas seguro de eliminar este producto ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success no__eliminar" data-bs-dismiss="modal">No estoy seguro de eliminar</button>
        <button type="button" class="btn btn-danger eliminar" id="boton-eliminar" onClick="elimina()"> Proceder a eliminar</button>
      </div>
    </div>
  </div>
</div>

<script>
 var modal = document.getElementById("exampleModal");
modal.addEventListener('show.bs.modal',function(event){
let button = event.relatedTarget;
let id = button.getAttribute('data-bs-id');
let boton__eliminar = modal.querySelector('.modal-footer #boton-eliminar')
boton__eliminar.value = id;


})


function elimina(){
  let url = 'https://adhoc.com.co/'
  let boton__eliminar =  document.getElementById('boton-eliminar');
  let id = boton__eliminar.value;
  let form__data = new FormData();
  form__data.append('action','eliminar')
  form__data.append('id',id)
  fetch(url+'eliminar-producto',{
    method:'POST',
    body:form__data,
    mode:'cors'
  }).then(respuesta => respuesta.json())
  .then(data =>{
    if(data.ok ){
     location.reload();
    }
  })
} 


</script>

<?php  include'layout/footer-home.php';  ?>

