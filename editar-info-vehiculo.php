<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
$id__publicacion = isset($_GET['idp']) ? $_GET['idp']:'';
if($id__usuario && $id__publicacion){
      $seleccionar__datos__informacion__del__vehiculo = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario'";
      $ejecutar__consulta = mysqli_query($conexion__db__accent,$seleccionar__datos__informacion__del__vehiculo);
     if($ejecutar__consulta){ 
        $fila__resultado = mysqli_fetch_array($ejecutar__consulta);?>
     <div class="container contenedor__edit__info__vehiculo">
       <h1 class="titulo__edit__info__vehiculo">Edita la información de tu vehiculo</h1>
       <br><br>
       <h2 class="subtitulo__info__vehiculo">Información basica del vehiculo</h2>
        <form  id="form-actualizar-info-vehiculo">
          <div class="contenido__info__vehiculo">
        <input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
        <input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">

       <div class="form-floating form__floating mb-3">
        <input type="text" class="form-control step__input" id="floatingInput" value="<?php echo $fila__resultado['marca_del_vehiculo'] ?>" name="marca">
        <label for="floatingInput">Marca del vehiculo</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['modelo_vehiculo'] ?>"name="modelo">
        <label for="floatingPassword">Modelo del vehiculo</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword"value="<?php echo $fila__resultado['color_vehiculo'] ?>" name="color">
        <label for="floatingPassword">Color del vehiculo</label>
        </div>
        <div class="form-floating form__floating" >
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['anio_fabricacion'] ?>"name="fechFabricacion">
        <label for="floatingPassword">Fecha de fabricación</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['matricula_del_vehiculo'] ?>" name="matricula">
        <label for="floatingPassword">Matricula del vehiculo</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword"value="<?php echo $fila__resultado['ciudad_registro_matricula'] ?>" name="cuidad-matricula">
        <label for="floatingPassword">Cuidad de la matricula</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['ciudad_de_venta'] ?>" name="ciudad-venta">
        <label for="floatingPassword">Cuidad de venta </label>
        </div>
        <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="unico-propietario">
    <option selected><?php echo $fila__resultado['unico_propietario'] ?></option>
    <option value="Si">Si</option>
    <option value="no">No</option>
   
  </select>
  <label for="floatingSelect">Unico propietario</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['kilometros_del_vehiculo'] ?>" name="kilometros-vehiculo">
 <label for="floatingPassword">Kilometros del vehiculo</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['precio_del_vehiculo'] ?>" name="precio-vehiculo">
 <label for="floatingPassword">Precio del vehiculo</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['numero_puertas'] ?>" name="numero-puertas">
 <label for="floatingPassword">Numero de puertas</label>
</div>
 
<div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="tipo-combustible">
    <option selected><?php echo $fila__resultado['tipo_combustible'] ?></option>
    <option value="Gasolina">Gasolina</option>
    <option value="Eletcrico">Electrico</option>
   <option value="Gas natural">Gas natural</option>
    <option value="Diesel">Diesel</option>
     <option value="Hibrido">Hibrido</option>>
  </select>
  <label for="floatingSelect">Tipo de combustible</label>
</div>
<div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="tipo-caja">
    <option selected><?php echo $fila__resultado['tipo_de_caja'] ?></option>
   <option value="Automatica"> Automatica</option>
   <option value="Mecanica"> Mecanica</option>
    <option value="Secuencial">Secuencial</option>
  </select>
  <label for="floatingSelect">Tipo de caja</label>
</div>
<div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="tipo-direccion">
    <option selected><?php echo $fila__resultado['tipo_de_direccion'] ?></option>
    <option value="Asistida">Asistida</option>
    <option value="Asistida Electrica">Asistida Electrica</option>
     <option value="Asistida Hidraulica"> Asistida Hidraulica</option>
       <option value="Electro Hidraulica">Electro Hidraulica</option>
       <option value="Mecanica">Mecanica</option>
  </select>
  <label for="floatingSelect">Tipo de dirección </label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado['cilindraje_vehiculo'] ?>" name="cilindraje-vehiculo">
 <label for="floatingPassword">Cilindraje del vehiculo</label>
</div>
<div class="form-floating form__floating__edit">
    <textarea rows="4" cols="80" class="step__input text__area__edit block"  name="descripcion" id="floatingTextarea2"><?php echo $fila__resultado['descripcion_vehiculo'] ?></textarea>
</div> 
</div>
<button  class="btn btn-success enviar" type="submit">Guardar</button>
</form>
<?php  $seleccionar__datos__diseño__y__estilo  = "SELECT * FROM disenio__y__estilo__vehiculo WHERE id_estilos = '$id__publicacion' AND id_usuario = '$id__usuario'";
      $ejecutar__consulta__diseño = mysqli_query($conexion__db__accent,$seleccionar__datos__diseño__y__estilo);
      if($ejecutar__consulta__diseño){
      $fila__resultado__diseño = mysqli_fetch_array($ejecutar__consulta__diseño);?> 
      <br><br><br> 
<h2 class="subtitulo__info__vehiculo">Diseño y estilo</h2>
<form class="contenido__info__vehiculo" id="form-diseño-y-estilo">
<input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
        <input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
<div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="rines-de-lujo">
        <option selected><?php echo $fila__resultado__diseño['rines_de_lujo']?></option>
        <option value="Si">Si</option> 
        <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Rindes de lujo </label>    
     </div>
     <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="radio-cassette">
    <option selected><?php  echo $fila__resultado__diseño['radio_cassette']?></option>
    <option value="Si">Si</option>
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Radio Digital</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="radio-cd">
    <option selected><?php  echo $fila__resultado__diseño['radio_cd'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Radio CD</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="pantalla-video">
    <option selected><?php echo  $fila__resultado__diseño['pantalla_de_video'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Pantalla de video</label>    
 </div>
     <button type="submit" class="btn btn-success enviar">Guardar</button>
</form>
<br><br><br>
<h2 class="subtitulo__info__vehiculo">Equipamiento del vehiculo</h2>
<form  id="form-actualizar-equipamiento">
  <div class="contenido__info__vehiculo">
<input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
<input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
<?php  $seleccionar__datos__equipamiento = "SELECT * FROM equipamiento__del__vehiculo WHERE id_equipamiento = '$id__publicacion' AND id_usuario = '$id__usuario'";
      $ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$seleccionar__datos__equipamiento);
      if($ejecutar__consulta__equipamiento){
      $fila__resultado__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);?> 
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="aire-acondicionado">
    <option selected><?php  echo $fila__resultado__equipamiento['aire_acondicionado'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 

  </select>
  <label for="floatingSelect">Aire acondicionado</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="android-auto">
    <option selected><?php echo  $fila__resultado__equipamiento['android_auto']?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Android auto</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example"name="apple-car-play">
    <option vselected><?php echo $fila__resultado__equipamiento['apple_car_play'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Apple car play</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="bluetooth">
    <option selected><?php echo  $fila__resultado__equipamiento['bluetooth'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Bluetooth</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="espejos-electrico">
    <option selected><?php  echo  $fila__resultado__equipamiento['espejos_electrico'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Espejos electricos</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="exploradoras">
    <option selected><?php echo  $fila__resultado__equipamiento['exploradoras'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Exploradoras</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="vidrios-electricos">
    <option selected><?php  echo $fila__resultado__equipamiento['vidrios_electricos'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Vidrios electricos</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="techo-corredizo">
    <option selected><?php  echo $fila__resultado__equipamiento['techo_corredizo'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Techo corredizo</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="techo-panoramico">
    <option selected><?php  echo $fila__resultado__equipamiento['techo_panoramico'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Techo panoramico</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="parqueo-automatico">
    <option selected><?php  echo $fila__resultado__equipamiento['parqueo_automatico'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Techo panoramico</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="desempaniador-trasero">
    <option selected><?php  echo $fila__resultado__equipamiento['desempaniador_trasero'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Desempañador trasero</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="gps">
    <option selected><?php echo  $fila__resultado__equipamiento['gps']?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Gps</label>    
 </div>

 </div>
 <button type="submit" class="btn btn-success enviar">Guardar</button>
</form>
<br><br>
<h2 class="subtitulo__info__vehiculo">Seguridad del vehiculo</h2>
<form id="form-actaulizar-seguridad">
  <div  class="contenido__info__vehiculo"  >
<input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
<input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
<?php  $seleccionar__datos__seguridad = "SELECT * FROM seguridad__del__vehiculo WHERE id_seguridad = '$id__publicacion' AND id_usuario = '$id__usuario'";
      $ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$seleccionar__datos__seguridad);
      if($ejecutar__consulta__seguridad){
      $fila__resultado__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);?> 
    <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="air-bag-delantero">
    <option selected><?php echo  $fila__resultado__seguridad['air_bag_delantero'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Air bag delantero</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="air-bag-trasero">
    <option selected><?php echo  $fila__resultado__seguridad['air_bag_trasero'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
    
  </select>
  <label for="floatingSelect">Air bag trasero</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example"name="bloqueo-central">
    <option selected><?php  echo $fila__resultado__seguridad['bloqueo_central'] ?></option>
    <option value="Si">Si</option>
    <option value="No">No</option> 

  </select>
  <label for="floatingSelect">Bloqueo central</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="alarma">
    <option selected><?php  echo $fila__resultado__seguridad['alarma']?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Alarma</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example"name="control-ascenso">
    <option selected><?php  echo  $fila__resultado__seguridad['control_de_ascenso']  ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Control de ascenso</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="control-descenso">
    <option selected><?php  echo  $fila__resultado__seguridad['control_de_descenso'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Control de descenso</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="sensor-dalentero">
    <option selected><?php  echo   $fila__resultado__seguridad['sensor_delantero']?></option>
    <option value="Si">Si</option>
    <option value="No">No</option> 
  </select>
  <label for="floatingSelect">Sensor  delantero</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="sensor-reversa">
    <option selected><?php  echo $fila__resultado__seguridad['sensor_reversa'] ?></option>
    <option value="Si">Si</option> 
    <option value="No">No</option> 

  </select>
  <label for="floatingSelect">Sensor reversa</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="sensor-punto-ciego">
    <option selected><?php  echo  $fila__resultado__seguridad['sensor_punto_ciego'] ?></option>
    <option value="Si">Si</option>
    <option value="No">No</option> 

  </select>
  <label for="floatingSelect">Sensor punto ciego</label>    
 </div>
 <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="camara-reversa">
    <option selected><?php echo    $fila__resultado__seguridad['camara_reversa'] ?></option>
    <option value="Si">Si</option>
    <option value="No">No</option> 

  </select>
  <label for="floatingSelect">Camara reversa</label>    
 </div>
 </div>
 <button type="submit" class="btn btn-success enviar">Guardar</button>
</form>
<h2 class="subtitulo__info__vehiculo">Información de contacto</h2>
<form  id="form-actaulizar-contactos">
  <div class="contenido__info__vehiculo">
<input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
<input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
<?php   
$seleccionar__datos__contacto= "SELECT * FROM contacto__vendedor WHERE id_contacto = '$id__publicacion' AND id_usuario = '$id__usuario'";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$seleccionar__datos__contacto);
if($ejecutar__consulta__contacto){ 
    $fila__resultado__contacto = mysqli_fetch_array($ejecutar__consulta__contacto); ?>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado__contacto['whatsapp_1'] ?>" name="whatsapp_1">
 <label for="floatingPassword">whatsapp 1</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado__contacto['whatsapp_2'] ?>" name="whatsapp_2">
 <label for="floatingPassword">whatsapp 2</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado__contacto['telefono_1'] ?>" name="telefono_1">
 <label for="floatingPassword">Telefono 1</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $fila__resultado__contacto['telefono_2'] ?>" name="telefono_2">
 <label for="floatingPassword">Telefono 2</label>
</div>
</div>
<button type="submit" class="btn btn-success enviar">Guardar</button>
</form>
</div>
<?php } ?>
<?php } ?>

   <?php } ?>
   <?php } ?>
   <?php } ?>
<?php }else{
    header('Location: dashboard-usuario');
    
  } ?>



<?php 
include'layout/footer-home.php';

?>