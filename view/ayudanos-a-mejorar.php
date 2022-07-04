<?php  include'layout/nav-home-usuario.php'  ?>
<div class="container contenedor__formulario__sugerencia">
    <h2 class="titulo__mejoras">Ayudanos a mejorar</h2>
    <p class="parrafo__mejoras">En que quieres que mejoremos, escribenos tu sugerencia y trabajaremos para mejorar 
        o tienes alguna duda sobre nuestros servicos <a href="./contacto" class="enlace__a__contacto">contacatanos</a> y con gusto te ayudaremos
    </p>
    <form class="formulario__registro formulario__sugerencia" method="post" action="/usuario-registro">
        <div class="contenedor__formulario">
        <p class="block">
            <label for="" class="textos__label">Escibe tu sugerencia a continuacion</label>
            <br><br>
            <textarea name="message" rows="3" class="text__area__mensaje"></textarea>
        </p>
            <div class="block">
                <input type="submit" value="ENVIAR MI SUGERENCIA" class="boton__registro" name="enviar">
            </div>
    
        </div>
    </form>

</div>
<?php  include'layout/footer-home.php'  ?>