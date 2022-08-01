<?php  include'layout/nav-home-usuario.php';

$id = $_GET['id'] ? $_GET['id']:'';
if($id =! $id || $id ===""){
 header('Location: ./dashboard-usuario');
}

?>
<div class="container contenedor__configuracion">
    <h2 class="titulo__configuracion">Configuracion</h2>
    <p class="parrafo__configuracion">Elige una de las siguientes opciones para continuar, recuerda que si decides
        eliminar tu cuenta se perderan todos los datos, incluido
        el saldo que tengas en nuestro sistema .
    </p>
    <div class="item__configuracion">
        <a href="#" class="card__configuracion cambiar__contraseña animate__animated  animate__bounceInDown"
            id="card-cambiar-contrasena">
            <div>
                <h3 class="titulo__item__configuracion">Cambiar mi contraseña</h3>
                <p class="parrafo__item__configuracion">cambia tu contraseña de acceso a nuestro sistema</p>
            </div>

        </a>
        <a href="./eliminar-cuenta-usuario?id=<?php echo $datos__resultado['id_usuario'] ?>" class="card__configuracion eliminar__cuenta animate__animated animate__bounceInDown">
            <div>
                <h3 class="titulo__item__configuracion">Eliminar mi cuenta</h3>
                <p class="parrafo__item__configuracion">se eliminaran todos tu datos de nuestro sistema</p>
            </div>

        </a>

        <div id="myModal" class="modal__contrasena  animate__animated animate__bounceInDown">
            <div class="modal-content">
                <span class="close">&times;</span>
                <p class="parrafo__modal">Escribe la contraseña que deseas a continuacion</p>
                <form class="formulario__registro" id="formulario-actaulizar-contrasena-usuario">
                    <div class="contenedor__formulario">
                        <div class="grupo__inputs block">
                            <div class="contenedor__inputs" id="grupo__nombre">
                                <input type="password" placeholder="Ingresa tu nueva contraseña" name="nuevaContrasena"
                                    class="capturarDatos" autofocus autocomplete="">

                            </div>
                        </div>

                                <input type="hidden" name="id"class="capturarDatos" value="<?php echo $datos__resultado['id_usuario'] ?>">

                        <div class="block">
                            <input type="submit" value="ACTUALIZAR CONTRASEÑA" class="boton__registro" name="enviar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php  include'layout/footer-home.php'  ?>
