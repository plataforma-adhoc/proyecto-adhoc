<?php  include'layout/nav-home-conductor.php'  ?>
<div class="container contenedor__formulario__sugerencia">
    <h2 class="titulo__mejoras">Ayudanos a mejorar</h2>
    <p class="parrafo__mejoras">En que quieres que mejoremos, escribenos tu sugerencia y trabajaremos para mejorar 
        o tienes alguna duda sobre nuestros servicos <a href="./contacto" class="enlace__a__contacto">contacatanos</a> y con gusto te ayudaremos
    </p>
    <form class="formulario__registro formulario__sugerencia" id="form-sugerencias-conductor">
        <div class="contenedor__formulario">
        <div class="grupo__inputs" id="grupo__telefono">
        <label for="telefono"class="formulario__label">Nombre</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Telefono" name="nombre" 
                    class="capturarDatos" id="telefono" value="<?php echo $datos__resultado['nombre_usuario'] ?>" readonly>


            </div>
          <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

     </div>
</div>
<div class="grupo__inputs" id="grupo__telefono">
        <label for="telefono"class="formulario__label">E-mail</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="email" placeholder="Telefono" name="email" 
                    class="capturarDatos" id="telefono" value="<?php echo $datos__resultado['email'] ?>" readonly>
          

            </div>
          <!-- <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p> -->

     </div>
</div>
        <p class="block">
            <label for="" class="textos__label">Escibe tu sugerencia a continuación</label>
            <br><br>
            <textarea name="sugerencia" rows="3" class="text__area__mensaje" id="sugerencia"></textarea>
        </p>
            <div class="block">
                <input type="submit" value="ENVIAR MI SUGERENCIA" class="boton__registro" name="enviar">
            </div>
    
        </div>
    </form>

</div>
<?php  include'layout/footer-home.php'  ?>