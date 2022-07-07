<?php include'layout/nabvar.php' ?>

<form class="formulario__registro" id="formulario-registro-usuario">
    <div class="contenedor__formulario">
        <div class="grupo__inputs">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="text" placeholder="Nombre" name="nombre" 
                    class="capturarDatos" autofocus autocomplete="">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Primer apellido" name="primerApellido"  class="capturarDatos">


            </div>
        </div>
        <div class="grupo__inputs" id="grupo__telefono">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Segundo apellido" name="segundoApellido"  class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
            <div class="contenedor__inputs">
                <input type="email" placeholder="Email" name="email"  class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Documento" name="documento" 
                    class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Telefono" name="telefono" id=""
                    class="capturarDatos">

            </div>
        </div>
        <div class="grupo__inputs block" id="grupo__password">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una contraseña" name="contrasena" id="c"
                    class="capturarDatos">

            </div>
        </div>
        <div class="block">
            <input type="submit" value="CREAR MI CUENTA" class="boton__registro" name="enviar">
        </div>

        <p class="terminos block">Al registrarte aceptas nuestros <a class="enlace__terminos"
                href="./terminos-y-condiciones-de-uso">Terminos y
                condiciones</a> y
            <a class="enlace__terminos" href="./politicas-de-privacidad">politicas de privacidad</a> </p>
        <div class="contenedor_enlace_sesion">
            <a href="./login-usuario" class="enlace___login">Ya tienes una cuenta <strong>Inicia sesion</strong>
            </a>
        </div>
    </div>
</form>
<?php include'layout/footer.php' ?>