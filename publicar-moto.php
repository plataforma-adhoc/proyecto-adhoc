<?php include'layout/nav-home-usuario.php'; 
include'conexion-db-accent.php'; ?>
<div class="container root contenedor__publicar__moto">
    <form class="form-register" id="datos-basicos-moto">
        <input type="hidden" class="step__input" name="nombre" value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
        <input type="hidden" class="step__input" name="avatar" value="<?php  echo $datos__resultado['avatar']  ?>">
        <input type="hidden" class="step__input" name="idUsuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
        <div class="form-register__header">
            <ul class="progressbar">
                <li class="progressbar__option active">paso 1</li>
                <li class="progressbar__option">paso 2</li>
                <li class="progressbar__option">paso 3</li>
                <li class="progressbar__option">paso 4</li>
                <!-- <li class="progressbar__option">paso 4</li> -->
            </ul>
            <h2 class="form-register__title">Datos basicos</h2>
            <p class="campos__obligatorios">Los campos con (*) son obligtorios.</p>
        </div>
        <div class="form-register__body">
            <div class="step active" id="step-1">
                <div class="step__header">
                    <h2 class="step__title">Ingrese los datos básicos de su moto</h2>
                </div>
                <div class="step__body steep__body__moto">
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto " id="marca" name="marca">
                        <label for="floatingInput">Marca *</label>
                    </div>
              
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="modelo"  name="modelo">
                        <label for="floatingPassword">Modelo *</label>
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="color"   name="color">
                        <label for="floatingInput">Color *</label>
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="fecha-fabricacion"  name="fechaFabricacion">
                        <label for="floatingPassword">Año de fabricación *</label>

                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="matricula" name="matricula">
                        <label for="floatingInput">Numero de matricula *</label>
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="ciudad-matricula" name="ciudad-matricula">
                        <label for="floatingPassword">Donde esta registrada *</label>

                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="ciudad-venta" name="ciudad-venta">
                        <label for="floatingInput">Cuidad donde la venderas  *</label>
                    </div>
                     <div class="form__floating__moto">
                    <select class="form-select form-select-lg  step__input__moto" aria-label=".form-select-lg example" name="propietario" id="propietario">
                        <option selected>Unico dueño * </option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>                   
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="kilometros" name="kilometros">
                        <label for="floatingPassword">Kilometros ni puntos ni comas *</label>
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="precio"  name="precio">
                        <label for="floatingPassword">Precio ni puntos ni comas *</label>
                    </div>
                    <div class="form__floating__moto">
                        <select class="form-select form-select-lg step__input__moto" aria-label=".form-select-lg example"name="tipo" id="tipo">
                            <option selected>Tipo de moto</option>
                            <option value="Deportiva">Deportiva</option>
                            <option value="Scooter">Scooter</option>
                            <option value="Crucero">Crucero</option>
                            <option value="Enduro">Enduro</option>
                            <option value="Naked">Naked</option>
                            <option value="SuperMoto">Super Moto</option>
                            <option value="DobleProposito">Doble proposito</option>
                            <option value="Urbana">Urbana</option>
                            <option value="TursimoDeportivo">Turismo deportivo</option>
                            <option value="Chopper">Chopper</option>
                            <option value="StreetTracker">Street tracker</option>
                        </select>
                    </div>
                    <div class="form-floating form__floating__moto">
                        <input type="text" class="form-control step__input__moto" id="floatingPassword"  name="cilindraje">
                        <label for="floatingPassword">Cilindraje  *</label>
                    </div>                 
                        <textarea rows="4" cols="80" placeholder="Describe esa maravillosa moto que quieres vender" class="step__input text__area block__moto" name="descripcion" id="descripcion"> </textarea>               
                </div>
                <div class="step__footer btn__footers">
                    <div class="btns__footers">
                        <button type="submit" class="step__button--next step__button">Enviar</button>
                    </div>
                    <div  class="btns__footers">
                        <button class="step__button step__button--next" data-to_step="2"data-step="1" id="btnDeshabilitado" disabled style="cursor: not-allowed;">Siguiente</button>
                    </div> 
                    <!-- <button type="button" class="step__button step__button--next" data-to_step="2"data-step="1">Siguiente</button> -->
                </div>
                <div class="toda__la__info__del__vehiculo">
                    <div class="contenido__toda__la__info">
                        <br>
                        <p>
                            <strong>
                                Cuentale a tu audiencia que hace a tu carro diferente a las demas, proporciona detalles
                                importantes como,
                                mantenimientos recientes, reparaciones esteticas o reparacaiones mecanicas, si tienes un
                                historial de mantenimientos,crea una buena descripción .
                            </strong>
                          
                        </p>

                    </div>
                </div>
            </div>
    </form>
    <div class="step block" id="step-2">
        <div class="step__header">
        <h2 class="step__title">Sube las fotografias de ese maravilloso vehiculo que quieres vender, maximo 10 imagenes </h2>
        </div>
        <div class="step__body ">
            <form class="formulario__info__adicional block" id="fotos-de-la-moto">       
              <input type="hidden" class="step__input" name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
                <div id="wrapper" class="block">
                    <div id="container-input">
                        <div class="wrap-file">
                            <div class="content-icon-camera">
                                <br><br>
                                <label for="files" class="seleccion__fotos"><i class="fas fa-photo-video"></i>
                                    Selecciona las imagenes juntas </label>
                                <input id="files" type="file" multiple="multiple" accept="image/jpeg, image/png, image/jpg" name="file[]" class="file" required>
                                <output id="result">
                            </div>
                        </div>
                    </div>
                </div>
            <div class="step__footer btn__footers">
                    <div class="btns__footers">
                    <button type="submit" class="step__button step__button--next" id="button-info">Enviar</button>
                    </div>
                    <div  class="btns__footers">
                    <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2" id="btnDeshabilitadoFotos" disabled style="cursor: not-allowed;">Siguiente</button>
                    </div>
                   
                </div>
            </form>
        </div>
