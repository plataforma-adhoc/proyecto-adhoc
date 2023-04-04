<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; ?>

<div class="container root">
    <form class="form-register" id="formulario-datos-basicos-vehiculo">
        <input type="hidden" class="step__input" name="nombre"
            value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
        <input type="hidden" class="step__input" name="avatar" value="<?php  echo $datos__resultado['avatar']  ?>">
        <input type="hidden" class="step__input" name="id-usuario"
            value="<?php  echo $datos__resultado['id_usuario']  ?>">
        <div class="form-register__header">
            <ul class="progressbar">
                <li class="progressbar__option active">paso 1</li>
                <li class="progressbar__option">paso 2</li>
                <li class="progressbar__option">paso 3</li>
                <li class="progressbar__option">paso 4</li>
                <li class="progressbar__option">paso 5</li>

            </ul>
            <h2 class="form-register__title">Datos basicos</h2>
            <p class="campos__obligatorios">Los campos con (*) son obligtorios.</p>
        </div>
        <div class="form-register__body">
            <div class="step active" id="step-1">
                <div class="step__header">
                    <h2 class="step__title">Ingrese los datos básicos de su vehiculo</h2>
                </div>
                <div class="step__body">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control step__input marca" id="floatingInput"
                            placeholder="Ej: Toyota" name="marca">
                        <label for="floatingInput">Marca del carro *</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input modelo" id="floatingPassword"
                            placeholder="Ej: Land cruiser" name="modelo">
                        <label for="floatingPassword">Modelo del carro *</label>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control step__input color" id="floatingInput"
                            placeholder="Ej: Azul" name="color">
                        <label for="floatingInput">Color del carro *</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input fabricacion"
                            id="floatingPassword fabricacion" placeholder="Ej: Año 2000" name="fechaFabricacion">
                        <label for="floatingPassword">Año del carro *</label>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control step__input matricula" id="floatingInput"
                            placeholder="Ej: ABC 123 " name="matricula">
                        <label for="floatingInput">Numero de la matricula </label>
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input ciudad" id="floatingPassword"
                            placeholder="Ej: Bogotá" name="ciudad-matricula">
                        <label for="floatingPassword">Cuidad donde esta registrada la matricula *</label>

                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control step__input venta" id="floatingInput"
                            placeholder="Ej: Bogotá " name="ciudad-venta">
                        <label for="floatingInput">Cuidad donde vas a vender tu carro *</label>
                    </div>

                    <select class="form-select form-select-lg mb-3 step__input " aria-label=".form-select-lg example"
                        name="propietario" id="propietario">
                        <option selected>Unico dueño * </option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                    </select>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input kilometros" id="floatingPassword"
                            placeholder="Ej: 100000" name="kilometros">
                        <label for="floatingPassword">Kilometros ni puntos ni comas *</label>

                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input precio" id="floatingPassword"
                            placeholder="Ej: 5000000" name="precio-vehiculo">
                        <label for="floatingPassword">Precio ni puntos ni comas *</label>

                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control step__input puertas" id="floatingPassword"
                            placeholder="Ej: 5" name="puertas">
                        <label for="floatingPassword">Numero de puertas *</label>

                    </div>
                    <select class="form-select form-select-lg mb-3 step__input" aria-label=".form-select-lg example"
                        name="combustible" id="combustible">
                        <option selected>Tipo de combustible</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Gas natural">Gas natural</option>
                        <option value="Electrico">Electrico</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hibrido">Hibrido</option>
                    </select>
                    <select class="form-select form-select-lg mb-3 step__input" aria-label=".form-select-lg example"
                        name="caja" id="caja">
                        <option selected>Tipo de caja</option>
                        <option value="Mecanica">Mecanica</option>
                        <option value="Automatica"> Automatica</option>
                        <option value="Secuencial">Secuencial</option>
                    </select>
                    <select class="form-select form-select-lg mb-3 step__input" aria-label=".form-select-lg example"
                        name="direccion-vehiculo" id="direccion">
                        <option selected>Tipo de direccion</option>
                        <option value="Asistida">Asistida</option>
                        <option value="Asistida Hidraulica"> Asistida Hidraulica</option>
                        <option value="Asistida Electrica">Asistida Electrica</option>
                        <option value="Electro-Hidraulica">Electro-Hidraulica</option>
                        <option value="Mecanica">Mecanica</option>>
                    </select>

                    <div class="form-floating">
                        <input type="text" class="form-control step__input cilindraje" id="floatingPassword"
                            placeholder="Ej: 1.6" name="cilindraje">
                        <label for="floatingPassword">Cilindraje del carro 1.6 *</label>

                    </div>
                    <textarea rows="4" cols="80" placeholder="Agrega más información de tu vehiculo"
                        class="step__input text__area block" name="descripcion" id="descripcion">
                    </textarea>

                </div>
                <div class="step__footer">
                    <button type="submit" class=" step__button--next  inicio " disabled id="activar-btn">Guardar
                        información</button>
                    <br><br>
                    <div id="button"></div>
                    <!-- <button type="button" class="step__button step__button--next" data-to_step="2"
                        data-step="1">Siguiente</button> -->
                </div>
                <div class="toda__la__info__del__vehiculo">
                    <div class="contenido__toda__la__info">
                        <br>
                        <p>
                            Cuentale a tu audiencia que hace tu carro diferente a los demas, proporciona detalles
                            importantes como,
                            mantenimientos recientes, reparaciones esteticas o reparacaiones mecanicas, si tienes un
                            historial de mantenimientos
                            puedes incluirlos.
                        </p>

                    </div>
                </div>
            </div>

    </form>

    <div class="step block" id="step-2">
        <div class="step__header">
            <h2 class="step__title">Informacion adicional de tu vehiculo</h2>
        </div>
        <div class="step__body ">
            <br><br>
            <form class="formulario__info__adicional block" id="formulario-info-adicional-vehiculo">
                <h2 class="subtitulo__info__vehiculo">Seguridad del vehiculo</h2>
                <input type="hidden" class="step__input" name="id-usuario"
                    value="<?php  echo $datos__resultado['id_usuario']  ?>">
                <div class="contenedor__selects">
                    <br><br>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="airbag-delatero">
                            <option value="Si">Si</option>
                            <option value="No">No</option>

                        </select>
                        <label for="floatingSelect"> Air bag delantero</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="airbag-trasero">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Air bag trasero</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="alarma">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Alarma</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="bloqueo-central">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Bloqueo central</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="control-ascenso">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Control de asceso</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="control-descenso">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Control de descenso</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="sensores-delateros">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Sensor delateros</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="sensor-reversa">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Sensor reversa</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="sensor-punto-ciego">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Sensor de punto ciego</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="camara-reversa">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Camara de reversa</label>
                    </div>
                </div>
                <br><br>
                <h2 class="subtitulo__info__vehiculo">Equipamiento del vehiculo</h2>
                <div class="contenedor__selects">
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="aire-acondicionado">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Aire acondicionado</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="andorid-auto">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Android auto</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="apple-car-play">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Apple car play</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="bluetoot">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Bluetooth</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="espejos-electricos">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Espejos electrico</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="exploradoras">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Exploradoras</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="vidrios-electricos">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Vidrios electricos</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="techo-corredizo">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Techo corredizo</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="techo-panoramico">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Techo panoramico</label>

                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="parqueo-automatico">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Parqueo automatico</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="desempañador-trasero">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Desempañador trasero</label>
                    </div>

                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="gps">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Gps</label>
                    </div>
                </div>
                <br><br>
                <h2 class="subtitulo__info__vehiculo">Diseño y estilo del vehiculo</h2>
                <div class="contenedor__selects">
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="rines-de-lujo">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Rines de lujos</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="radio-cassette">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Radio digital</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="radio-cd">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Radio CD</label>
                    </div>
                    <div class="form-floating form__floating__info__adicional">
                        <select class="form-select step__input" id="floatingSelect"
                            aria-label="Floating label select example" name="pantalla-video">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                        <label for="floatingSelect">Pantalla de video</label>
                    </div>
                </div>

                <div class="step__footer">
                    <!-- <button type="button" class="step__button step__button--back" data-to_step="1"
                        data-step="2">Regresar</button> -->
                    <button type="submit" class="step__button step__button--next" id="button-info">Guardar
                        información</button>

                    <br><br>
                    <div id="button-info-adicional"></div>
                    <!-- <button type="button" class="step__button step__button--next" data-to_step="3"
                        data-step="2">Siguiente</button> -->
                </div>

                <div class="toda__la__info__del__vehiculo">
                    <div class="contenido__toda__la__info">
                        <i class="fas fa-exclamation-triangle advertencia"></i>

                    </div>
                    <div class="contenido__toda__la__info">
                        <br>
                        <p>Proporciona toda la información posible de tu vehiculo, esto<br>
                            puede aumentar las posibilidades de venta ante un posible comprador. No omitas detalles
                        </p>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="step" id="step-3">
        <div class="step__header">
            <h2 class="step__title">Sube las fotografias de ese maravilloso vehiculo que quieres vender, maximo 10
                imagenes </h2>
        </div>

        <div class="step__body">
            <form class=" block formulario__info__adicional" id="formulario-insertar-imagenes">
                <input type="hidden" class="step__input" name="id-usuario"
                    value="<?php  echo $datos__resultado['id_usuario']  ?>">
                <div id="wrapper" class="block">
                    <div id="container-input">
                        <div class="wrap-file">
                            <div class="content-icon-camera">
                                <br><br>
                                <label for="files" class="seleccion__fotos"><i class="fas fa-photo-video"></i>
                                    Selecciona las imagenes juntas </label>
                                <input id="files" type="file" multiple="multiple"
                                    accept="image/jpeg, image/png, image/jpg" name="file[]" class="file" required>
                                <output id="result">
                            </div>

                        </div>

                    </div>
                </div>
                <div class="step__footer footer__imagenes">
                    <button type="submit" class="step__button step__button--next" id="button-imagenes">Guardar
                        información</button>
                    <!-- <button type="button" class="step__button step__button--back" data-to_step="2"
                        data-step="3">Regresar</button> -->
                    <br><br>
                    <div id="insert-fotos"></div>
                    <!-- <button type="button" class="step__button step__button--next " data-to_step="4"
                        data-step="3">Siguiente</button> -->
                    <div id="error-fotos"></div>

            </form>
        </div>

    </div>
