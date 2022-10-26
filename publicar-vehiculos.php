<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; 

 ?>

<div class="container root">
    <form  class="form-register" action="server.php" method="POST" enctype="multipart/form-data">
    <input type="hidden"  class="step__input"name="nombre" value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
      <input type="hidden"  class="step__input"name="avatar" value="<?php  echo $datos__resultado['avatar']  ?>">
        <div class="form-register__header">
            <ul class="progressbar">
                <li class="progressbar__option active">paso 1</li>
                <li class="progressbar__option">paso 2</li>
                <li class="progressbar__option">paso 3</li>
                <li class="progressbar__option">paso 4</li>
                <li class="progressbar__option">paso 5</li>
        
            </ul>
            <h2 class="form-register__title">Datos basicos e informacion de contacto</h2>
            <p class="campos__obligatorios">Los campos con (*) son obligtorios.</p>
        </div>
        <div class="form-register__body">
            <div class="step active" id="step-1">
                <div class="step__header">
                    <h2 class="step__title">Ingrese los datos básicos de su vehiculo</h2>
                </div>
                <div class="step__body">
                    <input type="text" placeholder="Marca * " class="step__input" name="marca" id="marca">
                    <input type="text" placeholder="Modelo del vehiculo * " class="step__input"name="modelo" id="modelo">
                    <input type="text" placeholder="Color del vehiculo * " class="step__input"name="color" id="color">
                    <input type="text" placeholder="Año del vehiculo * " class="step__input"name="fechaFabricacion" id="fabricacion">
                    <input type="text" placeholder=" Numero de matricula ingresa el ultimo numero * " class="step__input"name="matricula"id="matricula">
                    <input type="text" placeholder="Ciudad donde esta registrada la matricula * " class="step__input"name="ciudad-matricula"id="ciudad">
                    <input type="text" placeholder="Ciudad de venta * " class="step__input"name="ciudad-venta"id="venta">
                    <!-- <select name="propietario" id="propietario" class="step__input">
                        <option selected>Unico dueño * </option>
                        <option value="si">Si</option>
                        <option value="no">No</option>

                    </select> -->
                        <div class="custom-select" style="width:500px;">
                        <select name="propietario" id="propietario" >
                        <option selected>Unico dueño * </option>
                        <option value="si">Si</option>
                        <option value="no">No</option>
                        </select>
                        </div>
                    <input type="text" placeholder="Kilometraje del vehiculo  * " class="step__input" name="kilometros"id="kilometros">
                    <input type="text" placeholder="$ Precio del vehiculo * " class="step__input" name="precio-vehiculo"id="precio">
                </div>
                <div class="step__footer">
                    <button type="button" class="step__button--next  inicio" data-to_step="2"
                        data-step="1" disabled id="activar-btn">Siguiente</button>
                </div>
            </div>
            <div class="step" id="step-2">
                <div class="step__header">
                    <h2 class="step__title">Informacion adicional de tu vehiculo</h2>
                </div>
                <div class="step__body">
                    <select name="combustible" id="" class="step__input">
                        <option selected>Tipo de combustible</option>
                        <option value="Gasolina">Gasolina</option>
                        <option value="Gas natural">Gas natural</option>
                        <option value="Electrico">Electrico</option>
                        <option value="Diesel">Diesel</option>
                        <option value="Hibrido">Hibrido</option>

                    </select>
                    <select name="caja" id="" class="step__input">
                        <option selected>Tipo de caja</option>
                        <option value="Mecanica">Mecanica</option>
                        <option value="Automatica"> Automatica</option>
                        <option value="Secuencial">Secuencial</option>
                    </select>
                    <select name="direccion" id="" class="step__input">
                        <option selected>Tipo de direccion</option>
                        <option value="Asistida">Asistida</option>
                        <option value="Asistida Hidraulica"> Asistida Hidraulica</option>
                        <option value="Asistida Electrica">Asistida Electrica</option>
                        <option value="Electro-Hidraulica">Electro-Hidraulica</option>
                        <option value="Mecanica">Mecanica</option>

                    </select>

                    <input type="text" placeholder="Cilindraje del vehiculo" class="step__input" name="cilindraje">
                    <div class="accordion block " id="accordionExample">
                        <div class="accordion-item ">
                            <h2 class="accordion-header bg-dark" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Seguridad
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body acordeon__checkbox acordion__body">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="airbag-delatero">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Air bag delantero</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="airbag-trasero">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                          Air bag traseros</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="bloqueo-central" >
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Bloqueo central</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="alarma">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Alarma</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="control-ascenso">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Control de ascenso</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="control-descenso">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                        Control de descenso </label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="sensores-delateros">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Sensores delanteros</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="sensor-reversa">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Sensor de reversa</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="punto-ciego">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Sensor punto ciego</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="camara-reversa">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Camara de reversa</label>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Equipamiento
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body acordeon__checkbox acordion__body">
                                <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="aire-acondicionado">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                        Aire acondicionado</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="andorid-auto">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Android auto</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="apple-car-play">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Apple car play</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="bluetoot">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Bluetooth</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault"   name="espejos-electricos">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Espejos electrico</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="exploradoras">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                          Exploradoras</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="vidrios-electricos">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                        Vidrios electricos</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="techo-corredizo">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Techo corredizo</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="techo-panoramico">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Techo panoramico</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="parqueo-automatico">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Parqueo automático</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="desempañador-trasero">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Desempañador trasero</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault"  name="gps">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            GPS</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Diseño y estilo
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body acordeon__checkbox acordion__body">
                                <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="rines-de-lujo">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Rines de lujo</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="radio-cassette">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Radio cassette</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="radio-cd">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                            Radio CD</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" name="pantalla-video">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">
                                           Pantalla de video</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <textarea rows="4" cols="80" placeholder="Agrega más información de tu vehiculo"
                        class="step__input text__area block"  name="descripcion"></textarea>
                </div>
                <div class="step__footer">
                    <button type="button" class="step__button step__button--back" data-to_step="1"
                        data-step="2">Regresar</button>
                    <button type="button" class="step__button step__button--next" data-to_step="3"
                        data-step="2">Siguiente</button>
                </div>
                <div class="toda__la__info__del__vehiculo">
                    <br>
                    <p>Proporciona toda la información posible de tu vehiculo, <br>
                        puedes aumentar las posibilidades de venta ante un posible comprador
                    </p>
                </div>
            </div>
            <div class="step" id="step-3">
                <div class="step__header">
                    <h2 class="step__title">Sube las fotografias de tu vehiculo maximo 10 imagenes</h2>
                </div>
                <div class="step__body">
                    <div id="wrapper" class="block">
                    <div id="container-input">
                    <div class="wrap-file">
			    	<div class="content-icon-camera">             
                        <label for="files"><i class="fas fa-cloud-upload-alt"></i> Selecciones los archivos </label>
                        <input id="files" type="file" multiple="multiple" accept="image/jpeg, image/png, image/jpg" name="file[]" class="file">
                        <!-- <input type="file" id="files" name="file[]" accept="image/*" multiple /> -->
                    </div>
                    <output id="result">
				
			</div>
		</div>
	       </div>
                </div>
                <div class="step__footer">
                    <button type="button" class="step__button step__button--back" data-to_step="2"
                        data-step="3">Regresar</button>
                    <button type="button" class="step__button step__button--next " data-to_step="4"
                        data-step="3" >Siguiente</button>
                        
                </div>
            </div>
            <div class="step" id="step-4">
                <div class="step__header">
                    <h2 class="step__title">Contacto </h2>
                   
                </div>
                <br>
                <p class="step__texto">En tu medio de contacto podras recibir ofertas de los posibles compradores</p>
               
                <div class="step__body ">
                <div class="chek block">
                    <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault"data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                            <label class="form-check-label " for="flexCheckDefault">
                                Whatsapp
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            <label class="form-check-label " for="flexCheckChecked">
                                Llamadas
                            </label>
                    </div>     
                    </div>
                    
                </div>
                <div class="contendor__collapsables">  
                <div class="collapse collapsables" id="collapseExample">
                <div class="card card-body card__collapsables">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de Whatsapp " aria-label="Username" aria-describedby="basic-addon1" name="Whatsapp-uno">
                  
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de Whatsapp " aria-label="Username" aria-describedby="basic-addon1"name="Whatsapp-dos">
                  
                </div>
                </div>
                </div>
  
                <div class="collapse collapsables collapsable__llamada" id="collapseWidthExample">
                    <div class="card card-body  card__collapsables">
                    <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de telefono " aria-label="Username" aria-describedby="basic-addon1"name="telefono-uno">
                  
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">+57</span>
                    <input type="text" class="form-control" placeholder="Ingresa tu numero de telefono " aria-label="Username" aria-describedby="basic-addon1"name="telefono-dos">
                  
                </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="step__footer ">
                    <button type="button" class="step__button step__button--back" data-to_step="3"data-step="4">Regresar</button>
                    <!-- <button type="submit" class="step__button" name="publicar">Registrarse</button> -->
                    <button type="button" class="step__button step__button--next" data-to_step="5"
                        data-step="4">Siguiente</button>
                        
                </div>
                </div>
                <div class="step " id="step-5">
                    <div class="step__header">
                        <h2 class="step__title">Escoge tu plan</h2>
                    </div>
                    <br>
                    <h2 class="subtitulo__planes"> Publica tu vehiculo gratis hasta que lo vendas, solo por tiempo <span class="limitado">LIMITADO</span></h2>
                        <div class="contenedor__tablas__precio">
                        
                <?php      
                    $consulta__planes = "SELECT id_paquete, nombre_paquete, valor_paquete,descripcion_paquete FROM planes__de__publicaciones";
                    $ejecutar = mysqli_query($conexion__db__accent,$consulta__planes);
                    if(mysqli_num_rows($ejecutar) > 0){
                        while($fila__planes = mysqli_fetch_array($ejecutar)){ ?>
        <div class="contenedor">
        <div class="tabla">
            <h2><?php  echo $fila__planes['nombre_paquete']  ?></h2>
            <img src="./img/plan__free.svg" alt="">
            <h3><?php  echo $fila__planes['valor_paquete']  ?> <sup>$</sup></h3>
            <p><?php  echo $fila__planes['descripcion_paquete']  ?></p>
            <a href="" class="boton" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo" data-bs-id="<?php echo $fila__planes['id_paquete']  ?>" id="plan">Lo quiero</a>
        </div>
        <!-- <div class="tabla hover">
            <h2>Estandar</h2>
            <img src="png/2.png" alt="">
            <h3>200 <sup>$</sup></h3>
            <p>Paga ahora y recibe un 30% en tu hosting y dominios</p>
            <a href="" class="boton">Paga ahora</a>
        </div>
        <div class="tabla">
            <h2>Premium</h2>
            <img src="png/3.png" alt="">
            <h3>300 <sup>$</sup></h3>
            <p>Paga ahora y recibe un 30% en tu hosting y dominios</p>
            <a href="" class="boton">Paga ahora</a>
        </div> -->
    </div>
     
                   <?php  }?>
                   <?php  }?>
        </div>
             
                <div class="step__footer">
                <button type="button" class="step__button step__button--back" data-to_step="4"data-step="5">Regresar</button>
                    
                </div>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal__paquetes">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Procesar pago</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
      </div>
      <div class="modal-body modal__body" id="modal-body">
     
       
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary " id="boton" >Publicar mi vehiculo</button>
      </div>
    </div>
  </div>
