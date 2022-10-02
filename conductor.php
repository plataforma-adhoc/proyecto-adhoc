<?php  include'layout/nabvar.php' ?>
<div class="contenedor__del__formulario">
<h2 class="subtitulo__formularios">Crea una cuenta gratis</h2>
    <form class="formulario__registro" id="formulario-registro-conductor">
    <div class="contenedor__formulario">
        <div class="grupo__inputs" id="grupo__nombre">
        <label for="nombre"class="formulario__label">Nombre</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Nombre" name="nombre" 
                    class="capturarDatos" autofocus autocomplete="">
                    <!-- <i class="formulario__validacion-estado uno fas fa-times-circle"></i> -->
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__primer__apellido">
        <label for="nombre"class="formulario__label">Primer apellido</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Primer apellido" name="primerApellido"  class="capturarDatos">
                <!-- <i class="formulario__validacion-estado dos fas fa-times-circle"></i> -->
            </div>
        </div>
        <div class="grupo__inputs" id="grupo__segundo__apellido">
        <label for="nombre"class="formulario__label">Segundo apellido</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Segundo apellido" name="segundoApellido"  class="capturarDatos">
                <!-- <i class="formulario__validacion-estado tres fas fa-times-circle"></i> -->

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__email">
        <label for="nombre"class="formulario__label">E-mail</label>
            <div class="formulario__grupo_-input">
                <input type="email" placeholder="E-mail" name="email"  class="capturarDatos">
                <!-- <i class="formulario__validacion-estado cuatro fas fa-times-circle"></i> -->
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__documento">
        <label for="nombre"class="formulario__label">Documento</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Documento" name="documento"  class="capturarDatos">
                <!-- <i class="formulario__validacion-estado cinco fas fa-times-circle"></i> -->

            </div>
        </div>

        <div class="grupo__inputs" id="grupo__telefono">
        <label for="nombre"class="formulario__label">Telefono</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Numero telefono" name="telefono" 
                    class="capturarDatos">
                    <!-- <i class="formulario__validacion-estado seis fas fa-times-circle"></i> -->
            </div>
        </div>

        <div class="grupo__inputs" id="grupo__licencia">
        <label for="nombre"class="formulario__label">Licencia</label>

            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Numero licencia" name="licencia" 
                    class="capturarDatos">
                    <!-- <i class="formulario__validacion-estado siete fas fa-times-circle"></i> -->
            </div>
        </div>
        <div class="grupo__inputs" id="grupo__categoria">
        <label for="nombre"class="formulario__label">Categoria</label>
            <div class="formulario__grupo_-input">
                <input type="text" placeholder="Categoria licencia" name="categoria" 
                    class="capturarDatos">
                    <!-- <i class="formulario__validacion-estado ocho fas fa-times-circle"></i> -->
            </div>
        </div>
        <div class="grupo__inputs block" id="grupo__contrasena">
        <label for="nombre"class="formulario__label">Contraseña</label>
            <div class="formulario__grupo_-input">
                <input type="password" placeholder="Crea una contraseña" name="contrasena" id="contrasena"
                    class="capturarDatos">
                    <!-- <i class="formulario__validacion-estado nueve fas fa-times-circle"></i> -->

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
            <a class="enlace__terminos" href="politicas-de-privacidad.php">politicas de privacidad</a> </p>
        <div class="contenedor__enlace__sesion block">       
            <a href="login-conductor.php" class="enlace___login">Ya tienes una cuenta <strong>Inicia sesion</strong></a>
        </div>
    </div>
</form>
<div class="contenido__beneficios">
<h2 class="subtitulo__beneficios">Beneficios de adhoc.com</h2>
<div class="item__beneficios">
<img src="./img/estrella___beneficio.png" alt="estrella de beneficios de adhoc" class="imagen__beneficios">
<div class="contenedor__de_textos">
    <p class="texto__beneficios"><strong>Construye y fortalece tu reputacion profesional.</strong> Ofrece una experiencia de primera calidad y lleva tu profesion al siguiente nivel</p>
</div>
</div>
<div class="item__beneficios">
<img src="./img/grupo__usuarios.png" alt="estrella de beneficios de adhoc" class="imagen__beneficios">
<div class="contenedor__de_textos">
    <p class="texto__beneficios"><strong>AdHoc.com.co te accerca a miles de usuarios.</strong> los usuarios encontrarán tu perfil profesional para interesarse en recibir servicio  contigo. Conviértete en el conductor preferido de las familias colombianas.</p>
</div>
</div>
<div class="item__beneficios">
<img src="./img/online.png" alt="estrella de beneficios de adhoc" class="imagen__beneficios">
<div class="contenedor__de_textos">
    <p class="texto__beneficios"><strong>Organiza tu horario laboral.</strong> Elige los espacios del día en los que quieres trabajar, de acuerdo con la disponibilidad . </p>
</div>
</div>
<div class="item__beneficios">
<img src="./img/computador__con__codigo.png" alt="estrella de beneficios de adhoc" class="imagen__beneficios">
<div class="contenedor__de_textos">
    <p class="texto__beneficios"><strong>Trabajamos a toda marcha.</strong> Trabajamos sin parar para mejorar nuestros sistemas de segurida e interfaz para brindarte una mejor experiencia.</p>
</div>
</div>
</div>
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