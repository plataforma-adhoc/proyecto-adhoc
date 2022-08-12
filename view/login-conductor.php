<?php include'layout/nabvar.php'?>

<form class="formulario__registro" id="formulario-login-conductor">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="email" placeholder="Tu E-mail" name="email" 
                    class="capturarDatos" autofocus autocomplete="">

            </div>
        </div>

        <div class="grupo__inputs block" id="grupo__email">
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
        <div class="contenedor__enlace__sesion">
            <div><a href="./conductor" class="enlace___login">Registrarme </a></div>
            <div> <a href="./password-conductor" class="enlace___login">Olvide mi contraseña </a></div>
        </div>
    </div>
</form>

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