</div>
    </form>
    <br>
</div>



</div>
<script>

let exampleModal = document.getElementById('exampleModal');
exampleModal.addEventListener('show.bs.modal',function(event){
 let boton = event.relatedTarget
 var id = boton.getAttribute('data-bs-id')
 let botonEliminar = exampleModal.querySelector('.modal-footer #boton')
 botonEliminar.value = id
 let modal_body = document.getElementById('modal-body');

 <?php          
 $consulta = "SELECT * FROM planes__de__publicaciones ";
 $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
 if($ejecutar__la__consulta){
   $fila = mysqli_fetch_array($ejecutar__la__consulta);
   echo '
   modal_body.innerHTML ="<p>Elegiste el plan  '.$fila['nombre_paquete'].'<br>'.
   'Total a pagar '.$fila['valor_paquete'].'</p>" 
   
   
   ';
 }
 
 
 ?>

})
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

  function validar(){
   let habilitar = false
   if(form.marca.value ==="" || form.modelo.value ==="" || form.color.value ==="" || form.fabricacion.value ===""||form.matricula.value ==="" ||form.ciudad.value ==="" || form.venta.value ===""
   || form.propietario.value ==="" || form.kilometros.value ==="" || form.precio.value ===""){
    habilitar = true
   }

   if(habilitar ===true){
    activar__btn.disabled = true
    activar__btn.classList.add('inicio')
   }else{
    activar__btn.disabled = false
    activar__btn.classList.add('step__button')
   }
  }

  form.addEventListener('keyup',validar)

    document.querySelector("#files").addEventListener("change", (e) => { 
  if (window.File && window.FileReader && window.FileList && window.Blob) { 
    const files = e.target.files;
    const output = document.querySelector("#result");
    output.innerHTML = "";
  let activar__btn = document.getElementById('activar');
    for (let i = 0; i < files.length; i++) {
        if (!files[i].type.match("image")) continue; 
        const picReader = new FileReader(); 
        picReader.addEventListener("load", function (event) { 
          const picFile = event.target;
          const div = document.createElement("div");
          div.innerHTML = `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
          output.appendChild(div);
        });
        picReader.readAsDataURL(files[i]); 
   
    }
  } else {
    alert("Your browser does not support File API");
  }
});

var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>
<?php include'layout/footer-home.php' ?>