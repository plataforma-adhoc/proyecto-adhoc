<?php include'layout/nav-home-usuario.php'; 
include'conexion-db-accent.php';  
$id__paquete = isset($_GET['idpaq']) ? $_GET['idpaq'] : '';
$nombre__plan = isset($_GET['nombre_plan']) ? $_GET['nombre_plan'] : '';
if($id__paquete && $nombre__plan){
  if(isset($_SESSION['datos-obligatorios'])){
    $informacion__obligatoria = $_SESSION['datos-obligatorios'];
    $nombre_usuario = $informacion__obligatoria['nombre'];
    $avatar = $informacion__obligatoria['avatar'];
    $id_usuario = $informacion__obligatoria['id'];
    $marca = $informacion__obligatoria['marca'];
    $modelo = $informacion__obligatoria['modelo'];
    $color = $informacion__obligatoria['color'];
    $fecha_fabricacion = $informacion__obligatoria['fecha_fabricacion'];
    $matricula = $informacion__obligatoria['matricula'];
    $ciudad_matricula = $informacion__obligatoria['ciudad_matricula'];
    $ciudad_venta =$informacion__obligatoria['ciudad_venta'];
    $propietario = $informacion__obligatoria['propietario'];
    $kilometros = $informacion__obligatoria['kilometros'];
    $precio_vehiculo = $informacion__obligatoria['precio'];
    $puertas = $informacion__obligatoria['puertas'];
    $combustible = $informacion__obligatoria['combustible'];
    $caja = $informacion__obligatoria['caja'];
    $direccion = $informacion__obligatoria['direccion'];
    $cilindraje = $informacion__obligatoria['cilindraje'];
    $descripcion = $informacion__obligatoria['descripcion'];
    
    }
    // INFORMACION ADICIONAL DEL VEHICULO
    if(isset($_SESSION['info-adicional'])){
      $info__adicional = $_SESSION['info-adicional'];
    $airbag_delantero = $info__adicional['airbag_delantero'];
    $airbag_trasero = $info__adicional['airbag_trasero'];
    $bloqueo_central = $info__adicional['bloqueo_central'];
    $alarma = $info__adicional['alarma'];
    $control_acsenso = $info__adicional['control_acsenso'];
    $control_decsenso = $info__adicional['control_decsenso'];
    $sensores_delanteros = $info__adicional['sensores_delanteros'];
    $sensor_reversa = $info__adicional['sensor_reversa'];
    $punto_ciego = $info__adicional['punto_ciego'];
    $camara_reversa = $info__adicional['camara_reversa'];
    $aire_acondicionado = $info__adicional['aire_acondicionado'];
    $android_auto = $info__adicional['android_auto'];
    $apple_car_play = $info__adicional['apple_car_play'];
    $bluetooth = $info__adicional['bluetooh'];
    $espejos_electricos = $info__adicional['espejos_electricos'];
    $exploradoras = $info__adicional['exploradoras'];
    $vidrios__electricos = $info__adicional['vidrios_electricos'];
    $techo_corredizo = $info__adicional['techo_corredizo'];
    $techo_panoramico = $info__adicional['techo_panoramico'];
    $parqueo_automatico = $info__adicional['parqueo_automatico'];
    $desempañador_trasero = $info__adicional['desempañador_trasero'];
    $gps = $info__adicional['gps'];
    $rines_de_lujo = $info__adicional['rines_de_lujo'];
    $radio_cassette = $info__adicional['radio_cassete'];
    $radio_cd = $info__adicional['radio_cd'];
    $pantalla_video = $info__adicional['pantalla_video'];
    
    }
    
    if(isset($_SESSION['datos-contacto'])){
      $datos__de__contacto = $_SESSION['datos-contacto'];
      $Whatsapp_uno = $datos__de__contacto['Whatsapp_uno'];
      $Whatsapp_dos = $datos__de__contacto['Whatsapp_dos'];
      $telefono_uno = $datos__de__contacto['telefono_uno'];
      $telefono_dos= $datos__de__contacto['telefono_dos'];
    
    }
    if(isset($_SESSION['datos-imagenes'])){
      $datos__imagenes = $_SESSION['datos-imagenes'];
      $ruta__uno = $datos__imagenes['ruta_1'];
      $ruta__dos = $datos__imagenes['ruta_2'];
      $ruta__tres = $datos__imagenes['ruta_3'];
      $ruta__cuatro = $datos__imagenes['ruta_4'];
      $ruta__cinco = $datos__imagenes['ruta_5'];
      $ruta__seis = $datos__imagenes['ruta_6'];
      $ruta__siete = $datos__imagenes['ruta_7'];
      $ruta__ocho = $datos__imagenes['ruta_8'];
      $ruta__nueve = $datos__imagenes['ruta_9'];
      $ruta__diez = $datos__imagenes['ruta_10'];
    
    }
    
    
    $consulta = "SELECT * FROM planes__de__publicaciones WHERE id_paquete = '$id__paquete'";
    $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
    if($ejecutar__la__consulta){
      $fila = mysqli_fetch_array($ejecutar__la__consulta); 
      $nombre__paquete = $fila['nombre_paquete'];
      $valor__paquete = $fila['valor_paquete'];

      ?>
      <div class="container contenedor__compra contenedor__pago container__proceso__de__pago">
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
<div class="container contenedor__detalles__de__pago ">
  <form id="formulario-proceso-de-pago">
  <!-- <input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $_SESSION['id_usuario'] ?>">
  <input type="hidden"  class="step__input"name="nombre-pagador" value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
  <input type="hidden"  class="step__input"name="nombre-paquete" value="<?php  echo $fila['nombre_paquete']  ?>">
  <input type="hidden"  class="step__input"name="valor-paquete" value="<?php  echo $fila['valor_paquete']  ?>"> -->
<div class="contenedor__btn__anunciar">
  <button type="submit" class="step__button btn__anunciar__gratis">Anunciar</button>

</div>
<br><br>
  </form>
  <br><br>
  <div id="alerta"></div>
</div>
</div>
<br>
<?php  } ?>
<?php  } ?>
</div>
<script>

  function proceso__de__pago__plan__gratis(){
let formulario__de__pago = document.getElementById('formulario-proceso-de-pago');
if(formulario__de__pago){
formulario__de__pago.addEventListener('submit',function(evento){
    evento.preventDefault();
    let form__data = new FormData(document.getElementById('formulario-proceso-de-pago'))
let url__servidor  = 'https://adhoc.com.co/'
    fetch('insertar-info-vehiculo',{
     method:'POST',
     body:JSON.stringify({
      // INFORMACION OBLIGATORIA DEL VEHICULO
      nombre__usuario: "<?php  if(isset($nombre_usuario)){echo $nombre_usuario;} ?>",
      id__usuario:"<?php if(isset($id_usuario)){ echo $id_usuario; }?>",
      nombre_plan:"<?php if(isset($nombre__plan)){ echo $nombre__plan; } ?>",
      avatar : "<?php if(isset($avatar)){ echo $avatar; }?>" ,
      marca : "<?php if(isset($marca)){echo $marca; }?>" ,
      modelo : "<?php if(isset($modelo)){echo $modelo; }?>" ,
      color: "<?php if(isset($color)){echo $color; }?>" ,
      fecha_fabricacion:"<?php if(isset($fecha_fabricacion)){echo $fecha_fabricacion; }?>",
      matricula: "<?php if(isset($matricula)){echo $matricula; } ?>" ,
      ciudad_matricula: "<?php if(isset($ciudad_matricula)){echo $ciudad_matricula; }?>" ,
      ciudad_venta: "<?php if(isset($ciudad_venta)){echo $ciudad_venta; }?>",
      propietario: "<?php if(isset($propietario)){echo $propietario; }?>" ,
      kilometros: "<?php if(isset($kilometros)){echo $kilometros; }?>",
      numero_puertas:"<?php if(isset($puertas)){echo $puertas; }?>" ,
      precio:"<?php if(isset($precio_vehiculo)){echo $precio_vehiculo; }?>",
      tipo_combustible: "<?php if(isset($combustible)){echo $combustible; }?>" ,
      caja: "<?php if(isset($caja)){echo $caja; }?>",
      direccion: "<?php if(isset($direccion)){echo $direccion;} ?>",
      cilindraje: "<?php if(isset($cilindraje)){echo $cilindraje;} ?>",
      descripcion: "<?php if(isset($descripcion)){echo $descripcion; }?>",

      // INFORMACION ADICIONAL DEL VEHICULO
      airbag_delantero: "<?php if(isset($airbag_delantero)){echo $airbag_delantero;} ?>",
      airbag_trasero: "<?php if(isset($airbag_trasero)){echo $airbag_trasero; }?>" ,
      bloqueo_central: "<?php if(isset($bloqueo_central)){echo $bloqueo_central;} ?>" ,
      alarma: "<?php if(isset($alarma)){echo $alarma ;}?>",
      control_acsenso: "<?php if(isset($control_acsenso)){echo $control_acsenso;} ?>" ,
      control_decsenso: "<?php if(isset($control_decsenso)){echo $control_decsenso;} ?>" ,
      sensores_delanteros: "<?php if(isset($sensores_delanteros)){echo $sensores_delanteros ;}?>" ,
      sensor_reversa: "<?php if(isset($sensor_reversa)){echo $sensor_reversa;} ?>",
      punto_ciego: "<?php if(isset($punto_ciego)){echo $punto_ciego;} ?>",
      camara_reversa: "<?php if(isset($camara_reversa)){echo $camara_reversa ;}?>",
      aire_acondicionado: "<?php if(isset($aire_acondicionado)){echo $aire_acondicionado;} ?>",
      android_auto: "<?php if(isset($android_auto)){echo $android_auto ;}?>",
      apple_car_play: "<?php if(isset($apple_car_play)){echo $apple_car_play;}?>",
      bluetooth: "<?php if(isset($bluetooth)){echo $bluetooth;}?>",
      espejos_electricos: "<?php if(isset($espejos_electricos)){echo $espejos_electricos;}?>",
      exploradoras:"<?php if(isset($exploradoras)){echo $exploradoras;}?>",
      vidrios_electricos:"<?php if(isset( $vidrios__electricos)){echo $vidrios__electricos;}?>",
      techo_corredizo: "<?php if(isset($techo_corredizo)){echo $techo_corredizo;}?>",
      techo_panoramico: "<?php if(isset($techo_panoramico)){echo $techo_panoramico;}?>",
      parqueo_automatico: "<?php if(isset($parqueo_automatico)){echo $parqueo_automatico;}?>",
      desempañador_trasero: "<?php if(isset($desempañador_trasero)){echo $desempañador_trasero;}?>",
      gps:"<?php if(isset($gps)){echo $gps;} ?>",
      rines_de_lujo:"<?php if(isset( $rines_de_lujo)){echo $rines_de_lujo; }?>",
      radio_cassette: "<?php if(isset($radio_cassette)){echo $radio_cassette;} ?>",
      radio_cd: "<?php if(isset( $radio_cd)){echo $radio_cd;} ?>",
      pantalla_video: "<?php if(isset($pantalla_video)){echo $pantalla_video;} ?>",

      //DATOS DEL CONTACTO DEL VENDEDOR
      Whatsapp_uno: "<?php if(isset($Whatsapp_uno)){echo $Whatsapp_uno;} ?>",
      Whatsapp_dos: "<?php if(isset($Whatsapp_dos)){echo $Whatsapp_dos;} ?>",
      telefono_uno: "<?php if(isset( $telefono_uno)){echo $telefono_uno;} ?>",
      telefono_dos: "<?php if(isset($telefono_dos)){echo $telefono_dos;} ?>",


      //RUTAS DE LAS IMAGENES
      ruta_1: "<?php if(isset($ruta__uno)){echo $ruta__uno;} ?>",
      ruta_2: "<?php if(isset($ruta__dos)){echo $ruta__dos;} ?>",
      ruta_3: "<?php if(isset($ruta__tres)){echo $ruta__tres;} ?>",
      ruta_4: "<?php if(isset($ruta__cuatro)){echo $ruta__cuatro;} ?>",
      ruta_5: "<?php if(isset($ruta__cinco)){echo $ruta__cinco;} ?>",
      ruta_6: "<?php if(isset($ruta__seis)){echo $ruta__seis;} ?>",
      ruta_7: "<?php if(isset($ruta__siete)){echo $ruta__siete;} ?>",
      ruta_8: "<?php if(isset($ruta__ocho)){echo $ruta__ocho;} ?>",
      ruta_9: "<?php if(isset($ruta__nueve)){echo $ruta__nueve;} ?>",
      ruta_10: "<?php if(isset($ruta__diez)){echo $ruta__diez;} ?>",
    }),
              headers: {
                'Content-Type': 'application/json'
              }

            }).then(respuesta => respuesta.json())
    .then(data =>{
        if(data ==='ok'){
          fetch('eliminar-variables-sesion', { method: 'POST' })
                .then(res => {
                  if (res === 'ok') {
                    console.log(res);
                  location.reload();
                  } 
                })
                .catch(error => {
                  alert('Error al enviar la petición: ', error);
                });
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
}
  
  proceso__de__pago__plan__gratis();
</script>
<?php include'layout/footer-home.php'  ?>
