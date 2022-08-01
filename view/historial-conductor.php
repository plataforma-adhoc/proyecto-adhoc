<?php  include'layout/nav-home-conductor.php';
$id__conductor = isset($_GET['id']) ? $_GET['id']: 0;
if($id__conductor ===""){
  header("Location: ./dashboard-conductor");
  exit;
}
 
?>
<h2 class="titulo__historial">Historial</h2>
<p class="parrafo__historial">En tu historial puedes revisar a detalles tu solicitudes, en esta seccion te mostramos todos los detalles de tu pedido</p>
<div class="container contenedor__datos__historial">  
<?php  

$consulta__datos__servicio = "SELECT *  FROM detalles__de__la__compra WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
while($resultado = mysqli_fetch_array($ejecutar__consulta)){; 

$consulta__datos__servicio = "SELECT *  FROM usuarios WHERE id_usuario = '{$resultado['id_usuario']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
$resultado__datos__usuario = mysqli_fetch_array($ejecutar__consulta);


?>

<div class="info__perfil">
        <img src="upload/<?php  echo $resultado__datos__usuario['avatar'] ?>" alt="" class="foto__de__perfil">
    </div>
    <div class="info__perfil datos__de__historial">
        <div class="datos__del__perfil__de__usuario">
            <p class="texto">datos del usuario</p>
            <div>
                <p class="item__datos__servicio"><span> Nombre :  </span><?php  echo $resultado__datos__usuario['nombre_usuario'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Primer apellido : </span> <?php  echo $resultado__datos__usuario['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Segundo apellido : </span> <?php  echo $resultado__datos__usuario['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Email :</span>  <?php  echo $resultado__datos__usuario['email'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Documento : </span> <?php  echo $resultado__datos__usuario['numero_documento'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Telefono :</span>  <?php  echo $resultado__datos__usuario['numero_telefono'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Fecha de registro :</span>  <?php  echo date("d-m-Y", strtotime($resultado__datos__usuario['fecha_de_registro']))?></p>
            </div>
            <a href="#" class="enlace__eliminar__historial" data-bs-id="<?php echo $resultado['id']  ?>" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar <i class="fas fa-trash-alt"></i></a>

        </div>

        <div class="datos__del__perfil__de__usuario">
        <p class="texto">datos del servicio</p>
            <div>
                <p class="item__datos__servicio"> <span>Id servicio : </span><?php  echo $resultado['id'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Nombre servicio : </span> <?php  echo $resultado['nombre_servicio'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Valor servicio : </span> <?php  echo $resultado['precio_compra'] ?></p>
            </div>
            <div>
                <p class="item__datos__servicio"><span>Cantidad servicio : </span> <?php  echo $resultado['cantidad_compra'] ?></p>
            </div>
        </div>
    </div>

    <?php   } ?>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"> Eliminar historial</h5>
      </div>
      <div class="modal-body">
        <p class="modal-title" >Estas seguro de eliminar este historial ?</p>
        <p class="modal-title" >Ten en cuenta que se perdera toda informacion</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success no__eliminar" data-bs-dismiss="modal">No estoy seguro de eliminar</button>
        <button type="button" class="btn btn-danger eliminar" id="boton-eliminar" onClick="elimina()"> Proceder a eliminar</button>
      </div>
    </div>
  </div>
</div>
<br><br>
<script>
 var modal = document.getElementById("exampleModal");
modal.addEventListener('show.bs.modal',function(event){
let button = event.relatedTarget;
let id = button.getAttribute('data-bs-id');
let boton__eliminar = modal.querySelector('.modal-footer #boton-eliminar')
boton__eliminar.value = id;


})


function elimina(){
  let boton__eliminar =  document.getElementById('boton-eliminar');
  let id = boton__eliminar.value;
  let form__data = new FormData();
  form__data.append('action','eliminar')
  form__data.append('id',id)
  fetch('eliminar-historial-conductor',{
    method:'POST',
    body:form__data,

  }).then(respuesta => respuesta.json())
  .then(data =>{
    if(data == 'true' ){
     location.reload();
    }
  })
} 


</script>
<?php  include'layout/footer-home.php' ?>