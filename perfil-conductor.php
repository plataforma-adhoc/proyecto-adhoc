
<?php  include'layout/nav-home-conductor.php'; 
include'conexion-db-accent.php';

$id__conductor = isset($_GET['id']) ?  $_GET['id']: '';
if($id__conductor ===""){
 header("Location: dashboard-conductor.php");
 exit;
} 

$consulta__datos__usuario = "SELECT *  FROM usuarios ";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 }

$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado__conductor = mysqli_fetch_array($resultado__consulta); 


 }?>
    <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>
<div class="container contenedor__datos__perfil">
    <div class="info__perfil">
        <img src="upload/<?php  echo $datos__resultado__conductor['avatar'] ?>" alt="" class="foto__de__perfil">
        <div class="redes__sociales">
        <?php  if($datos__resultado__conductor['facebook'] !=NULL ){ ?>
            <a href="<?php echo $datos__resultado__conductor['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
             <?php } ?>  
              
             <?php  if($datos__resultado__conductor['instagram'] !=NULL ){ ?>
                <a href="<?php echo $datos__resultado__conductor['instagram'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-instagram"></i></a>
             <?php } ?> 

             <?php  if($datos__resultado__conductor['twitter'] !=NULL ){ ?>
                <a href="<?php echo $datos__resultado__conductor['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
             <?php } ?>

        </div>

        <a href="edit-perfil-conductor.php?id=<?php echo $datos__resultado__conductor['id_conductor'] ?>" class="enlace__editar__perfil">Editar mi perfil <i
                class="fas fa-long-arrow-alt-right"></i></a>
    </div>
    <div class="info__perfil">
    <br><br><br>
        <p class="biografia__detallada">Biografia detallada</p> 
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos"><strong>Nombre :</strong>  <?php echo $datos__resultado__conductor['nombre_conductor'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido:</strong>  <?php echo $datos__resultado__conductor['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido :</strong>  <?php echo $datos__resultado__conductor['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>E-mail :</strong>  <?php echo $datos__resultado__conductor['email'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong> Documento :</strong> <?php echo $datos__resultado__conductor['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong> Telefono :</strong> <?php echo $datos__resultado__conductor['numero_telefono'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Numero licencia: </strong> <?php echo $datos__resultado__conductor['numero_licencia'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"> <strong>Categoria : </strong> <?php echo $datos__resultado__conductor['categoria_licencia'] ?></p>
            </div>

            <div>
                <p class="datos__basicos"><strong>Estado :</strong>  <?php echo $datos__resultado__conductor['status'] ?></p>
            </div>
            <?php    if($datos__resultado__conductor['entidad_bancaria'] !=NULL){   ?>
            <div>
                <p class="datos__basicos"> <strong> Numero de cuenta :</strong><?php echo $datos__resultado__conductor['entidad_bancaria'] ?></p>
            </div>
            <?php   } ?>
            <?php    if($datos__resultado__conductor['cuenta_de_pago'] !=NULL){   ?>
            <div>
                <p class="datos__basicos"> <strong>Numero de cuenta :</strong>  <?php echo $datos__resultado__conductor['cuenta_de_pago'] ?></p>
            </div>
            <?php   } ?>

           <?php    if($datos__resultado__conductor['quien_soy'] != NULL){   ?>
            <div>
                <p class="datos__basicos quien__soy"><strong>Quien soy : </strong><?php  echo $datos__resultado__conductor['quien_soy']  ?></p>
            </div>
       <?php   } ?>
            <div>
                <p class="datos__basicos fecha__registro">Miembro desde  : <?php echo  date("d-m-Y",strtotime($datos__resultado__conductor['fecha_de_registro'])) ?></p>
            </div>
        </div>
    </div>
</div>
<div class="container contenedor__formulario__datos__de_pago">
    <p class="titulo__opinion">Metodo de pago</p>
    <p class="parrafo__metodo__pago">Configura tu metodo de pago a continuacion</p>
    <form class="formulario__registro metodo__de__pago" id="formulario-metodo-pago">
    <div class="contenedor__formulario">
        
        <select name="opciones" id=""class="grupo__inputs seleccionar">
            <option value="Nequi">Nequi</option>
            <option value="daviplata">daviplata</option>
        </select>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Numero de cuenta" name="numeroCuenta"  class="capturarDatos">
            </div>
        </div>
        <input type="hidden" placeholder="Numero de cuenta" name="idConductor"  class="capturarDatos" value="<?php echo $datos__resultado__conductor['id_conductor'] ?>">
        <div class="block">
            <input type="submit" value="ENVIAR DATOS" class="boton__registro" name="enviar">
        </div>

    </div>
    <div class="item__info__pagos">
        <p><i class="fas fa-info-circle"></i> <strong>Nota : </strong> recuerda que los pagos se haran al finalizar la semana </p>
        </div>   
</form>
</div>

<br><br><br><br>
<div class="container contenedor__opinion conductor" id="opinion">
    <p class="titulo__opinion">Centro de opiniones</p>
    <p class="parrafo__info__opinion"><span><i class="fas fa-bullhorn"></i> ATENCION : </span> Esta prohibido hacer comentarios fuera de lugar,
    insultar alos demas, u otro tipo de agresion, esto es solo para hacer comentarios sobre el servicio prestado . 
     Si tienes dudas te invitamos a conocer nuestros <a href="./terminos-y-condiciones-de-uso" class="enlace__a__terminos">Terminos y condiciones</a>
</p>
<?php      
$consulta__comentarios = "SELECT * FROM comentarios__usuario WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
while($fila = mysqli_fetch_array($ejecutar__consulta)){ ?>
        <div class="opinion">
         <div class="opinion__1" >
             <div class="item__opinion">
                 <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__opinion__1">
                 <div class="nombre__item__opinion"><p><?php echo $datos__resultado['nombre_usuario'] ?></p></div>
             </div>
                 <div class="parrafo__item__opinion">
                     <p class="parrafo"><?php echo $fila['comentario'] ?></p>
                     <p class="fecha__publicacion"><?php echo $fila['fecha_comentario'] ?></p>
             </div>
             </div>
         
         </div>
       
         
         <?php } ?>
       <div id="comentario-conductor"></div>
    

    <form class="form-search" id="formulario-comentario-conductor">
        <?php   $consulta__datos__usuario = "SELECT id_usuario  FROM usuarios WHERE id_usuario = '{$datos__resultado['id_usuario']}'";
        $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
        $datos__resultado__id = mysqli_fetch_array($resultado__consulta); ?>

       

    <?php  if(mysqli_num_rows($ejecutar__consulta) < 0){ ?>
        <h2 class="titulo__opinion"><i class="fas fa-comment-dots"></i> Aun no hay comentarios</h2>
        <?php } ?>
        <input type="hidden" value="<?php  echo $datos__resultado__conductor['id_conductor'] ?>" name="idConductor">
        <input type="hidden" value="<?php echo  $datos__resultado__id['id_usuario'] ?>" name="idUsuario">
        <button class="boton__respuesta"><i class="fas fa-paper-plane"></i></button>
        <input type="text" placeholder="Escribe una respuesta"name="respuesta" autocomplete="off"id="respuesta-comentario">
  </form>
       
</div>
<br><br>

<?php  include'layout/footer-home.php' ?>