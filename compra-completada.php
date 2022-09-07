<?php  include'layout/nav-home-usuario.php';

$id__conductor = isset($_GET['idc']) ?  $_GET['idc']: '';
$id__usuario = isset($_GET['idu']) ?  $_GET['idu']: '';


?>

<div class="container contenedor__compra__completada">
    <h2 class="titulo__finalizar__compra">Finalizando la compra</h2>
    <p class="parrafo__finalizar__compra"> <span class="span__finalizar__compra">Ya casi terminamos la compra</span> estamos a un paso de finalizar, solo completa los siguientes campos y acabaremos de completar tu solicitud </p>
   <br><br><br>
    <form  class="formulario__completar__compra" id="formulario-fin-de-compra">
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
                <label for="" class="label__finalizar__compra">A que direccion te recogemos ? </label>
                <input type="text"  name="direccion" id=""
                    class="capturarDatos" autofocus autocomplete="">

                </div>
            </div>
            <input type="hidden" name="idConductor" class="capturarDatos" value="<?php   echo $id__conductor ?>">
            <input type="hidden" name="idUsuario"  class="capturarDatos"value="<?php   echo $id__usuario ?>">
            
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