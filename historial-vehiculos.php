<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario){
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");
setlocale(LC_TIME,"es_ES.UTF-8");?>
<section class="container contenedor__mis__carros__anunciados">
<br><br>
    <div class="contenido__historial"> 
    <?php 
    $consulta__datos__carros = "SELECT id_publicacion_vehiculo, id_usuario,marca_del_vehiculo,modelo_vehiculo,precio_del_vehiculo,nombre_paquete,estado_anuncio FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'"; 
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__carros );
    if($ejecutar__consulta && mysqli_num_rows($ejecutar__consulta) > 0){ ?>
    <h1 class="titulo__carro__anunciado">Mis anuncios</h1>
    <p class="subtitulo__anuncio__carro">Administra y edita la información de tus  anuncios</p>
   <?php  while($fila__resultado = mysqli_fetch_array($ejecutar__consulta)){  ?> 
    <div class="anunciados">
      <div class="table-responsive ">
    <table class="table table-dark table-hover ">
  <thead>
    <tr>
    <th scope="col">Id  de la publicación</th>
      <th scope="col">Marca del vehículo</th>
      <th scope="col">Precio del vehículo</th>
      <th scope="col">Estado del anuncio</th>
      <th scope="col">Nombre del plan</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="fila__tabla"><?php echo $fila__resultado['id_publicacion_vehiculo']?> </th>
      <td class="fila__tabla"><?php echo ucwords($fila__resultado['marca_del_vehiculo'])?> <?php echo ucwords($fila__resultado['modelo_vehiculo'])?></td>
      <td class="fila__tabla"><?php echo number_format($fila__resultado['precio_del_vehiculo'],2,'.','.')  ?></td>
      <td class="fila__tabla"><?php  
      if($fila__resultado['estado_anuncio'] ==='1'){
       $fila__resultado['estado_anuncio'] ?> <p>Activo <i class="fas fa-circle cirulo__anuncio__activo"></i></p>
       
       <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModalVehiculo" class="btn__desactivar__anuncio" data-bs-id="<?php  echo $fila__resultado['id_publicacion_vehiculo']  ?>">Pausar</a>
     <?php } 
     
     if($fila__resultado['estado_anuncio'] ==='Vendido'){ ?>
      <p class="estado__anuncio__vendido"><?php  echo $fila__resultado['estado_anuncio'] ?></p>
    <?php }
  
      $consulta__datos__diseño ="SELECT id_estilos FROM disenio__y__estilo__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$consulta__datos__diseño);
      $fila__diseño = mysqli_fetch_array($ejecutar__consulta__diseño);
        
      $consulta__datos__contacto ="SELECT id_contacto FROM contacto__vendedor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__datos__contacto);
      $fila__contacto = mysqli_fetch_array($ejecutar__consulta__contacto);
  
      $consulta__datos__equipamiento ="SELECT id_equipamiento FROM equipamiento__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$consulta__datos__equipamiento);
      $fila__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);
  
      $consulta__datos__fotos = "SELECT id_fotos FROM fotos__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__datos__fotos);
      $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
      
      $consulta__datos__informacion ="SELECT id_publicacion_vehiculo FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$consulta__datos__informacion);
      $fila__informacion = mysqli_fetch_array($ejecutar__consulta__informacion);
      
      $consulta__datos__seguridad ="SELECT id_seguridad FROM seguridad__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
      $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$consulta__datos__seguridad);
      $fila__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);
    
$fecha__de__registro__usuario =  $datos__resultado['fecha_de_registro'];
$fecha__actual =  date('d-m-Y');
$calculando__fecha = strtotime($fecha__actual) - strtotime($fecha__de__registro__usuario);
$salida =  $calculando__fecha / 86400;

if($salida > 60){ ?>
 <script>
  var intervalID;
  function actualizarEstadoAnuncioCarro(){
    var urlServidor = 'https://adhoc.com.co/'
      fetch(urlServidor+'insert-estado-anuncio-vencido',{
     method:'POST',
     body: JSON.stringify({
    idUsuario: <?php echo $_SESSION['id_usuario']; ?>
  
  }),
  headers: {
    'Content-Type': 'application/json'
  }
}).then(respuesta => respuesta.json())
.then(data => {
  if(data === "ok"){
    clearInterval(intervalID)
  }
  console.log(data)
    })
  }
  document.addEventListener('DOMContentLoaded', function() {
     intervalID = setInterval(actualizarEstadoAnuncioCarro,24 * 60 * 60 * 1000 )
  console.log('actualizando estado')
    })
    // 24 * 60 * 60 * 1000 
 </script>
 
<?php }else{  ?>
<?php } ?>
 
 <?php if($fila__resultado['estado_anuncio'] ==='0'){ ?>
    <p>
      Pausado <i class="fas fa-circle cirulo__anuncio__inactivo"></i>
      </p>
      <a href="actualizar-plan?id_usuario=<?php echo $id__usuario ?>&id_diseño=<?php  echo $fila__diseño['id_estilos'] ?>&id_contacto=<?php echo $fila__contacto['id_contacto'] ?>&id_equipamiento=<?php echo $fila__equipamiento['id_equipamiento'] ?>&id_fotos=<?php echo $fila__fotos['id_fotos'] ?>&id_informacion=<?php echo $fila__informacion['id_publicacion_vehiculo'] ?>&id_seguridad=<?php echo $fila__seguridad['id_seguridad'] ?>">Reanudar</a>
  <?php } ?>
