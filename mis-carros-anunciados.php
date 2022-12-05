<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';  
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
if($id__usuario){
date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");
setlocale(LC_TIME,"es_ES.UTF-8");



// if($ejecutar__consulta__diseño && $ejecutar__consulta__contacto && $ejecutar__consulta__equipamiento && $ejecutar__consulta__fotos &&
// $ejecutar__consulta__informacion && $ejecutar__consulta__seguridad){
//   $fila__diseño = mysqli_fetch_array($ejecutar__consulta__diseño);
//   $fecha__de__registro =  $fila__diseño['fecha_de_registro'];
//   echo $fecha__de__registro;
//   // $vencimiento__diseño = $fila__diseño['vencimiento_de_prueba'];
//   // $interval = date_diff($fecha__de__registro, $vencimiento__diseño);
//   // echo $interval -> format('%R%a días');

//   $fila__contacto = mysqli_fetch_array($ejecutar__consulta__contacto);
// $vencimiento__contacto = $fila__contacto['vencimiento_de_prueba'];

// $fila__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);
// $vencimiento__equipamiento = $fila__equipamiento['vencimiento_de_prueba'];

// $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
// $vencimiento__fotos = $fila__fotos['vencimiento_de_prueba'];

// $fila__informacion = mysqli_fetch_array($ejecutar__consulta__informacion);
// $vencimiento__informacion = $fila__informacion['vencimiento_de_prueba'];

// $fila__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);
// $vencimiento__seguridad = $fila__seguridad['vencimiento_de_prueba'];
// }
//     // echo "actaulizado";
//   }else{
//     echo "error";

//   }
// }
?>





<section class="container contenedor__mis__carros__anunciados">
  <?php  
// EXTRAYENDO LA FECHA INICIAL DE LA PRUEBA GRATUITA 
// $traer__datos__diseño ="SELECT id_usuario, fecha_de_registro  FROM disenio__y__estilo__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__diseño = mysqli_query($conexion__db__accent,$traer__datos__diseño);
// $resultado = mysqli_fetch_array($ejecutar__traer__diseño);
// $fecha__de__registro = $resultado['fecha_de_registro'];
// $fecha__diseño =  date_create($fecha__de__registro);
//  $fecha__vencimiento = date_add($fecha__diseño,date_interval_create_from_date_string('1 days'));
//  $fecha__final = date_format($fecha__vencimiento,'Y-m-d');

// $traer__datos__contacto ="SELECT id_usuario, fecha_de_registro  FROM contacto__vendedor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__contacto = mysqli_query($conexion__db__accent,$traer__datos__contacto);
// $resultado = mysqli_fetch_array($ejecutar__traer__contacto);
// $fecha__de__registro = $resultado['fecha_de_registro'];
// $fecha__contacto =  date_create($fecha__de__registro);
// date_add($fecha__contacto,date_interval_create_from_date_string('1 days'));
//  date_format($fecha__contacto,'Y-m-d');


// $traer__datos__equipamiento ="SELECT id_usuario, fecha_de_registro  FROM equipamiento__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__equipamiento = mysqli_query($conexion__db__accent,$traer__datos__equipamiento);
// $resultado__equipamiento = mysqli_fetch_array($ejecutar__traer__equipamiento);
// $fecha__de__registro__equipamiento = $resultado__equipamiento['fecha_de_registro'];
// $fecha__equipamiento =  date_create($fecha__de__registro__equipamiento);
// date_add($fecha__equipamiento,date_interval_create_from_date_string('1 days'));
// date_format($fecha__equipamiento,'Y-m-d');

// $traer__datos__fotos="SELECT id_usuario, fecha_de_registro  FROM fotos__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__fotos = mysqli_query($conexion__db__accent,$traer__datos__fotos);
// $resultado__fotos = mysqli_fetch_array($ejecutar__traer__fotos);
// $fecha__de__registro__fotos = $resultado__fotos['fecha_de_registro'];
// $fecha__fotos =  date_create($fecha__de__registro__fotos);
// date_add($fecha__fotos,date_interval_create_from_date_string('1 days'));
//  date_format($fecha__fotos,'Y-m-d');

// $traer__datos__informacion ="SELECT id_usuario, fecha_de_publicacion  FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__informacion = mysqli_query($conexion__db__accent,$traer__datos__informacion);
// $resultado__informacion = mysqli_fetch_array($ejecutar__traer__informacion);
// $fecha__de__registro__informacion = $resultado__informacion['fecha_de_publicacion'];
// $fecha__informacion =  date_create($fecha__de__registro__informacion);
// date_add($fecha__informacion,date_interval_create_from_date_string('1 days'));
//  date_format($fecha__informacion,'Y-m-d');


// $traer__datos__seguridad ="SELECT id_usuario, fecha_de_registro FROM seguridad__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
// $ejecutar__traer__seguridad = mysqli_query($conexion__db__accent,$traer__datos__seguridad);
// $resultado__seguridad = mysqli_fetch_array($ejecutar__traer__seguridad);
// $fecha__de__registro__seguridad = $resultado__seguridad['fecha_de_registro'];
// $fecha__seguridad =  date_create($fecha__de__registro__seguridad);
// date_add($fecha__seguridad,date_interval_create_from_date_string('1 days'));
//  date_format($fecha__seguridad,'Y-m-d');

// // ACTUALIZANDO LA LA NUEVA FECHA DE VENCIMIENTO DEL PLAN GRATUITO
// if($ejecutar__traer__diseño && $ejecutar__traer__contacto && $ejecutar__traer__equipamiento && $ejecutar__traer__fotos &&
// $ejecutar__traer__informacion && $ejecutar__traer__seguridad){
//   $actualizar__diseño = "UPDATE disenio__y__estilo__vehiculo SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__diseño);

//   $actualizar__contacto = "UPDATE contacto__vendedor SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion__contacto = mysqli_query($conexion__db__accent,$actualizar__contacto);

//   $actualizar__equipamiento = "UPDATE equipamiento__del__vehiculo SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion__equipamiento = mysqli_query($conexion__db__accent,$actualizar__equipamiento);

//   $actualizar__fotos = "UPDATE fotos__del__vehiculo SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion__fotos = mysqli_query($conexion__db__accent,$actualizar__fotos);

//   $actualizar__informacion = "UPDATE informacion__del__vehiculo__en__venta  SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion__informacion = mysqli_query($conexion__db__accent,$actualizar__informacion);
  
//   $actualizar__seguridad = "UPDATE seguridad__del__vehiculo SET vencimiento_de_prueba = '$fecha__final'  WHERE id_usuario = '{$_SESSION['id_usuario']}'";
//   $ejecutar__actualizacion__seguridad = mysqli_query($conexion__db__accent,$actualizar__seguridad);


//   if($ejecutar__actualizacion &&  $ejecutar__actualizacion__contacto &&  $ejecutar__actualizacion__equipamiento &&   $ejecutar__actualizacion__equipamiento 
//   && $ejecutar__actualizacion__fotos && $ejecutar__actualizacion__informacion && $ejecutar__actualizacion__seguridad){
   
    // SELECCIONANDO LA FECHA DE VENCIMIENTO DEL PLAN GRATUITO

    $consulta__datos__diseño ="SELECT id_estilos,fecha_de_registro FROM disenio__y__estilo__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$consulta__datos__diseño);
    $fila__diseño = mysqli_fetch_array($ejecutar__consulta__diseño);
    $fecha__de__registro = $fila__diseño['fecha_de_registro'];
    $fecha__actual =  date('d-m-Y');
    $diff__diseño = abs(strtotime($fecha__actual) - strtotime($fecha__de__registro));
    $diff__diseño = $diff__diseño/(60*60*24);
    
    
    $consulta__datos__contacto ="SELECT id_contacto,fecha_de_registro  FROM contacto__vendedor WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__datos__contacto);
    $fila__contacto = mysqli_fetch_array($ejecutar__consulta__contacto);
    $fecha__de__registro__contacto = $fila__contacto['fecha_de_registro'];
    $fecha__actual__registro =  date('d-m-Y');
    $diff__contacto = abs(strtotime($fecha__actual__registro) - strtotime($fecha__de__registro__contacto));
    $diff__contacto = $diff__contacto/(60*60*24);
    
    $consulta__datos__equipamiento ="SELECT id_equipamiento, fecha_de_registro FROM equipamiento__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$consulta__datos__equipamiento);
    $fila__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);
    $fecha__de__registro__equipamiento = $fila__equipamiento['fecha_de_registro'];
    $fecha__actual__equipamiento =  date('d-m-Y');
    $diff__equipamiento = abs(strtotime($fecha__actual__equipamiento) - strtotime($fecha__de__registro__equipamiento));
    $diff__equipamiento = $diff__equipamiento/(60*60*24);
    
    
    
    $consulta__datos__fotos = "SELECT id_fotos,fecha_de_registro FROM fotos__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__datos__fotos);
    $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
    $fecha__fotos = $fila__fotos['fecha_de_registro'];
    $fecha__actual__fotos =  date('d-m-Y');
    $diff__fotos = abs(strtotime($fecha__actual__fotos) - strtotime($fecha__fotos));
    $diff__fotos= $diff__fotos/(60*60*24);
    
    
    $consulta__datos__informacion ="SELECT id_publicacion_vehiculo, fecha_de_publicacion FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__informacion = mysqli_query($conexion__db__accent,$consulta__datos__informacion);
    $fila__informacion = mysqli_fetch_array($ejecutar__consulta__informacion);
    $fecha__informacion = $fila__informacion['fecha_de_publicacion'];
    $fecha__actual__informacion =  date('d-m-Y');
    $diff__informacion = abs(strtotime($fecha__actual__informacion) - strtotime($fecha__informacion));
    $diff__informacion = $diff__informacion/(60*60*24);
    
    
    $consulta__datos__seguridad ="SELECT id_seguridad,fecha_de_registro FROM seguridad__del__vehiculo WHERE id_usuario = '{$_SESSION['id_usuario']}'";
    $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$consulta__datos__seguridad);
    $fila__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);
    $fecha__seguridad = $fila__seguridad['fecha_de_registro'];
    $fecha__actual__seguridad =  date('d-m-Y');
    $diff__seguridad = abs(strtotime($fecha__actual__seguridad) - strtotime($fecha__seguridad));
    $diff__seguridad = $diff__seguridad/(60*60*24);
    
    if($diff__diseño > 15 && $diff__contacto > 0 && $diff__equipamiento > 15 && $diff__fotos >  15 && $diff__informacion > 15 && $diff__seguridad > 15) {
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
    
    }?>
    

