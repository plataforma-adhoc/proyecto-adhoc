<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 
$id__usuario = isset($_GET['idu']) ? $_GET['idu']:'';
$id__publicacion = isset($_GET['idp']) ? $_GET['idp']:'';
if($id__usuario && $id__publicacion){
      $seleccionarDatosInformacionDelVehiculo = "SELECT * FROM informacion__de__la__moto__en__venta WHERE idPublicacionMoto ='$id__publicacion' AND idUsuario ='$id__usuario'";
      $ejecutarConsulta = mysqli_query($conexion__db__accent,$seleccionarDatosInformacionDelVehiculo);
     if($ejecutarConsulta){ 
        $filaResultado = mysqli_fetch_array($ejecutarConsulta);?>
     <div class="container contenedor__edit__info__vehiculo">
       <h1 class="titulo__edit__info__vehiculo">Edita la información de tu moto</h1>
       <br>
       <h2 class="subtitulo__info__vehiculo">Información basica de la moto</h2>
        <form  id="actualizar-info-moto">
          <div class="contenido__info__vehiculo">
        <input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $filaResultado['idUsuario']  ?>">
        <input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
       <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingInput" value="<?php echo $filaResultado['marca'] ?>" name="marca">
        <label for="floatingInput">Marca </label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['modelo'] ?>"name="modelo">
        <label for="floatingPassword">Modelo </label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword"value="<?php echo $filaResultado['color'] ?>" name="color">
        <label for="floatingPassword">Color </label>
        </div>
        <div class="form-floating form__floating" >
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['fechaFabricacion'] ?>"name="fechFabricacion">
        <label for="floatingPassword">Fecha de fabricación</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['matricula'] ?>" name="matricula">
        <label for="floatingPassword">Matricula </label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword"value="<?php echo $filaResultado['ciudadRegistroMatricula'] ?>" name="cuidadRegistroMatricula">
        <label for="floatingPassword">Cuidad de la matricula</label>
        </div>
        <div class="form-floating form__floating">
        <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['ciudadDeVenta'] ?>" name="ciudadVenta">
        <label for="floatingPassword">Cuidad de venta </label>
        </div>
        <div class="form-floating  form__floating">
     <select class="form-select step__input" id="floatingSelect" aria-label="Floating label select example" name="propietario">
    <option selected><?php echo $filaResultado['propietario'] ?></option>
    <option value="Si">Si</option>
    <option value="no">No</option>  
  </select>
  <label for="floatingSelect"> propietario</label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['kilometros'] ?>" name="kilometros">
 <label for="floatingPassword">Kilometros </label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['precio'] ?>" name="precio">
 <label for="floatingPassword">Precio </label>
</div>
<div class="form-floating form__floating">
 <select class="form-select form-select-lg step__input__moto" aria-label=".form-select-lg example"name="tipo" id="tipo">
   <option selected><?php echo $filaResultado['tipo'] ?></option>
   <option value="Deportiva">Deportiva</option>
    <option value="Scooter">Scooter</option>
     <option value="Crucero">Crucero</option>
    <option value="Enduro">Enduro</option>
    <option value="Naked">Naked</option>
    <option value="SuperMoto">Super Moto</option>
    <option value="DobleProposito">Doble proposito</option>
   <option value="Urbana">Urbana</option>
     <option value="TursimoDeportivo">Turismo deportivo</option>
     <option value="Chopper">Chopper</option>
     <option value="StreetTracker">Street tracker</option>
    </select>
    <label for="floatingPassword">Tipo de moto </label>
 </div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultado['cilindraje'] ?>" name="cilindraje">
 <label for="floatingPassword">Cilindraje </label>
</div>
<div class="form-floating form__floating__edit">
    <textarea rows="4" cols="80" class="step__input text__area__edit block"  name="descripcion" id="floatingTextarea2"><?php echo $filaResultado['descripcion'] ?></textarea>
</div> 
</div>
<button  class="btn btn-success enviar" type="submit">Guardar</button>
</form>
<h2 class="subtitulo__info__vehiculo">Información de contacto</h2>
<form  id="actualizar-contacto-moto">
  <div class="contenido__info__vehiculo">
<input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
<input type="hidden"  class="step__input"name="id-publicacion" value="<?php  echo $id__publicacion ?>">
<?php   
$seleccionarDatosContacto = "SELECT * FROM contacto__vendedor__moto WHERE id_contacto ='$id__publicacion' AND id_usuario ='$id__usuario'";
$ejecutarConsultaContacto = mysqli_query($conexion__db__accent,$seleccionarDatosContacto);
if($ejecutarConsultaContacto ){ 
    $filaResultadoContacto = mysqli_fetch_array($ejecutarConsultaContacto); ?>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultadoContacto['email'] ?>" name="email">
 <label for="floatingPassword">Email</label>
</div>
<div class="form-floating form__floating">
  <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultadoContacto['telefono'] ?>" name="telefono">
  <label for="floatingPassword">Telefono </label>
</div>
<div class="form-floating form__floating">
 <input type="text" class="form-control step__input" id="floatingPassword" value="<?php echo $filaResultadoContacto['whatsapp'] ?>" name="whatsapp">
 <label for="floatingPassword">whatsapp </label>
</div>
</div>
<button type="submit" class="btn btn-success enviar">Guardar</button>
</form>
</div>
<?php } ?>
<?php } ?>
<?php } ?>   

<?php include'layout/footer-home.php';?>