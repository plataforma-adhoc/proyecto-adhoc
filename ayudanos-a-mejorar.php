<?php 
$titulo =  "AdHoc | Ayudanos a mejorar";
 include'layout/nabvar.php'  ?>
<div class="container contenedor__formulario__sugerencia">
    <h2 class="titulo__mejoras">Ayudanos a mejorar</h2>
    <p class="parrafo__mejoras">En que quieres que mejoremos, escribenos tu sugerencia y trabajaremos para mejorar 
        o tienes alguna duda sobre nuestros servicos <a href="contacto" class="enlace__a__contacto">contacatanos</a> y con gusto te ayudaremos
    </p>
    <form class="formulario__registro formulario__sugerencia" id="form-sugerencias">
        <div class="contenedor__formulario">
        <div class="grupo__inputs" id="grupo__telefono">
        <label for="telefono"class="formulario__label">Nombre</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="text" placeholder="Nombre completo" name="nombre" 
                    class="capturarDatos" id="telefono">
            </div>
     </div>
</div>
<div class="grupo__inputs" id="grupo__telefono">
        <label for="telefono"class="formulario__label">E-mail</label>
        <div class="formulario__grupo_-input">
            <div class="contenedor__inputs">
                <input type="email" placeholder="Tu email" name="email" 
                    class="capturarDatos" id="telefono" >
            </div>
     </div>
</div>
        <p class="block">
            <label for="" class="textos__label">Escibe tu sugerencia a continuación</label>
            <br><br>
            <textarea name="sugerencia" rows="3" class="text__area__mensaje" id="sugerencia"></textarea>
        </p>
            <div class="block">
                <input type="submit" value="ENVIAR MI SUGERENCIA" class="boton__registro sugerencias" name="enviar">
            </div>
   
        </div>
    </form>
</div>
<?php  include'layout/footer.php'  ?>

<script>
    function insertarSugerencias(){
    var url__servidor = 'https://adhoc.com.co/'
    let form__susgrencia = document.getElementById('form-sugerencias')
    if(form__susgrencia){
    form__susgrencia.addEventListener('submit',function(evento){
        let data = new FormData(document.getElementById('form-sugerencias'))
        evento.preventDefault();
        fetch(url__servidor+'insert-sugerencia',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(resultado =>{
           if(resultado === 'true'){
            document.getElementById('sugerencia').value ="";
            Swal.fire({
                background:'#202F36',
                icon: 'success',
                title: `Se recibio tu sugerencia`,
                footer: 'Gracias por escribirnos, trabajaremos para mejorar',
               
              })
           }
        })
    })
    }
}
insertarSugerencias();
</script>