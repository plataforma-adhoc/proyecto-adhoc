<?php  include'layout/nabvar.php'?>
<div class="contenedor__del__formulario">
    <form class="formulario__registro" id="formulario-registro-conductor">
    <div class="contenedor__formulario">
        <div class="grupo__inputs" id="grupo__nombre">
        <label for="nombre"class="formulario__label">Nombre</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Nombre" name="nombre" 
                    class="capturarDatos" autofocus autocomplete="">
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__primer__apellido">
        <label for="nombre"class="formulario__label">Primer apellido</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Primer apellido" name="primerApellido"  class="capturarDatos">

            </div>
        </div>
        <div class="grupo__inputs" id="grupo__segundo__apellido">
        <label for="nombre"class="formulario__label">Segundo apellido</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Segundo apellido" name="segundoApellido"  class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
        <label for="nombre"class="formulario__label">E-mail</label>
            <div class="formulario__grupo_-input">
                <input type="email" placeholder="E-mail" name="email"  class="capturarDatos">
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
        <label for="nombre"class="formulario__label">Documento</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Documento" name="documento"  class="capturarDatos">

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__telefono">
        <label for="nombre"class="formulario__label">Telefono</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Numero telefono" name="telefono" 
                    class="capturarDatos">
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__licencia">
        <label for="nombre"class="formulario__label">Licencia</label>

            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Numero licencia" name="licencia" 
                    class="capturarDatos">
            </div>
        </div>
        <div class="grupo__inputs" id="grupo__categoria">
        <label for="nombre"class="formulario__label">Categoria</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Categoria licencia" name="categoria" 
                    class="capturarDatos">
            </div>
        </div>
        <div class="grupo__inputs block" id="grupo__contrasena">
        <label for="nombre"class="formulario__label">Contraseña</label>
            <div class="formulario__grupo_-input">
                <input type="password" placeholder="Crea una contraseña" name="contrasena" id="contrasena"
                    class="capturarDatos">

                    <label class="content-input">
	         <input type="checkbox" name="Vehiculo" onclick="mostrar()" >Quiero ver mi contraseña
	        <i></i>
          </label>

            </div>
        </div>
        
        <div class="block">
            <input type="submit" value="CREAR MI CUENTA" class="boton__registro" name="enviar">
        </div>

        <p class="terminos block">Al registrarte aceptas nuestros <a class="enlace__terminos" href="terminos-y-condiciones-de-uso.php">Terminos y
                condiciones</a> y
            <a class="enlace__terminos" href="politicas-de-privacidad">politicas de privacidad</a> </p>
        <div class="contenedor__enlace__sesion block">       
            <a href="login-conductor" class="enlace___login">Ya tienes una cuenta <strong>Inicia sesion</strong></a>
        </div>
    </div>
</form>
</div>
<br><br>
<script>
 
    function mostrar(){
    
        
        let tipo = document.getElementById('contrasena')
        if(tipo.type == 'password'){
           tipo.type = 'text';
        }else{
            tipo.type = 'password'; 
        }
}

</script>
<?php  include'layout/footer.php' ?>