<?php  include'layout/nav-home-usuario.php';
       include'config/config.php'; 

$servicios = isset($_SESSION['carrito']['servicios']) ? $_SESSION['carrito']['servicios'] : null;

if($servicios != null){
    $lista__carrito = array();
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
 echo '<h3>No hay nada que mostar</h3>';
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
<div class="contenido__compra">
    <div class="detalles__compra">
      <h3 class="texto__compra">Nombre servicio</h3>
      <p class="texto__compra"><?php  echo $nombre__producto ?></p>
    </div>
    <div class="detalles__compra">
    <h3 class="texto__compra">Precio</h3>
    <p class="texto__compra"><?php  echo number_format($precio__producto,2,'.','.') ?></p>   
    </div>
    <div class="detalles__compra">
    <h3 class="texto__compra">Cantidad</h3>
    <p class="texto__compra"><?php  echo $cantidad ?></p>
    </div>
    <div class="detalles__compra">
    <h3 class="texto__compra">Subtotal</h3>
    <p  class="texto__compra"id="subtotal_<?php  echo $id ?>" name="subtotal[]"><?php echo  number_format($subtotal,2,'.','.') ?></p> 
    </div>
    <div class="detalles__compra"> 
        <p class="texto__compra">Acciones</p> 
        <a href="#" class="boton__eliminar__servicio" id="btn-modal-servicios" data-bs-id="<?php echo $id  ?>"><i class="fas fa-trash-alt"></i></a>
    </div>

</div>
<br>
<?php  } ?>
<?php  } ?>
<?php   if($lista__carrito != null){  ?>
<div class="contenedor__saldo">
 <h2 id="total" class="total__servicio"> Total a pagar  $ <?php  echo  number_format($total,2,'.','.') ?></h2>
 <a href="./pago" class="enlace__proceder__pago">Proceder a pagar</a>
</div>
<?php } ?>

</div>

<div id="modal-servicios" class="modal-servicios">
  <div class="modal-content">
    <p> Estas seguro de eliminar este servicio ?</p>
    <div class="contenedor__enlaces__modal">
        <a href="./compra" class="enlaces__modal cancelar">Cancelar</a>
        <!-- <a href="" class="enlaces__modal eliminar" id="btn-eliminar" onclick="eliminar()">eliminar</a> -->
        <button class="enlaces__modal eliminar" id="btn-eliminar" onclick="eliminar()">Eliminar</button>

    </div>
  </div>
 </div> 

<script>
 var modal = document.getElementById("modal-servicios");
var btn = document.getElementById("btn-modal-servicios");
btn.addEventListener('click',function(event){
let button = event.relatedTarget;
let id = button.getAttribute('data-bs-id');
let boton__eliminar = modal.querySelector('.contenedor__enlaces__modal #btn-eliminar')
boton__eliminar.value = id;


})

var span = document.getElementsByClassName("close")[0];

if(btn){
    btn.onclick = function() {
      modal.style.display = "block";
    }

}

if(span){
    span.onclick = function() {
      modal.style.display = "none";
    }

}
</script>

<?php  include'layout/footer-home.php';  ?>