</div>
    <div class="step" id="step-3">
        <div class="step__header">
        <h2 class="step__title">Contacto </h2>
        </div>
    <p class="step__texto">Donde te contactaran los compradores</p>
        <div class="step__body">
            <form class=" block formulario__info__adicional" id="contacto-vendedor-moto">
            <input type="hidden" class="step__input" name="id-usuario" value="<?php  echo $datos__resultado['id_usuario']  ?>">
                <div class="form__contacto__vendedor">
                <div class="form-floating  float__contacto">
                <input type="text" class="form-control inputs__contacto" id="floatingInput" value="<?php echo $datos__resultado['email'] ?>"name="email">
                <label for="floatingInput">Email </label>
                </div>
                <div class="form-floating float__contacto">
                <input type="text" class="form-control inputs__contacto" id="floatingPassword" name="telefono">
                <label for="floatingPassword">Telefono</label>
                </div>  
                <div class="form-floating float__contacto">
                <input type="text" class="form-control inputs__contacto" id="floatingPassword" name="Whatsapp">
                <label for="floatingPassword">WhatsApp</label>
                </div>
                </div>
                </div>                                
                <div class="step__footer btn__footers">
                    <div class="btns__footers">
                    <button type="submit" class="step__button step__button--next" id="button-info">Enviar</button>
                    </div>
                    <div  class="btns__footers">
                    <button type="button" class="step__button step__button--next " data-to_step="4"data-step="3" id="btnDeshabilitadoContacto" disabled style="cursor: not-allowed;">Siguiente</button>
                    </div>
                </div>    
            </div>
        </form>
        <div class="step" id="step-4">
        <div class="step__header">
          <h2 class="step__title">Escoge tu plan</h2>
         </div>
         <div class="contenedor__tablas__de__precio"> <br>
    <?php    
   $fecha__de__registro__usuario =  $datos__resultado['fecha_de_registro'];
   $fecha__actual =  date('d-m-Y');
   $calculando__fecha = strtotime($fecha__actual) - strtotime($fecha__de__registro__usuario);
    $salida =  $calculando__fecha / 86400;
   if($salida > 30){
     $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones__moto WHERE activo = '1' AND nombre_paquete = 'PREMIUN'";
      $ejecutar = mysqli_query($conexion__db__accent,$consulta__planes);
       $fila__planes = mysqli_fetch_array($ejecutar);
       $nombre__paquete = $fila__planes['nombre_paquete'];
        $valor__paquete = $fila__planes['valor_paquete'];
         $descripcion__paquete = $fila__planes['descripcion_paquete'];
         $descuento = $fila__planes['descuento'];
         $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );  ?>
        <div class="contenedor contenido__tabla__de__precios">
            <div class="tabla">
                <h2><?php  echo $nombre__paquete  ?></h2>
                <img src="./img/plan__free.svg" alt="contactos">
                <?php   
            if($descuento > 0){ ?>
                <p>Antes <sup>$</sup> <del><?php  echo $valor__paquete;  ?> </del></p>
                <h3>
                    <?php  echo number_format($precio__descuento,2,'.',',') ?> <br>
                    <small class="text-success"><?php  echo $descuento ?>% de descuento</small>
                </h3>
                <?php  } else { ?>
                <h3><sup>$</sup><?php  echo $valor__paquete  ?> </h3>
                <?php  } ?>
                <div class="contenido__descripcion">
                    <p><?php  echo  $descripcion__paquete ?></p>
                </div>
                <a href="procesar-pago-moto?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&idu=<?php  echo $datos__resultado['id_usuario'] ?>"
                    class="boton">Lo quiero</a>
                <br><br>
            </div>
        </div>
        <?php  }else{
         $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones WHERE activo = '1' AND nombre_paquete = 'GRATIS'";
         $ejecutar = mysqli_query($conexion__db__accent,$consulta__planes);
         $fila__planes = mysqli_fetch_array($ejecutar);
          $nombre__paquete = $fila__planes['nombre_paquete'];
          $valor__paquete = $fila__planes['valor_paquete'];
          $descripcion__paquete = $fila__planes['descripcion_paquete'];
          $descuento = $fila__planes['descuento'];
         $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 ); ?>
        <div class="contenedor contenido__tabla__de__precios">
            <h2 class="subtitulo__planes plan__gratis"> Publica tu moto GRATIS, solo por tiempo <span
                    class="limitado">LIMITADO</span></h2>
            <br><br>
            <div class="tabla">
                <h2><?php  echo $nombre__paquete  ?></h2>
                <img src="./img/plan__free.svg" alt="contactos"> <?php   
            if($descuento > 0){ ?>
                <p>Antes <sup>$</sup> <del><?php  echo $valor__paquete;  ?> </del></p>
                <h3>
                    <?php  echo number_format($precio__descuento,2,'.',',') ?> <br>
                    <small class="text-success"><?php  echo $descuento ?>% de descuento</small>
                </h3>
                <?php  } else { ?>
                <h3><sup>$</sup><?php  echo $valor__paquete  ?> </h3>
                <?php  } ?>
                <div class="contenido__descripcion">
                    <p><?php  echo  $descripcion__paquete ?></p>
                </div>
                <a href="plan-gratis-ads-moto?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&nombre_plan=<?php  echo $fila__planes['nombre_paquete'] ?>"
                    class="boton">Lo quiero</a>
                <br><br>
            </div>
            <?php } ?>
        </div>
        <div class="step__footer">
            <!-- <button type="button" class="step__button step__button--back" data-to_step="4"data-step="5">Regresar</button> -->
        </div>
    </div>  
        </div> 
    </div>
