<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';  
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario){
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");
setlocale(LC_TIME,"es_ES.UTF-8");
?>
<section class="container contenedor__mis__carros__anunciados">
  <?php  

   
    // SELECCIONANDO LA FECHA DE VENCIMIENTO DEL PLAN GRATUITO

    $consulta__datos__diseño ="SELECT id_estilos,fecha_de_registro FROM disenio__y__estilo__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$consulta__datos__diseño);
   if(mysqli_num_rows($ejecutar__consulta__diseño) > 0){
     $fila__diseño = mysqli_fetch_array($ejecutar__consulta__diseño);
     $fecha__de__registro = $fila__diseño['fecha_de_registro'];
     $fecha__actual =  date('d-m-Y');
     $diff__diseño = abs(strtotime($fecha__actual) - strtotime($fecha__de__registro));
     $diff__diseño = $diff__diseño/(60*60*24);

   
    
    $consulta__datos__contacto ="SELECT id_contacto,fecha_de_registro  FROM contacto__vendedor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__datos__contacto);
    if(mysqli_num_rows($ejecutar__consulta__contacto) > 0){
      $fila__contacto = mysqli_fetch_array($ejecutar__consulta__contacto);
      $fecha__de__registro__contacto = $fila__contacto['fecha_de_registro'];
      $fecha__actual__registro =  date('d-m-Y');
      $diff__contacto = abs(strtotime($fecha__actual__registro) - strtotime($fecha__de__registro__contacto));
      $diff__contacto = $diff__contacto/(60*60*24);

    
    
    $consulta__datos__equipamiento ="SELECT id_equipamiento, fecha_de_registro FROM equipamiento__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$consulta__datos__equipamiento);
    if(mysqli_num_rows( $ejecutar__consulta__equipamiento) > 0){
      $fila__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);
      $fecha__de__registro__equipamiento = $fila__equipamiento['fecha_de_registro'];
      $fecha__actual__equipamiento =  date('d-m-Y');
      $diff__equipamiento = abs(strtotime($fecha__actual__equipamiento) - strtotime($fecha__de__registro__equipamiento));
      $diff__equipamiento = $diff__equipamiento/(60*60*24);

    
    
    
    
    $consulta__datos__fotos = "SELECT id_fotos,fecha_de_registro FROM fotos__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__datos__fotos);
    if(mysqli_num_rows($ejecutar__consulta__fotos) > 0){
      $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
  $fecha__fotos = $fila__fotos['fecha_de_registro'];
  $fecha__actual__fotos =  date('d-m-Y');
  $diff__fotos = abs(strtotime($fecha__actual__fotos) - strtotime($fecha__fotos));
  $diff__fotos= $diff__fotos/(60*60*24);

    
    
    
    $consulta__datos__informacion ="SELECT id_publicacion_vehiculo, fecha_de_publicacion FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$consulta__datos__informacion);
    if(mysqli_num_rows($ejecutar__consulta__informacion) > 0){
      $fila__informacion = mysqli_fetch_array($ejecutar__consulta__informacion);
      $fecha__informacion = $fila__informacion['fecha_de_publicacion'];
      $fecha__actual__informacion =  date('d-m-Y');
      $diff__informacion = abs(strtotime($fecha__actual__informacion) - strtotime($fecha__informacion));
      $diff__informacion = $diff__informacion/(60*60*24);

    
    
    
    $consulta__datos__seguridad ="SELECT id_seguridad,fecha_de_registro FROM seguridad__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$consulta__datos__seguridad);
    if(mysqli_num_rows($ejecutar__consulta__seguridad) > 0){
      $fila__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);
      $fecha__seguridad = $fila__seguridad['fecha_de_registro'];
      $fecha__actual__seguridad =  date('d-m-Y');
      $diff__seguridad = abs(strtotime($fecha__actual__seguridad) - strtotime($fecha__seguridad));
      $diff__seguridad = $diff__seguridad/(60*60*24);


    
    if($diff__diseño > 15 && $diff__contacto > 15 && $diff__equipamiento > 15 && $diff__fotos >  15 && $diff__informacion > 15 && $diff__seguridad > 15) {
      $actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET estado_anuncio = 'Desactivado'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__diseño);
      
        $actualizar__contacto = "UPDATE contacto__vendedor SET  estado_anuncio = 'Desactivado'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);
      
        $actualizar__equipamiento = "UPDATE equipamiento__del__vehiculo SET  estado_anuncio = 'Desactivado'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__equipamiento);
      
        $actualizar__fotos = "UPDATE fotos__del__vehiculo SET  estado_anuncio = 'Desactivado' WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);
      
        $actualizar__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET estado_anuncio = 'Desactivado'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
        
        $actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET  estado_anuncio = 'Desactivado'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
        $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__seguridad);
    
        if($actualizar__diseño && $actualizar__contacto && $actualizar__equipamiento && $actualizar__fotos && $actualizar__informacion && $actualizar__seguridad){ ?>
          <div class="container promocion__oferta">
          <h2 class="subtitulo__promocion__premiun">Pasate a premuin y obten un descuento</h2>
          <p class="parrafo__promocion__premiun">Aprovecha el descuento del plan premiun y compralo <strong>ahora</strong></p>
         <a href="actualizar-plan?idu=<?php echo $_SESSION['id_usuario'] ?>&ids=<?php echo $fila__diseño['id_estilos'];?>&idc=<?php  echo $fila__contacto['id_contacto'] ?>&ide=<?php  echo $fila__equipamiento['id_equipamiento'] ?>&idf=<?php  echo $fila__fotos['id_fotos'] ?>&idi=<?php  echo $fila__informacion['id_publicacion_vehiculo'] ?>&ids=<?php  echo $fila__seguridad['id_seguridad'] ?>"class="enlace__obtener__oferta">Obtener oferta</a>
        </div>
      <?php  } ?>
     <?php }else{
      // echo "Falta tiempo";
    
    }
  }
}
    }
  }
}
}
  
  ?>
    

