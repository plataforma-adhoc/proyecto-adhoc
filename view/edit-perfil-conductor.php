<?php include'layout/nav-home-conductor.php';
include'conexion/conexion-db-accent.php';

$consulta__datos__conductor = "SELECT *  FROM conductores   WHERE email = '{$_SESSION['id_conductor']}'";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
  $datos__resultado = mysqli_fetch_array($resultado__consulta); 

 ?>

<form class="formulario editarPerfil"  action="insert-edit-perfil-conductor" method="POST" enctype="multipart/form-data">
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
    <div class="contenedor__formulario">
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

        
        <hr class="linea__editar__perfil">  
        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Facebook</label>
                <input type="text" name="facebook"
                    class="capturarDatos"value="<?php  echo $datos__resultado['facebook'] ?> ">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Instagram</label>
                <input type="text"  
                    class="capturarDatos"value="<?php  echo $datos__resultado['instagram'] ?> " name="instagram">

            </div>
        </div>

        <div class="grupo__inputs block" id="grupo__password">
            <div class="contenedor__inputs">
            <label for="" class="label">Twiiter</label>
                <input type="text"   
                    class="capturarDatos" value="<?php  echo $datos__resultado['twitter'] ?> "  name="twitter">

            </div>
        </div>
        <p class="block">
        <label for="" class="label">Acerca de mi</label>
            <textarea name="descripcion" rows="3" class="text__area__mensaje" placeholder="Una breve descrpicion de mi perfil"><?php  echo $datos__resultado['quien_soy'] ?></textarea>
        </p>
        <div class="block">
            <input type="submit" value="ACTUALIZAR  MI CUENTA" class="boton__registro" name="enviar">
        </div>
    </div>
    </div>
</form>
<br><br>
<?php  include'layout/footer-home.php';?>