</div> 
<br><br>
<?php include'layout/footer-home.php' ?>

<script>
    let form = document.querySelector('.form-register');
    let progressOptions = document.querySelectorAll('.progressbar__option');
    form.addEventListener('click', function (e) {
        let element = e.target;
        let isButtonNext = element.classList.contains('step__button--next');
        let isButtonBack = element.classList.contains('step__button--back');
        if (isButtonNext || isButtonBack) {
            let currentStep = document.getElementById('step-' + element.dataset.step);
            let jumpStep = document.getElementById('step-' + element.dataset.to_step);
            currentStep.addEventListener('animationend', function callback() {
                currentStep.classList.remove('active');
                jumpStep.classList.add('active');
                if (isButtonNext) {
                    currentStep.classList.add('to-left');
                    progressOptions[element.dataset.to_step - 1].classList.add('active');
                } else {
                    jumpStep.classList.remove('to-left');
                    progressOptions[element.dataset.step - 1].classList.remove('active');
                }
                currentStep.removeEventListener('animationend', callback);
            });
            currentStep.classList.add('inactive');
            jumpStep.classList.remove('inactive');
        }
    });

    // form.addEventListener('keyup', validar)
    document.querySelector("#files").addEventListener("change", (e) => {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            const files = e.target.files;
            const output = document.querySelector("#result");
            output.innerHTML = "";
            if (files.length > 10) {
                Swal.fire({
                background:'#212F37',
                color:'#ffff',
                toast: true,
                icon: 'error',
                title: 'Superaste el limite de fotografias',
                animation: false,
                position: 'bottom',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
            } else if(files.length < 10) {
                Swal.fire({
                background:'#212F37',
                color:'#ffff',
                toast: true,
                icon: 'error',
                title: 'Minimo 10 fotografias',
                animation: false,
                position: 'bottom',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                  toast.addEventListener('mouseenter', Swal.stopTimer)
                  toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
              })
            }else{
                let primeraFoto = null;
                for (let i = 0; i < files.length; i++) {
                    if (!files[i].type.match("image")) continue;
                    const picReader = new FileReader();
                    picReader.addEventListener("load", function (event) {
                        const picFile = event.target;
                        const div = document.createElement("div");
                        div.innerHTML =
                            `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
                            if (primeraFoto === null) {
                                div.innerHTML += `<span class="portada">Portada</span>`; 
                                primeraFoto = picFile.result; 
                            }
                        output.appendChild(div);
                    });
                    picReader.readAsDataURL(files[i]);

                }
            }         

        } else {
            alert("Tu navegador no soporta la  API de archivos");
        }
    });
</script>
<?php include'layout/footer-home.php' ?>
