<?php 
$titulo = "AdHoc | login usuario";
include'layout/nabvar.php'?>

<form class="formulario__registro" id="formulario-login">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block" id="grupo__email">
        <label for="email"class="formulario__label">E-mail</label>   
            <div class="contenedor__inputs" >
                <input type="text" placeholder="Tu E-mail" name="email" id="email"
                    class="capturarDatos" autofocus autocomplete="">

            </div>
               <p class="formulario__input-error">El emil solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
        </div>

    

        <div class="grupo__inputs block" id="">
            <div class="contenedor__inputs">
                <input type="password" placeholder="Tu contraseña" name="contrasena" id="contrasena" class="capturarDatos">
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
        <div><a href="usuario" class="enlace___login">Registrarme </a></div>
            <div> <a href="password-usuario" class="enlace___login">Olvide mi contraseña </a></div>
        </div>
    </div>
</form>

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