<?php  include'layout/nabvar.php' ?>
<form class="formulario__registro" method="post" action="/usuario-registro">
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
        <div class="block">
            <input type="submit" value="CREAR MI CUENTA" class="boton__registro" name="enviar">
        </div>

        <p class="terminos block">Al registrarte aceptas nuestros <a class="enlace__terminos" href="./terminos-y-condiciones-de-uso">Terminos y
                condiciones</a> y
            <a class="enlace__terminos" href="./politicas-de-privacidad">politicas de privacidad</a> </p>
        <div class="contenedor_enlace_sesion">
            <a href="./login-conductor" class="enlace___login">Ya tienes una cuenta </a>
        </div>
    </div>
</form>

<?php  include'layout/footer.php' ?>