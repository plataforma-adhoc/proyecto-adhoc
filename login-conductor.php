<?php include'layout/nabvar.php'?>
<h2 class="subtitulo__formularios login">Incia sesión con tu cuenta</h2>
<div class="contenedor__del__formulario">
<form class="formulario__registro" id="formulario-login-conductor">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block" id="grupo__email">
        <label for="email"class="formulario__label">E-mail</label>
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="email" placeholder="Tu E-mail" name="email" 
                    class="capturarDatos" autofocus autocomplete="">
                    <i class="formulario__validacion-estado icono__email__login fas fa-times-circle"></i>
            </div>
            <p class="formulario__input-error">El emil solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

        <div class="grupo__inputs block" >
            <div class="contenedor__inputs">
                <input type="password" placeholder="Tu contraseña" name="contrasena"  class="capturarDatos" id="contrasena">
                <label class="content-input">
	         <input type="checkbox" name="Vehiculo" onclick="mostrar()" >Quiero ver mi contraseña
	        <i></i>
          </label>
            </div>
        </div>
       
    
        <div class="block">
            <input type="submit" value="INGRESAR" class="boton__registro" name="enviar">
        </div>
        <div class="contenedor__enlace__sesion block">
            <div><a href="conductor.php" class="enlace___login">Registrarme </a></div>
            <div> <a href="password-conductor.php" class="enlace___login">Olvide mi contraseña </a></div>
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
<?php include'layout/footer.php'?>