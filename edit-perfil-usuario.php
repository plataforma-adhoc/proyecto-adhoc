<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';

$consulta__datos = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}'";
$resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos);
  $datos__resultado = mysqli_fetch_array($resultado__consulta); ?>
<form action="insert-edit-perfil-usuario" class="formulario editarPerfil" enctype="multipart/form-data" method="POST">
    <br><br>
    <div class="avatar">
        <img src="upload/<?php  echo $datos__resultado['avatar'] ?>" class="imagen__avatar">
        <br>
        <br>
        <div class="cambiar__avatar" id="nuevoAvatar">
            <div class="custom-input-file col-md-6 col-sm-6 col-xs-6">
                <input type="file" id="fichero-tarifas" class="input-file" name="avatar">
                Subir una foto...
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
            <label for="" class="label">Nombre</label>
                <input type="text"  name="nombre"value="<?php   echo $datos__resultado['nombre_usuario'] ?>"
                    class="capturarDatos" autofocus autocomplete="">
            </div>
        </div>
        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
            <label for="" class="label">Primer apellido</label>
                <input type="text" name="primerApellido"  class="capturarDatos" value="<?php   echo $datos__resultado['primer_apellido'] ?>">
            </div>
        </div>
        <div class="grupo__inputs" id="grupo__telefono">
        <label for="" class="label">Segundo apellido</label>
            <div class="contenedor__inputs">
                <input type="text" name="segundoApellido"  class="capturarDatos"value="<?php   echo $datos__resultado['segundo_apellido'] ?>">

            </div>
        </div>
        <div class="grupo__inputs" id="grupo__documento">
        <label for="" class="label">E-mail</label>
            <div class="contenedor__inputs">
                <input type="email"  name="email"  class="capturarDatos"value="<?php   echo $datos__resultado['email'] ?>">

            </div>
        </div>     
        <input type="hidden"  name="id" value="<?php   echo $datos__resultado['id_usuario'] ?>">
        <div class="block">
            <input type="submit" value="ACTUALIZAR  MI CUENTA" class="boton__registro" name="enviar">
        </div>
    </div>
    </div>
</form>
<br><br>

<?php include'layout/footer-home.php'  ?>