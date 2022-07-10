<?php include'layout/nav-home-conductor.php';
include'conexion/conexion-db-accent.php';

$consulta__datos = "SELECT * FROM  conductores WHERE email = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos);
if(mysqli_num_rows($ejecutar__consulta) > 0 ){
  $fila__datos = mysqli_fetch_array($ejecutar__consulta);
}



 ?>

<form action="" class="formulario editarPerfil" enctype="multipart/form-data">
    <br><br>
    <div class="avatar">
        <img src="<?php echo $fila__datos['avatar'] ?>" class="imagen__avatar">
        <br>
        <br>
        <div class="cambiar__avatar" id="nuevoAvatar">
            <input type="file" id="nuevaImagen" name="avatar" class="inputFoto">
            <!-- Subir imagen -->
            <i class="fas fa-camera"></i>
        </div>
    </div>
    <p class="parrafo__edit__perfil">incluya una foto</p>
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="text" placeholder="Nombre y apellidos" name="nombre" 
                    class="capturarDatos" autofocus autocomplete="" value="<?php  echo $fila__datos['nombre_conductor'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="text"  name="primerApellido"  class="capturarDatos"value="<?php  echo $fila__datos['primer_apellido'] ?>" >
            </div>
        </div>

            <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="text"  name="segundoApellido" class="capturarDatos"value="<?php  echo $fila__datos['segundo_apellido'] ?>">
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__telefono">
            <div class="contenedor__inputs">
                <input type="email" placeholder="Telefono" name="email"  class="capturarDatos" value="<?php  echo $fila__datos['email'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
            <div class="contenedor__inputs">
                <input type="text"  name="documento"  class="capturarDatos"value="<?php  echo $fila__datos['numero_documento'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="text"  name="telefono" 
                    class="capturarDatos" value="<?php  echo $fila__datos['numero_telefono'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="text"  name="licencia" 
                    class="capturarDatos" value="<?php  echo $fila__datos['numero_licencia'] ?>">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="text"  name="categoria" 
                    class="capturarDatos"value="<?php  echo $fila__datos['categoria_licencia'] ?>">

            </div>
        </div>
        
        <hr class="linea__editar__perfil">
        <p class="block">
            <label for="" class="textos__label">Sobre mi</label>
            <textarea name="message" rows="3" class="text__area__mensaje" placeholder="Una breve descrpicion de mi perfil"></textarea>
        </p>
        <div class="block">
            <input type="submit" value="ACTUALIZAR  MI CUENTA" class="boton__registro" name="enviar">
        </div>
    </div>
    </div>
</form>
<br><br>
<?php  include'layout/footer-home.php' ?>