</div>
<div class="step" id="step-4">
    <div class="step__header">
        <h2 class="step__title">Contacto </h2>

    </div>
    <br>
    <p class="step__texto">Donde te contactaran lo compradores</p>
    <div class="step__body ">
        <form id="formulario-contactos" class="formulario__info__adicional block">
            <input type="hidden" class="step__input" name="id-usuario"
                value="<?php  echo $datos__resultado['id_usuario']  ?>">
            <div class="chek block">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"
                        data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false"
                        aria-controls="collapseExample">
                    <label class="form-check-label " for="flexCheckDefault">
                        Whatsapp
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" data-bs-toggle="collapse"
                        data-bs-target="#collapseWidthExample" aria-expanded="false"
                        aria-controls="collapseWidthExample">
                    <label class="form-check-label " for="flexCheckChecked">
                        Llamadas
                    </label>
                </div>
            </div>

    </div>
    <div class="contendor__collapsables">
        <div class="collapse collapsables" id="collapseExample">
            <div class="card card-body card__collapsables">
                <div class="input-group mb-3 input__group">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de Whatsapp "
                        aria-label="Username" aria-describedby="basic-addon1" name="Whatsapp-uno">

                </div>
                <div class="input-group mb-3 input__group">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de Whatsapp "
                        aria-label="Username" aria-describedby="basic-addon1" name="Whatsapp-dos">

                </div>
            </div>
        </div>

        <div class="collapse collapsables collapsable__llamada" id="collapseWidthExample">
            <div class="card card-body  card__collapsables">
                <div class="input-group mb-3 input__group">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de telefono "
                        aria-label="Username" aria-describedby="basic-addon1" name="telefono-uno">

                </div>
                <div class="input-group mb-3 input__group">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de telefono "
                        aria-label="Username" aria-describedby="basic-addon1" name="telefono-dos">

                </div>
            </div>
        </div>
    </div>
    <br><br>
    <div class="step__footer ">
        <!-- <button type="button" class="step__button step__button--back" data-to_step="3"data-step="4">Regresar</button>
                 -->
        <button type="submit" class="step__button" id="button-contacto">Guardar informacion</button>
        <br><br>
        <div id="button-siguiente"></div>
        <!-- <button type="button" class="step__button step__button--next" data-to_step="5" data-step="4">Siguiente</button> -->
    </div>
