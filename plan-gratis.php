<?php include'layout/nav-home-usuario.php'; 
include'conexion-db-accent.php';  
$id__paquete = isset($_GET['idpaq']) ? $_GET['idpaq'] : '';

if($id__paquete){
    $consulta = "SELECT * FROM planes__de__publicaciones WHERE id_paquete = '$id__paquete'";
    $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
    if($ejecutar__la__consulta){
      $fila = mysqli_fetch_array($ejecutar__la__consulta); 
      $nombre__paquete = $fila['nombre_paquete'];
      $valor__paquete = $fila['valor_paquete'];
   

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
      <td class="texto__compra"><?php echo  number_format($valor__paquete,2,'.','.') ?></td> 
    </tr>  
  </tbody>
</table>
</div>
</div>
<br>
<?php  } ?>
<?php  } ?>
<div class="container contenedor__detalles__de__pago">
  <h2 class="proceso__pago">Procesar  pago</h2>
  <br>
  <form id="formulario-proceso-de-pago">
  <input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $_SESSION['id_usuario'] ?>">
  <input type="hidden"  class="step__input"name="nombre-pagador" value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
  <input type="hidden"  class="step__input"name="nombre-paquete" value="<?php  echo $fila['nombre_paquete']  ?>">
  <input type="hidden"  class="step__input"name="valor-paquete" value="<?php  echo $fila['valor_paquete']  ?>">
<button type="submit" class="step__button">Publicar gratis</button>
<br><br>
  </form>
  <br><br>
  <div id="alerta"></div>
</div>
<script>
       let formulario__de__pago = document.getElementById('formulario-proceso-de-pago');
if(formulario__de__pago){
formulario__de__pago.addEventListener('submit',function(evento){
    evento.preventDefault();
    let form__data = new FormData(document.getElementById('formulario-proceso-de-pago'))
let url__servidor  = 'https://adhoc.com.co/'
    fetch(url__servidor+'insert-info-plan-gratis',{
     method:'POST',
     body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
        if(data ==='ok'){
         let alerta = document.getElementById('alerta');
         alerta.innerHTML = `<div class="alert alert-success alert-dismissible" role="alert">
      <div class="texto__pago__exitoso"><i class="fas fa-check-circle"></i> !Bravo ¡ ya lo publicamos 
      </div>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      <a href="dashboard-usuario" class="enlace__volver__inicio">Volver al inicio</a>
    </div>
    `
        }
    })

})
}
</script>
<?php include'layout/footer-home.php'  ?>
