<?php 
$titulo ="AdHoc | Recuperar tu contraseña ";
include'layout/nabvar.php'?>
<div class="contenedor__del__formulario">
<form class="formulario__registro" id="formulario-contraseña">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="email" placeholder="Tu E-mail" name="email" id="nombreUsuario"
                    class="capturarDatos" autofocus autocomplete="">

            </div>
        </div>
    
        <div class="block">
            <input type="submit" value="RECUPERAR MI CONTRASEÑA" class="boton__registro" name="enviar">
        </div>
    </div>
</form>
</div>
<br><br><br><br>
<?php include'layout/footer.php'?>