</div>
</form>
<div class="step " id="step-5">
    <div class="step__header">
        <h2 class="step__title">Escoge tu plan</h2>
    </div>
    <br>
    <br><br>
    <div class="contenedor__tablas__de__precio">
        <?php  
  
   $fecha__de__registro__usuario =  $datos__resultado['fecha_de_registro'];
   $fecha__actual =  date('d-m-Y');
   $calculando__fecha = strtotime($fecha__actual) - strtotime($fecha__de__registro__usuario);
    $salida =  $calculando__fecha / 86400;
   if($salida > 30){
     $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete,descuento FROM planes__de__publicaciones WHERE activo = '1' AND nombre_paquete = 'PREMIUN'";
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
                <a href="procesar-pago?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&idu=<?php  echo $datos__resultado['id_usuario'] ?>"
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
         $precio__descuento = $valor__paquete - (($valor__paquete * $descuento) / 100 );
        ?>
        <div class="contenedor contenido__tabla__de__precios">
            <h2 class="subtitulo__planes plan__gratis"> Publica tu vehiculo GRATIS solo por tiempo <span
                    class="limitado">LIMITADO</span></h2>
            <br><br>
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
                <a href="plan-gratis?idpaq=<?php  echo $fila__planes['id_paquete'] ?>&nombre_plan=<?php  echo $fila__planes['nombre_paquete'] ?>"
                    class="boton">Lo quiero</a>

                <br><br>
            </div>
            <?php } ?>

        </div>

        <div class="step__footer">
            <!-- <button type="button" class="step__button step__button--back" data-to_step="4"data-step="5">Regresar</button> -->

        </div>
    </div>

    <br>