<br><br>
    <div class="contenido__historial">
    <h1 class="titulo__carro__anunciado">Vehiculos anunciados</h1>
    <p class="subtitulo__anuncio__carro">puedes desactivar  la información de tu carro si ya lo vendiste</p>
    <?php  
    $consulta__datos__carros = "SELECT id_publicacion_vehiculo, id_usuario,marca_del_vehiculo,modelo_vehiculo,precio_del_vehiculo,estado_anuncio FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'"; 
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__carros);
    if($ejecutar__consulta && mysqli_num_rows($ejecutar__consulta) > 0){
     while($fila__resultado = mysqli_fetch_array($ejecutar__consulta)){  ?> 
    <div class="anunciados">
        <div class="contenedor__de__datos">
        <div class="contenido__carros__anunciados">
          <br>
            <h2 class="subtitulo__carro__anunciado">Datos de tu carro anunciado</h2>
            <p class="marca__carro__anunciado"><?php echo ucwords($fila__resultado['marca_del_vehiculo'])?> <?php echo ucwords($fila__resultado['modelo_vehiculo'])?></p>
            <p class="texto__precio__carro">precio del carro actualmente</p>
            <h2 class="precio__de__carro__usado"><?php echo number_format($fila__resultado['precio_del_vehiculo'],2,'.','.')  ?></h2>
        </div>
    <div class="contenido__carros__anunciados">
     <button class="btn__editar__precio__carro"  data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Administrar</button>
   </div>
</div>
<div class="contenido__tarjeta__colapsable">
  <div class="collapse" id="collapseExample">
  <div class="card card-body tarjeta__collapsable">
   <form class="formulario__precio__del__carro" id="formulario-nuevo-precio">
      <div class="mb-3">
      <input type="hidden" class="form-control input__precio__del__carro" id="recipient-name" value="<?php  echo $fila__resultado['id_publicacion_vehiculo'] ?>" name="id-publicacion">
              <input type="text" class="form-control input__precio__del__carro" id="recipient-name" value="<?php  echo $fila__resultado['precio_del_vehiculo'] ?>" name="nuevo-precio">
          </div>
          <button type="submit" class="btn btn-success btn__footer" id="actualizar-precio">Guardar nuevo precio</button>
     <br><br>
  </form>
  <div class="estado__del__anuncio">
      <p class="estado__activo"><i class="fas fa-bullhorn"></i> Tu anuncio actualmente esta <?php if($fila__resultado['estado_anuncio'] ==="Activo"){ ?>
        <span class="activado"><?php echo $fila__resultado['estado_anuncio'] ?></span> </p>
        
        <form id="form-desactivar-anuncio">
          <input type="hidden"name="id-publicacion"value="<?php  echo $fila__resultado['id_publicacion_vehiculo'] ?>">
          <input type="hidden"name="id-usuario"value="<?php  echo $_SESSION['id_usuario']?>">
         <button type="submit" class="btn__desactivar__anuncio"> Desactivar anuncio</button> </p>
         </form>

</div>
    <?php  } ?> <br> 

    <?php if($fila__resultado['estado_anuncio'] ==="Desactivado"){ ?>
      <span class="desactivado"><?php echo $fila__resultado['estado_anuncio'] ?></span>
      
      <?php } ?>
</div>
</div>
</div>

</div>


  <?php } ?>
  <?php }else{ ?>
<div class="container contenedor__imagen__no__anuncio">
  <h2 class="subtitulo__hay__anuncio">No tienes ningun anuncio </h2>
  <div class="imagen">
    <img src="./img/no__hay__carros__publicados.png" alt="caja de productos" class="imagen__no__hay__anuncio">

  </div>
</div>
</div>
 <?php } ?>
 <?php } ?>

