<?php  include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 

$id__conductor = isset($_GET['idc']) ?  $_GET['idc']: '';
$id__usuario = isset($_GET['idu']) ?  $_GET['idu']: '';

 $consulta__datos__conductor = "SELECT * FROM conductores WHERE id_conductor = '$id__conductor'";
$ejecutar__consulta__datos__conductor = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
$fila__datos__conductor = mysqli_fetch_array($ejecutar__consulta__datos__conductor);  


$consulta__datos__usuario = "SELECT * FROM usuarios WHERE id_usuario = '$id__usuario'";
$ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
$fila__datos__usuario = mysqli_fetch_array($ejecutar__consulta__datos__usuario);  
?>

<div class="container contenedor__compra__completada">
    <h2 class="titulo__finalizar__compra">Finalizando la compra</h2>
    <p class="parrafo__finalizar__compra"> <span class="span__finalizar__compra">Ya casi terminamos la compra</span> estamos a un paso de finalizar, solo completa los siguientes campos y acabaremos de completar tu solicitud </p>
   <br><br><br>
    <form  class="formulario__completar__compra" id="formulario-fin-de-compra">
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
                <label for="" class="label__finalizar__compra">A que direccion llego ? </label>
                <input type="text"  name="direccion" id=""
                    class="capturarDatos" autofocus autocomplete="">

                </div>
            </div>
            <input type="hidden" name="idConductor" class="capturarDatos" value="<?php   echo $id__conductor ?>">
            <input type="hidden" name="idUsuario"  class="capturarDatos"value="<?php   echo $id__usuario ?>">
            <input type="hidden" name="nombre"  class="capturarDatos"value="<?php  echo $fila__datos__conductor['nombre_conductor']  ?>">
            <input type="hidden" name="primerApellido"  class="capturarDatos"value="<?php  echo $fila__datos__conductor['primer_apellido']  ?>">
            <input type="hidden" name="segundoApellido"  class="capturarDatos"value="<?php echo $fila__datos__conductor['segundo_apellido']  ?>">
            <input type="hidden" name="documento"  class="capturarDatos"value="<?php echo $fila__datos__conductor['numero_documento']   ?>">
            <input type="hidden" name="telefono"  class="capturarDatos"value="<?php echo $fila__datos__conductor['numero_telefono']  ?>">
            <input type="hidden" name="avatar"  class="capturarDatos"value="<?php echo $fila__datos__conductor['avatar']  ?>">

            <input type="hidden" name="nombreUsuario"  class="capturarDatos"value="<?php  echo $fila__datos__usuario['nombre_usuario']  ?>">
            <input type="hidden" name="primerApellidoUsuario"  class="capturarDatos"value="<?php  echo $fila__datos__usuario['primer_apellido']  ?>">
            <input type="hidden" name="segundoApellidoUsuario"  class="capturarDatos"value="<?php echo $fila__datos__usuario['segundo_apellido']  ?>">
            <input type="hidden" name="documentoUsuario"  class="capturarDatos"value="<?php echo $fila__datos__usuario['numero_documento']   ?>">
            <input type="hidden" name="telefonoUsuario"  class="capturarDatos"value="<?php echo $fila__datos__usuario['numero_telefono']  ?>">
            <input type="hidden" name="avatarUsuario"  class="capturarDatos"value="<?php echo $fila__datos__usuario['avatar']  ?>">
            
            <div class="grupo__inputs" id="grupo__email">
                <label for="" class="label__finalizar__compra">A que horas te recogemos ? </label>
               
                <div class="contenedor__inputs">
                    <input type="time" name="hora" id="" class="capturarDatos">
                </div>
            </div>
            <div class="grupo__inputs block" id="grupo__email">
                <label for="" class="label__finalizar__compra">Que dia te recogemos ? </label>
               
                <div class="contenedor__inputs">
                    <input type="date" name="dia" id="" class="capturarDatos">
                </div>
            </div> 
   
           
        <div class="block">
            <input type="submit" value="FINZALIZAR PROCESO" class="boton__registro" name="enviar">
        </div>
        <p class="block parrafo__hora"><i class="fas fa-stopwatch-20"></i> Escoge una hora para que a tu  conductor elegido le sea mas facil llegar a recogerte </p>
    </form>

</div>

<?php  include'layout/footer-home.php' ?>