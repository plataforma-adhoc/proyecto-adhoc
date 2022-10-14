<?php include'layout/nav-home-conductor.php';
include'conexion-db-accent.php';


$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 ?>
    <!-- <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button> -->

<form class="formulario editarPerfil formulario__conductor"  action="insert-edit-perfil-conductor.php" method="POST" enctype="multipart/form-data">
    <br><br>
    <div class="avatar">
        <img src="upload/<?php echo $datos__resultado['avatar'] ?>" class="imagen__avatar">
        <br>
        <br>
<div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
<input type="file" id="fichero-tarifas" class="input-file" value="" name="avatar">
Subir una foto...
</div>
</div>
<br><br><br> 
    <div class="contenedor__formulario contenedor__formulario__conductor">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
                <label for="" class="label">Nombre</label>
                <input type="text"  name="nombre" 
                    class="capturarDatos" autofocus autocomplete="" value="<?php  echo $datos__resultado['nombre_conductor'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
            <label for="" class="label">Primer apellido</label>
                <input type="text"  name="primerApellido"  class="capturarDatos"value="<?php  echo $datos__resultado['primer_apellido'] ?>" >
            </div>
        </div>

            <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
            <label for="" class="label">Segundo apellido</label>
                <input type="text"  name="segundoApellido" class="capturarDatos"value="<?php  echo $datos__resultado['segundo_apellido'] ?>">
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__telefono">
            <div class="contenedor__inputs">
            <label for="" class="label">E-mail</label>
                <input type="email"  name="email"  class="capturarDatos" value="<?php  echo $datos__resultado['email'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
            <div class="contenedor__inputs">
            <label for="" class="label">Documento</label>
                <input type="text"  name="documento"  class="capturarDatos"value="<?php  echo $datos__resultado['numero_documento'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Telefono</label>
                <input type="text"  name="telefono" 
                    class="capturarDatos" value="<?php  echo $datos__resultado['numero_telefono'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Licencia</label>
                <input type="text"  name="licencia" 
                    class="capturarDatos" value="<?php  echo $datos__resultado['numero_licencia'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">categoria</label>
                <input type="text"  name="categoria" 
                    class="capturarDatos"value="<?php  echo $datos__resultado['categoria_licencia'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Localidad donde vives</label>
                <input type="text"  name="localidad" 
                    class="capturarDatos"  placeholder="Localidad"value="<?php  echo $datos__resultado['localidad']?>">

            </div>
        </div>
        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">En que te movilizas ?</label>
                <input type="text"  name="movilidad" 
                    class="capturarDatos"  placeholder=""value="<?php  echo $datos__resultado['movilidad']?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Facebook</label>
                <input type="text"  name="facebook" value="<?php   echo $datos__resultado['facebook'] ?>"
                    class="capturarDatos"  placeholder="Facebook">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Instagram</label>
                <input type="text" name="instagram"  value="<?php echo $datos__resultado['instagram']?>" 
                    class="capturarDatos"  placeholder="Instagram">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Twitter</label>
                <input type="text"  name="twitter" value="<?php  echo $datos__resultado['twitter']?>"   
                    class="capturarDatos" placeholder="Twitter">

            </div>
        </div>
        <input type="hidden"  name="id" value="<?php   echo $datos__resultado['id_conductor'] ?>">
        <p class="block">
        <label for="" class="label">Acerca de mi</label>
            <textarea name="descripcion" rows="3" class="text__area__mensaje" placeholder="Una breve descrpicion de mi perfil"><?php  echo $datos__resultado['quien_soy'] ?></textarea>
        </p>
        <div class="block">
            <input type="submit" value="ACTUALIZAR  MI CUENTA" class="boton__registro boton__perfil__conductor" name="enviar">
        </div>
    </div>
    </div>
</form>
<br><br>
<?php  include'layout/footer-home.php';?>
