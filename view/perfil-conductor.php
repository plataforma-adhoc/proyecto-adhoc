<?php  include'layout/nav-home-conductor.php';
include'conexion/conexion-db-accent.php';

$id__conductor = isset($_GET['id']) ?  $_GET['id']: '';
if($id__conductor ===""){
 header("Location: ./dashboard-conductor");
 exit;
}

$consulta__datos__usuario = "SELECT *  FROM usuarios    LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 }

$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}' LIMIT 1";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
if(mysqli_num_rows($resultado__consulta) > 0){
  $datos__resultado__conductor = mysqli_fetch_array($resultado__consulta); 


 }?>

<div class="container contenedor__datos__perfil">
    <div class="info__perfil">
        <img src="upload/<?php  echo $datos__resultado__conductor['avatar'] ?>" alt="" class="foto__de__perfil">
        <div>
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

        <a href="./edit-perfil-conductor?id=<?php echo $datos__resultado__conductor['id_conductor'] ?>" class="enlace__editar__perfil">Editar perfil <i
                class="fas fa-long-arrow-alt-right"></i></a>
    </div>
    <div class="info__perfil">
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos">Nombre : <strong><?php echo $datos__resultado__conductor['nombre_conductor'] ?></strong></p>
            </div>
            <div>
                <p class="datos__basicos">Primer apellido: <strong><?php echo $datos__resultado__conductor['primer_apellido'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Segundo apellido : <strong><?php echo $datos__resultado__conductor['segundo_apellido'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">E-mail : <strong><?php echo $datos__resultado__conductor['email'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Documento : <?php echo $datos__resultado__conductor['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos">Telefono : <strong><?php echo $datos__resultado__conductor['numero_telefono'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Numero licencia: <strong><?php echo $datos__resultado__conductor['numero_licencia'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Categoria : <strong><?php echo $datos__resultado__conductor['categoria_licencia'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Estado : <strong><?php echo $datos__resultado__conductor['status'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Entidad bancaria : <strong><?php echo $datos__resultado__conductor['entidad_bancaria'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos">Numero de cuenta : <strong><?php echo $datos__resultado__conductor['cuenta_de_pago'] ?></p></strong>
            </div>
            <div>
                <p class="datos__basicos quien__soy"> Sobre mi: <strong><?php echo $datos__resultado__conductor['quien_soy'] ?></p></strong>
            </div>
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
            <option value="bancopopular">Banco popular</option>
            <option value="bbva">BBVA</option>
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
</form>
     
</div>

<br><br><br><br>
<div class="container contenedor__opinion conductor">
    <p class="titulo__opinion">Centro de opiniones</p>

    <div class="opinion">
    <div class="opinion__1" id="comentario-1">
        <div class="item__opinion">
            <img src="upload/<?php  ?>" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion"><p><?php  ?></p></div>
        </div>
            <div class="parrafo__item__opinion">
                <p class="parrafo">hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh</p>
                <p class="fecha__publicacion">02-26-2022</p>
        </div>
        </div>
    
    </div>
    <div class="opinion">
    <div class="opinion__1" id="comentario-1">
        <div class="item__opinion">
            <img src="upload/<?php  ?>" alt="" class="avatar__opinion__1">
            <div class="nombre__item__opinion"><p><?php ?></p></div>
        </div>
            <div class="parrafo__item__opinion">
                <p class="parrafo">hdfjhsdjhfkshdfhskdfhkshfkfgjhgjfjfgjhffghfghfhfghfghfghfghfghfghfghfghfghfghfghfgjhgjhgjhgjhgjhgghgfghfghfghfghfhfghfghjhgggjhgjhgjhgjhgjhgjhgjh</p>
                <p class="fecha__publicacion">02-26-2022</p>
        </div>
        </div>
    
    </div>
    <div class="opinion__2" id="comentario-2">
    </div>
    <form action="" class="formulario__respuesta" id="formulario-comentario-conductor">
    <input type="text" placeholder="Escribe una posible respuesta" class="respuesta" name="respuesta" autocomplete="off"id="respuesta-comentario">
        <input type="hidden" value="<?php  echo $datos__resultado['id_usuario'] ?>" name="idUsuario">
        <input type="hidden" value="<?php  echo $datos__resultado__conductor['id_conductor'] ?>" name="idConductor">
        <button class="boton__respuesta"><i class="fas fa-paper-plane"></i></button>
    </form>
</div>
<br><br>

<?php  include'layout/footer-home.php' ?>