</section>
<?php
$seleccion__diseño = "SELECT nombre_paquete FROM disenio__y__estilo__vehiculo   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__diseño = mysqli_query($conexion__db__accent,$seleccion__diseño);
$fila__seleccion__diseño = mysqli_fetch_array($ejecutar__seleccion__diseño);
$fila__seleccion__diseño['nombre_paquete'];

$seleccion__contacto = "SELECT nombre_paquete FROM contacto__vendedor  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__contacto = mysqli_query($conexion__db__accent,$seleccion__contacto);
$fila__seleccion__contacto = mysqli_fetch_array($ejecutar__seleccion__contacto);
$fila__seleccion__contacto['nombre_paquete'];

$seleccion__equipamiento = "SELECT nombre_paquete FROM equipamiento__del__vehiculo   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__equipamiento = mysqli_query($conexion__db__accent,$seleccion__equipamiento);
$fila__seleccion__equipamiento = mysqli_fetch_array($ejecutar__seleccion__equipamiento);
$fila__seleccion__equipamiento['nombre_paquete'];


$seleccion__fotos = "SELECT nombre_paquete FROM fotos__del__vehiculo  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__fotos = mysqli_query($conexion__db__accent,$seleccion__fotos);
$fila__seleccion__fotos = mysqli_fetch_array($ejecutar__seleccion__fotos);
$fila__seleccion__fotos['nombre_paquete'];


$seleccion__informacion = "SELECT nombre_paquete FROM informacion__del__vehiculo__en__venta    WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__informacion = mysqli_query($conexion__db__accent,$seleccion__informacion);
$fila__seleccion__informacion = mysqli_fetch_array($ejecutar__seleccion__informacion);
$fila__seleccion__informacion['nombre_paquete'];


$seleccion__seguridad = "SELECT nombre_paquete FROM seguridad__del__vehiculo   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__seleccion__seguridad = mysqli_query($conexion__db__accent,$seleccion__seguridad);
$fila__seleccion__seguridad = mysqli_fetch_array($ejecutar__seleccion__seguridad);
$fila__seleccion__seguridad['nombre_paquete'];

 if($fila__seleccion__diseño['nombre_paquete'] ==='PREMUIN' && $fila__seleccion__contacto['nombre_paquete'] ==='PREMUIN' && $fila__seleccion__equipamiento['nombre_paquete'] ==='PREMUIN' &&
  $fila__seleccion__fotos['nombre_paquete'] ==='PREMUIN' && $fila__seleccion__informacion['nombre_paquete'] ==='PREMUIN'&& $fila__seleccion__seguridad['nombre_paquete'] ==='PREMUIN'){ ?>
   <div class="container solicitud__de__publicacion__redes__sociales" id="contenido-solicitud-publicacion">
     <p class="texto__publicacion__redes__sociales"> Seleccionamos algunos vehiculos registrados para publicarlo en nuestras cuentas de redes sociales para acelerar el proceso de venta
      ¿ aceptas que algunos datos basicos de tu vehiculo se publiquen en nuestras redes sociales ?  
   </p>
   <div class=" formulario__aceptar__publicacion" id="aceptar-publicacion">
     <input class="form-check-input" type="checkbox" value="Aceptar" id="aceptar" name="Aceptar">
     <input class="form-check-input" type="hidden" value="<?php echo $_SESSION['id_usuario'] ?>"name="id-usuario" id="id-usuario">
     <label class="form-check-label" for="aceptar">
       Si acepto
     </label>
   </div>
   <?php  
     $seleccion__diseño = "SELECT aceptar_anuncio_redes FROM disenio__y__estilo__vehiculo   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__diseño = mysqli_query($conexion__db__accent,$seleccion__diseño);
    $fila__seleccion__diseño = mysqli_fetch_array($ejecutar__seleccion__diseño);

    $seleccion__contacto = "SELECT aceptar_anuncio_redes FROM contacto__vendedor   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__contacto = mysqli_query($conexion__db__accent,$seleccion__contacto);
    $fila__seleccion__contacto = mysqli_fetch_array($ejecutar__seleccion__contacto);
  
    $seleccion__equipamiento = "SELECT aceptar_anuncio_redes FROM equipamiento__del__vehiculo  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__equipamiento = mysqli_query($conexion__db__accent,$seleccion__equipamiento);
    $fila__seleccion__equipamiento = mysqli_fetch_array($ejecutar__seleccion__equipamiento);
  
    $seleccion__fotos = "SELECT aceptar_anuncio_redes FROM fotos__del__vehiculo  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__fotos = mysqli_query($conexion__db__accent,$seleccion__fotos);
    $fila__seleccion__fotos = mysqli_fetch_array($ejecutar__seleccion__fotos);
     
    $seleccion__informacion = "SELECT aceptar_anuncio_redes FROM informacion__del__vehiculo__en__venta    WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__informacion = mysqli_query($conexion__db__accent,$seleccion__informacion);
    $fila__seleccion__informacion = mysqli_fetch_array($ejecutar__seleccion__informacion);
    
    $seleccion__seguridad = "SELECT aceptar_anuncio_redes FROM seguridad__del__vehiculo   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__seleccion__seguridad = mysqli_query($conexion__db__accent,$seleccion__seguridad); 
    $fila__seleccion__seguridad = mysqli_fetch_array($ejecutar__seleccion__seguridad);
   
    if($fila__seleccion__diseño['aceptar_anuncio_redes'] ==='Aceptar' && $fila__seleccion__contacto['aceptar_anuncio_redes'] ==='Aceptar' && $fila__seleccion__equipamiento['aceptar_anuncio_redes'] ==='Aceptar' &&
    $fila__seleccion__fotos['aceptar_anuncio_redes'] ==='Aceptar' && $fila__seleccion__informacion['aceptar_anuncio_redes'] ==='Aceptar' && $fila__seleccion__seguridad['aceptar_anuncio_redes'] ==='Aceptar'){ ?>
     <script>
         let contenido__solicitud__publicacion = document.getElementById('contenido-solicitud-publicacion');
         contenido__solicitud__publicacion.style.display = 'none';

      
     </script>
  
 <?php   } ?>
</div>
<div id="respuesta-solicitud" class="container contenedor__publicacion__aceptada"></div>
<br><br>
 <?php } ?>
