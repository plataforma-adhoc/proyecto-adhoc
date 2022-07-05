<?php include'layout/nav-home-conductor.php' ?>

<form action="" class="formulario editarPerfil" enctype="multipart/form-data">
    <br><br>
    <div class="avatar">
        <img src="./img/avatar__defecto.svg" class="imagen__avatar">
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
                <input type="text" placeholder="Nombre y apellidos" name="nombre" id="nombreUsuario"
                    class="capturarDatos" autofocus autocomplete="">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="email" placeholder="E-mail" name="email" id="emailUsuario" class="capturarDatos">


            </div>
        </div>
        <div class="grupo__inputs" id="grupo__telefono">
            <div class="contenedor__inputs">
                <input type="tel" placeholder="Telefono" name="telefono" id="telefonoUsuario" class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Documento" name="documento" id="documentoUsuario" class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una password" name="contrasena" id="contrasenaUsuario"
                    class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una password" name="contrasena" id="contrasenaUsuario"
                    class="capturarDatos">

            </div>
        </div>
        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una password" name="contrasena" id="contrasenaUsuario"
                    class="capturarDatos">

            </div>
        </div>
        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una password" name="contrasena" id="contrasenaUsuario"
                    class="capturarDatos">

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