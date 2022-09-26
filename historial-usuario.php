<?php  include'layout/nav-home-usuario.php';
$id__usuario = isset($_GET['idu']) ? $_GET['idu'] : '';

if($id__usuario){

 $consulta__datos__servicio = "SELECT *  FROM detalles__de__la__compra WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$ejecutar__consulta__datos__servicio = mysqli_query($conexion__db__accent,$consulta__datos__servicio);


$consulta__datos__conductor= "SELECT *  FROM conductores";
$ejecutar__consulta__datos__conductor = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
$resultado__datos__conductor = mysqli_fetch_array($ejecutar__consulta__datos__conductor); ?>


<button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="container contenedor__datos__historial">  
    <p class="titulo__dashboard">Mi historial</p>
<p class="parrafo__historial">En tu historial puedes revisar a detalles tu solicitudes, en esta seccion veras la informacion necesaria de tus servicios de conductor elegido</p>
    <?php  if(mysqli_num_rows($ejecutar__consulta__datos__servicio) > 0) {
    while($resultado__servicios = mysqli_fetch_array($ejecutar__consulta__datos__servicio)){
     
    
    ?>

<div class="contenido__historial"data-aos="zoom-in">
<div class="info__perfil datos__de__historial">
        <img src="upload/<?php  echo $resultado__datos__conductor['avatar'] ?>" alt="" class="foto__de__perfil foto__historial">
        
    </div> 
    <div class="info__perfil datos__de__historial">
        <div class="datos__del__perfil__historial">
        <br><br>
            <p class="texto">Datos del conductor</p>
            <div>
                <p class="datos__basicos"><strong> Nombre : </strong><?php  echo $resultado__datos__conductor['nombre_conductor'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido : </strong> <?php  echo $resultado__datos__conductor['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido : </strong> <?php  echo $resultado__datos__conductor['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Email :</strong>  <?php  echo $resultado__datos__conductor['email'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento : </strong> <?php  echo $resultado__datos__conductor['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono :</strong>  <?php  echo $resultado__datos__conductor['numero_telefono'] ?></p>
            </div>
            <a href="eliminar-historial-conductor.php?id=<?php echo $resultado__servicios['id'] ?>" class="enlace__eliminar__historial">Eliminar <i class="fas fa-trash-alt"></i></a>
          <br><br>
            <p class="parrafo__info"><i class="fas fa-info-circle"></i> si eliminas este historial no sera posible recuperarlo</p>
        </div>

</div>
<div class="info__perfil datos__de__historial">
    <div class="datos__del__perfil__historial">
        <br><br>
     <p class="texto historial">Datos del servicio</p>
         <div>
             <p class="datos__basicos"><strong>Id servicio </strong> : <?php  echo $resultado__servicios['id'] ?></p>
         </div>
         <div>
             <p class="datos__basicos"><strong>Nombre servicio : <br><br></strong> <?php  echo $resultado__servicios['nombre_servicio'] ?></p>
         </div>
         <div>
             <p class="datos__basicos"><strong>Valor servicio : </strong> <?php  echo $resultado__servicios['precio_compra'] ?></p>
         </div>
         <div>
             <p class="datos__basicos"><strong>Cantidad servicio : </strong> <?php  echo $resultado__servicios['cantidad_compra'] ?></p>
         </div>
         <p class="texto">Datos adicionales</p>
             <p class="datos__basicos"><strong></strong><?php echo $resultado__servicios['descripcion'] ?></p>
          <button id="myBtn" class="btn__open__modal__calificacion">Dejar un comentario</button>
<br><br>
     </div>
</div>
</div>

<?php  } ?>
<?php  } ?>
<?php  } ?>

</div>

<br><br>
<br><br>


<div class="modal__recorrido" id="modal-recorrido">
  <div class="contendido__modal__recorrido">
  <span class="cerrar__modal__calificacion" id="cerrar-modal-calificacion"><i class="far fa-times-circle"></i></span>
    <form  class="formulario__calificacion" id="form-comentario">
  <h4 class="subtitulo__estado__recorrido">Felicidades</h4>
      <h4 class="subtitulo__estado__recorrido">completaste un nuevo recorrido</h4>
      <p class="parrafo__recorrido">Dejanos saber tu opinion sobre el conductor que elegiste</p>
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="text"  name="nombre" value="<?php echo $datos__resultado['nombre_usuario'] ?>"
                    class="capturarDatos" autofocus autocomplete="" readonly>
            </div>
        </div>
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
               <textarea name="areaMensaje" id="" cols="30" rows="10" class="area__mensaje" placeholder="Aqui tu mensaje"></textarea>
            </div>
        </div>
    </div>
    <input type="hidden" value="<?php echo $datos__resultado['id_usuario'] ?>" name="idUsuario">
    <input type="hidden" value="<?php echo $resultado__datos__conductor['id_conductor'] ?>" name="idConductor">
    <button class="btn__calificaciones">Publicar ahora</button>
</form>
</div>

</div>

<?php  include'layout/footer-home.php'  ?>