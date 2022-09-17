<?php include'layout/nabvar.php' ?>
<div class="contenedor__del__formulario">
    <h2 class="subtitulo__formularios">Crea una cuenta gratis</h2>
<form class="formulario__registro" id="formulario-registro-usuario">
    <div class="contenedor__formulario">  
            <div class="grupo__inputs" id="grupo__nombre">
                <label for="nombre"class="formulario__label">Nombre</label>
                <div class="formulario__grupo_-input">
                    <input type="text" placeholder="Nombre" name="nombre" 
                        class="capturarDatos" autofocus autocomplete="" id="nombre">
                        
                        <i class="formulario__validacion-estado uno fas fa-times-circle"></i>
                </div>
                <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
            </div>

        <div class="grupo__inputs" id="grupo__primer__apellido">
        <label for="primer-apellido"class="formulario__label">Primer apellido</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Primer apellido" name="primerApellido"  class="capturarDatos" id="primer-apellido">
                <i class="formulario__validacion-estado dos fas fa-times-circle"></i>
            </div>
            <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

        </div>
        </div>

        <div class="grupo__inputs" id="grupo__segundo__apellido">
        <label for="segundo-apellido"class="formulario__label">Segundo apellido</label>
        <div >
            <div class="contenedor__inputs">
                <input type="text" placeholder="Segundo apellido" name="segundoApellido"  class="capturarDatos" id="segundo-apellido">
                <i class="formulario__validacion-estado tres fas fa-times-circle"></i>
           
            </div>
            <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
        </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
        <label for="email"class="formulario__label">E-mail</label>
           <div class="formulario__grupo_-input">
               <div class="contenedor__inputs">
                   <input type="email" placeholder="Email" name="email"  class="capturarDatos" id="email">
                   <i class="formulario__validacion-estado cuatro fas fa-times-circle"></i>
               </div>
               <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->
           </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
        <label for="documento"class="formulario__label">Documento</label>
      <div  class="formulario__grupo_-input">
          <div class="contenedor__inputs">
              <input type="text" placeholder="Documento" name="documento" 
                  class="capturarDatos" id="documento">
                  <i class="formulario__validacion-estado cinco fas fa-times-circle"></i>
          </div>
          <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

      </div>
        </div>

        <div class="grupo__inputs" id="grupo__telefono">
        <label for="telefono"class="formulario__label">Telefono</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Telefono" name="telefono" 
                    class="capturarDatos" id="telefono">
                  <i class="formulario__validacion-estado seis fas fa-times-circle"></i>

            </div>
          <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

     </div>
        </div>

        <div class="grupo__inputs block" id="grupo__contrasena">
        <label for="contrasena"class="formulario__label">Contraseña</label>
        <div  class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Crea una contraseña" name="contrasena" 
                    class="capturarDatos" id="contrasena">
                    <i class="formulario__validacion-estado  siete__contrasena fas fa-times-circle"></i>

            </div>
            <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

            </div>
            <label class="content-input">
	         <input type="checkbox" name="Vehiculo" onclick="mostrar()" >Quiero ver mi contraseña
	        <i></i>
             </label>
      </div>
        <div class="block">
            <input type="submit" value="CREAR MI CUENTA" class="boton__registro" name="enviar">
        </div>
        <p class="terminos block">Al registrarte aceptas nuestros <a class="enlace__terminos"
                href="terminos-y-condiciones-de-uso.php">Terminos y
                condiciones</a> y
            <a class="enlace__terminos" href="politicas-de-privacidad.php">politicas de privacidad</a> </p>
        <div class="contenedor__enlace__sesion block">
            <a href="login-usuario.php" class="enlace___login">Ya tienes una cuenta <strong>Inicia sesion</strong>
            </a>
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
<?php include'layout/footer.php' ?>