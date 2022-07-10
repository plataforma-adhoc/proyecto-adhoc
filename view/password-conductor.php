<?php include'layout/nabvar.php'?>
<form class="formulario__registro" id="formulario-contrasena">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="email" placeholder="Tu E-mail" name="email" id="nombreUsuario"
                    class="capturarDatos" autofocus autocomplete="">

            </div>
        </div>
    
        <div class="block">
            <input type="submit" value="INGRESAR" class="boton__registro" name="enviar">
        </div>
    </div>
</form>
<?php include'layout/footer.php'?>