<br><br>
    <div class="contenido__historial">
    <h1 class="titulo__carro__anunciado">Vehiculos anunciados</h1>
    <p class="subtitulo__anuncio__carro">puedes desactivar  la información de tu carro si ya lo vendiste</p>
    <?php  
    $consulta__datos__carros = "SELECT id_publicacion_vehiculo, id_usuario,precio_del_vehiculo,estado_anuncio FROM informacion__del__vehiculo__en__venta WHERE id_usuario = '{$_SESSION['id_usuario']}'"; 
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__carros);
    if($ejecutar__consulta && mysqli_num_rows($ejecutar__consulta) > 0){
     while($fila__resultado = mysqli_fetch_array($ejecutar__consulta)){  ?> 
    <div class="anunciados">
        <div class="contenedor__de__datos">
        <div class="contenido__carros__anunciados">
            <p class="parrafo__carro__anunciado">Datos de tu carro anunciado</p>
            <p class="texto__precio__carro">precio del carro actualmente</p>
            <h2 class="precio__de__carro__usado"><?php echo number_format($fila__resultado['precio_del_vehiculo'],2,'.','.')  ?></h2>
        </div>
    <div class="contenido__carros__anunciados">
     <button class="btn__editar__precio__carro"  data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> Administrar</button>
   </div>
</div>
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
    <p class="estado__activo">Tu anuncio actualmente esta <?php if($fila__resultado['estado_anuncio'] ==="Activo"){ ?>
      <span class="activado"><?php echo $fila__resultado['estado_anuncio'] ?></span>
      <form id="form-desactivar-anuncio">
        <input type="hidden"name="id-publicacion"value="<?php  echo $fila__resultado['id_publicacion_vehiculo'] ?>">
        <input type="hidden"name="id-usuario"value="<?php  echo $_SESSION['id_usuario']?>">
       <button type="submit" class="btn__desactivar__anuncio"> Desactivar ?</button> </p>
       </form>
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
  <h2 class="subtitulo__hay__anuncio">No tienes ningun anuncio aun </h2>
  <div class="imagen">
    <img src="./img/no__hay__carros__publicados.png" alt="caja de productos" class="imagen__no__hay__anuncio">

  </div>
</div>
</div>
 <?php } ?>
 <?php } ?>

</section>



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

let desactivar__anuncio = document.getElementById('form-desactivar-anuncio');
if(desactivar__anuncio){
  desactivar__anuncio.addEventListener('submit',function(event){
    let form__data__desactivar__anuncio = new FormData(document.getElementById('form-desactivar-anuncio'))
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