<script>
     let respuesta__solicitud = document.getElementById('respuesta-solicitud').innerHTML = `
         <div class="publicacion__aceptada">
         <div class="contenido__check">
         <i class="far fa-check-circle check"></i>
         </div>
         <div>
         <p class="parrafo__aceptaste__publicacion">Aceptaste publicar tu vehiculo en nuestras redes sociales</p>
      
      </div>
     </div>`
</script>

<script>

var url__servidor = 'https://adhoc.com.co/'
let nuevo__precio = document.getElementById('formulario-nuevo-precio');
if(nuevo__precio){
  nuevo__precio.addEventListener('submit',function(event){
    let form__data = new FormData(document.getElementById('formulario-nuevo-precio'))
    event.preventDefault();
    fetch(url__servidor+'nuevo-precio-vehiculo',{
        method:'POST',
        body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
       if(data ==='ok'){

        Swal.fire({
      position: 'top-end',
      background:'#202F36',
      icon: 'success',
      title: 'Se actualizo el precio',
      toast:true,
      showConfirmButton: false,
      })
      setTimeout(() => {
          location.reload()
        
      }, 200);
       }
    })
  })
}

let aceptar__publicacion = document.getElementById('aceptar-publicacion');
if(aceptar__publicacion){
  aceptar__publicacion.addEventListener('click',function(evento){
  let   form__data = new FormData()
  let aceptar = document.getElementById('aceptar').value
  let id = document.getElementById('id-usuario').value
  var url__servidor = 'https://adhoc.com.co/'
  form__data.append('aceptar',aceptar)
  form__data.append('id',id)
    fetch(url__servidor+'aceptar-publicacion-redes-sociales',{
     method:'POST',
     body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
      if(data ==='ok'){
 
      }
      console.log(data);
    })
  })
}

let desactivar__anuncio = document.getElementById('form-desactivar-anuncio');
if(desactivar__anuncio){
  desactivar__anuncio.addEventListener('submit',function(event){
    let form__data__desactivar__anuncio = new FormData(document.getElementById('form-desactivar-anuncio'))
    var url__servidor = 'https://adhoc.com.co/'
    event.preventDefault();
    fetch(url__servidor+'desactivar-anuncio-carro',{
        method:'POST',
        body:form__data__desactivar__anuncio
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
      })
      setTimeout(() => {
          location.reload()
        
      }, 200);
       }
    })
  })
}
</script>

<?php
include'layout/footer-home.php';

?>