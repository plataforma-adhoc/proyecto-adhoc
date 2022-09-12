<?php  include'layout/nav-home-conductor.php';

$id = $_GET['id'] ? $_GET['id']:'';
if($id =! $id || $id ===""){
 header('Location: dashboard-conductor.php');
}

?>
    <button class="btn__back" id="btn-back"><i class="fas fa-arrow-left"></i></button>

<div class="container contenedor__configuracion">
    <h2 class="titulo__configuracion">Configuracion</h2> 
    <p class="parrafo__configuracion">Elige una de las siguientes opciones para continuar, recuerda que si decides eliminar tu cuenta se perderan todos los datos, incluido
       el saldo que tengas en nuestro sistema .
    </p>
    <div class="item__configuracion">
        <a href="#" class="card__configuracion cambiar__contraseña animate__animated  animate__bounceInDown" id="card-cambiar-contrasena">
            <div>
             <h3 class="titulo__item__configuracion">Cambiar mi contraseña</h3>
             <p class="parrafo__item__configuracion">cambia tu contraseña de acceso a nuestro sistema</p>
            </div>

        </a>
        <a href="eliminar-cuenta-conductor.php?id=<?php  echo $datos__resultado ['id_conductor'] ?>" class="card__configuracion eliminar__cuenta animate__animated animate__bounceInDown" id="eliminar-cuenta">
            <div>
                <h3 class="titulo__item__configuracion">Eliminar mi cuenta</h3>
             <p class="parrafo__item__configuracion">se eliminaran todos tu datos de nuestro sistema</p>
            </div>

        </a>
    </div>
    <div id="myModalCambioContrasena" class="modal__contrasena  animate__animated animate__bounceInDown">
        <div class="modal__content">
            <span class="close" id="cerrar-modal">&times;</span>
          <p class="parrafo__modal">Escribe la contraseña que deseas a continuacion</p>
        <form class="formulario__registro actualizar__contraseña" id="formulario-actaulizar-contrasena-conductor">
    <div class="contenedor__formulario">
        <div class="grupo__inputs block">
            <div class="contenedor__inputs" id="grupo__nombre">
                <input type="password" placeholder="Ingresa tu nueva contraseña" name="nuevaContrasena" 
                    class="capturarDatos" autofocus autocomplete="" id="contrasena">
            
            </div>
            <label class="content-input">
	         <input type="checkbox" name="Vehiculo" onclick="mostrar()" >Quiero ver mi contraseña
	        <i></i>
             </label>
            <input type="hidden" name="id"class="capturarDatos" value="<?php echo $datos__resultado['id_conductor'] ?>">

        </div>
    
        <div class="block">
            <input type="submit" value="ACTUALIZAR CONTRASEÑA" class="boton__registro" name="enviar">
        </div>
    </div>
</form>
      </div>
    
    </div>
</div>

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
<?php  include'layout/footer-home.php' ?>