</div>
</div>
<br><br><br>
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

    let activar__btn = document.getElementById('activar-btn');

    function validar() {
        let marca = document.querySelector('.marca').value
        let modelo = document.querySelector('.modelo').value
        let color = document.querySelector('.color').value
        let fabricacion = document.querySelector('.fabricacion').value
        let matricula = document.querySelector('.matricula').value
        let ciudad = document.querySelector('.ciudad').value
        let venta = document.querySelector('.venta').value
        let propietario = document.getElementById('propietario').value
        let kilometros = document.querySelector('.kilometros').value
        let precio = document.querySelector('.precio').value
        let puertas = document.querySelector('.puertas').value
        let combustible = document.getElementById('combustible').value
        let caja = document.getElementById('caja')
        let direccion = document.getElementById('direccion').value
        let cilindraje = document.querySelector('.cilindraje').value
        let descripcion = document.getElementById('descripcion').value

        let habilitar = false
        if (marca === "" || modelo === "" || color === "" || fabricacion === "" || matricula === "" || ciudad === "" ||
            venta === "" ||
            propietario === "" || kilometros === "" || precio === "" || puertas === "" || combustible === "" ||
            caja === "" || direccion === "" || cilindraje === "" || descripcion === "") {
            habilitar = true
        }

        if (habilitar === true) {
            activar__btn.disabled = true
            activar__btn.classList.add('inicio')
        } else {
            activar__btn.disabled = false
            activar__btn.classList.add('step__button')
        }
    }

    form.addEventListener('keyup', validar)

    document.querySelector("#files").addEventListener("change", (e) => {
        if (window.File && window.FileReader && window.FileList && window.Blob) {
            const files = e.target.files;
            const output = document.querySelector("#result");
            output.innerHTML = "";


            if (files.length > 10) {
                let error__fotos = document.getElementById('error-fotos').innerHTML = `
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Ups</strong> Nos dimos cuenta que superaste el limite de imagenes
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
    `
            } else {

                for (let i = 0; i < files.length; i++) {
                    if (!files[i].type.match("image")) continue;
                    const picReader = new FileReader();
                    picReader.addEventListener("load", function (event) {
                        const picFile = event.target;
                        const div = document.createElement("div");
                        div.innerHTML =
                            `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
                        output.appendChild(div);
                    });
                    picReader.readAsDataURL(files[i]);

                }

            }
            if (files.length === 0) {
                console.log('vacio');
                return false
            }

        } else {
            alert("Tu navegador no soporta la  API de archivos");
        }
    });
</script>