</td>
</div>
</div>
</div>
</div>
      </div>
    </div>
  </div>

</div>
 <td class="fila__tabla"><?php  echo $fila__resultado['nombre_paquete'] ?></td>
      <td class="fila__tabla">
      <a href="editar-info-vehiculo?idu=<?php echo $id__usuario  ?>&idp=<?php  echo $fila__resultado['id_publicacion_vehiculo'] ?>" class="enlace__editar"> Editar <i class="far fa-edit"></i></a>
    <br>
      <a href="#" class="enlace__eliminar" data-bs-toggle="modal" data-bs-target="#exampleModalEliminar" id="eliminar" data-bs-id="<?php  echo $fila__resultado['id_publicacion_vehiculo']  ?>" > Borrar <i class="fas fa-trash-alt"></i></a>
      <br>
      <a href="estadisticas-anuncio-carro?idu=<?php echo $id__usuario  ?>&idp=<?php  echo $fila__resultado['id_publicacion_vehiculo'] ?>" class="enlace__editar"><i class="fas fa-plus"></i>  datos </a>       
      </td>
    </tr>
  </tbody>
</table>
<div>

<?php }?>
<?php }else{ ?>
  <div class="container contenedor__imagen__no__anuncio">
  <h2 class="subtitulo__no__anuncio">No tienes ningun anuncio </h2>
  <div class="imagen">
    <img src="./img/no__hay__carros__publicados.png" alt="caja de productos" class="imagen__no__hay__anuncio">
  </div>
</div>
<?php } ?>
</div>
  <?php } else{ ?>

<?php } ?>
<div class="modal fade " id="exampleModalVehiculo" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered ">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body ">
        <h2 class="subtitulo__modal"><i class="fas fa-info"></i> <strong>Atencion </strong>  </h2>
            <p class="parrafo__carros__anunciados">Pausa tu anuncio si ya vendiste tu vehiculo, si lo detienes sin estar vendido 
              no podras volver a activarlo
            </p>
           <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" id="desactivarAnuncio" class="btn btn-danger"  onclick="desactivarAnuncio(<?php echo  $_SESSION['id_usuario'] ?>)">Detener anuncio</button>
      </div>        
      </div>      
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalEliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="titulo__modal" id="exampleModalLabel">Estás seguro de eliminar esta información ? </h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="parrafo__carros__anunciados">Si borras la informacion del vehiculo no se podra recuperar</p>
      </div>
      <div class="modal-footer modal__eliminar">
      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
        <button id="btnEliminar" type="button"  class="btn btn-danger" onclick="eliminarDatos(<?php echo  $_SESSION['id_usuario'] ?>)">Eliminar</button>
      </div>
    </div>
  </div>
</div>
</section>

<?php include'layout/footer-home.php' ?>
<script>
let desactivar__anuncio =  document.getElementById('exampleModalVehiculo');
 desactivar__anuncio.addEventListener('show.bs.modal',function(event){
let boton = event.relatedTarget;
let id = boton.getAttribute('data-bs-id')
let boton__desactivar = desactivar__anuncio.querySelector('.modal-footer #desactivarAnuncio')
boton__desactivar.value = id
 })

function desactivarAnuncio(usuario){
  console.log('si')
  let btn__desactivar =  document.getElementById('desactivarAnuncio');
  let id =  btn__desactivar.value;
  let form__data =  new FormData();
  form__data.append('publicacion', id)
  form__data.append('usuario', usuario)

    var urlServidor = 'https://adhoc.com.co/'
    fetch(urlServidor+'desactivar-anuncio-carro',{
        method:'POST',
        body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
      console.log(data)
       if(data ==='ok'){
        Swal.fire({
      position: 'top-end',
      background:'#202F36',
      icon: 'success',
      title: 'Tu anuncio esta fuera de circulación',
      toast:true,
      showConfirmButton: false,
      showConfirmButton: false,
     timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
       toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
      })
      setTimeout(() => {
          location.reload()
        
      }, 200);
       }
    })
  
  }

let eliminar =  document.getElementById('exampleModalEliminar');
 eliminar.addEventListener('show.bs.modal',function(event){
let boton = event.relatedTarget;
let id = boton.getAttribute('data-bs-id')
let boton__Eliminar = eliminar.querySelector('.modal-footer #btnEliminar')
boton__Eliminar.value = id
 })

 function eliminarDatos(usuario){
  var urlServidor = 'https://adhoc.com.co/'
  let btn__eliminar =  document.getElementById('btnEliminar');
  let id =  btn__eliminar.value;
  let formData =  new FormData();
  formData.append('publicacion', id)
  formData.append('usuario', usuario)
  fetch(urlServidor+'eliminar-perfil-vehiculo',{
  method:'POST',
  body:formData,
  mode:'cors'
  }).then(respuesta => respuesta.json())
  .then(data =>{
    if(data === 'ok'){
      Swal.fire({
      position: 'top-end',
      background:'#202F36',
      icon: 'success',
      title: 'Se ha eliminado la información correctamente',
      toast:true,
      showConfirmButton: false, 
     timer: 3000,
      timerProgressBar: true,
      didOpen: (toast) => {
       toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
      }
      })
      setTimeout(() => {
          location.reload()
        
      }, 200);
       
    }
  })
}
</script>
