

export function datos__obligatorios__del__vehiculo(){
  var url__servidor = 'https://adhoc.com.co/'
    let formulario__datos__obligatorios = document.getElementById('formulario-datos-basicos-vehiculo')
  //   let activar__btn = document.getElementById('activar-btn');
  //   if(formulario__datos__obligatorios){
  //     formulario__datos__obligatorios.addEventListener('submit',function(evento){
  //       evento.preventDefault()  
  //   const datos__obligatorios = {
  //                 marca :formulario__datos__obligatorios.querySelector('[name="marca"]').value,
  //                   modelo:formulario__datos__obligatorios.querySelector('[name="modelo"]').value,
  //                   color:formulario__datos__obligatorios.querySelector('[name="color"]').value,
  //                   fechaFabricacion:formulario__datos__obligatorios.querySelector('[name="fechaFabricacion"]').value,
  //                   matricula:formulario__datos__obligatorios.querySelector('[name="matricula"]').value,
  //                   ciudad__matricula:formulario__datos__obligatorios.querySelector('[name="ciudad-matricula"]').value,
  //                   ciudad__venta:formulario__datos__obligatorios.querySelector('[name="ciudad-venta"]').value,
  //                   propietario:formulario__datos__obligatorios.querySelector('[name="propietario"]').value,
  //                   kilometros:formulario__datos__obligatorios.querySelector('[name="kilometros"]').value,
  //                   precio__vehiculo:formulario__datos__obligatorios.querySelector('[name="precio-vehiculo"]').value,
  //                    puertas:formulario__datos__obligatorios.querySelector('[name="puertas"]').value,
  //                    combustible:formulario__datos__obligatorios.querySelector('[name="combustible"]').value,
  //                   caja:formulario__datos__obligatorios.querySelector('[name="caja"]').value,
  //                   direccion__vehiculo:formulario__datos__obligatorios.querySelector('[name="direccion-vehiculo"]').value,
  //                   cilindraje:formulario__datos__obligatorios.querySelector('[name="cilindraje"]').value,
  //                   descripcion:formulario__datos__obligatorios.querySelector('[name="descripcion"]').value
  //   }
  //   localStorage.setItem('datosObligatorios', JSON.stringify(datos__obligatorios));
  //   const obtener__datos = JSON.parse(localStorage.getItem('datosObligatorios'));
  //  if(obtener__datos && obtener__datos.marca && obtener__datos.modelo && obtener__datos.fechaFabricacion && obtener__datos.matricula && obtener__datos.ciudad__matricula &&
  //   obtener__datos.ciudad__venta && obtener__datos.propietario && obtener__datos.kilometros && obtener__datos.precio__vehiculo && obtener__datos.puertas &&
  //   obtener__datos.combustible && obtener__datos.caja && obtener__datos.direccion__vehiculo && obtener__datos.cilindraje && obtener__datos.descripcion){
  //     let button =  document.getElementById('button');
  //     button.innerHTML = ` 
  //     <button type="button" class="step__button step__button--next" data-to_step="2"data-step="1">Siguiente</button> 
  //     `
  //     activar__btn.style.display = 'none';
 
  //  }

  //     })
     if(formulario__datos__obligatorios){
       formulario__datos__obligatorios.addEventListener('submit',function(evento){
        let form__data = new FormData(document.getElementById('formulario-datos-basicos-vehiculo'))
        evento.preventDefault()
         fetch('insert-datos-obligatorios-vehiculo',{
            method:'POST',
            body:form__data
         }).then(respuesta => respuesta.json())
         .then(data =>{
            if(data === 'ok'){
              console.log(data)
                let activar__btn = document.getElementById('activar-btn');
                let button =  document.getElementById('button');
                button.innerHTML = ` 
                <button type="button" class="step__button step__button--next" data-to_step="2"
                data-step="1">Siguiente</button> 
                
                `
              activar__btn.style.display = 'none';
            }
         })
       })
   }

  }



export function informacion__adicional__vehiculo(){
  var url__servidor = 'https://adhoc.com.co/'

//     let informacion__adicional__vehiculo =  document.querySelector('.formulario__info__adicional');
//     let btn__info =  document.getElementById('button-info');
//     if(btn__info){
//       btn__info.addEventListener('click',function(evento){
//         evento.preventDefault();
//         const info__adicional = {
//           airbag__delatero :informacion__adicional__vehiculo.querySelector('[name="airbag-delatero"]').value,
//           airbag__trasero:informacion__adicional__vehiculo.querySelector('[name="airbag-trasero"]').value,
//           alarma:informacion__adicional__vehiculo.querySelector('[name="alarma"]').value,
//           bloqueo__central:informacion__adicional__vehiculo.querySelector('[name="bloqueo-central"]').value,
//           control__ascenso:informacion__adicional__vehiculo.querySelector('[name="control-ascenso"]').value,
//           control__descenso:informacion__adicional__vehiculo.querySelector('[name="control-descenso"]').value,
//           sensores__delateros:informacion__adicional__vehiculo.querySelector('[name="sensores-delateros"]').value,
//           sensor__reversa:informacion__adicional__vehiculo.querySelector('[name="sensor-reversa"]').value,
//           sensor__punto__ciego:informacion__adicional__vehiculo.querySelector('[name="sensor-punto-ciego"]').value,
//           camara__reversa:informacion__adicional__vehiculo.querySelector('[name="camara-reversa"]').value,
//           aire__acondicionado:informacion__adicional__vehiculo.querySelector('[name="aire-acondicionado"]').value,
//           andorid__auto:informacion__adicional__vehiculo.querySelector('[name="andorid-auto"]').value,
//           apple__car__play:informacion__adicional__vehiculo.querySelector('[name="apple-car-play"]').value,
//           bluetoot:informacion__adicional__vehiculo.querySelector('[name="bluetoot"]').value,
//           espejos__electricos:informacion__adicional__vehiculo.querySelector('[name="espejos-electricos"]').value,
//           exploradoras:informacion__adicional__vehiculo.querySelector('[name="exploradoras"]').value,
//           vidrios__electricos:informacion__adicional__vehiculo.querySelector('[name="vidrios-electricos"]').value,
//           techo__corredizo:informacion__adicional__vehiculo.querySelector('[name="techo-corredizo"]').value,
//           techo__panoramico:informacion__adicional__vehiculo.querySelector('[name="techo-panoramico"]').value,
//           parqueo__automatico:informacion__adicional__vehiculo.querySelector('[name="parqueo-automatico"]').value,
//           desempañador__trasero:informacion__adicional__vehiculo.querySelector('[name="desempañador-trasero"]').value,
//           gps:informacion__adicional__vehiculo.querySelector('[name="gps"]').value

// }
// localStorage.setItem('infoAdicional', JSON.stringify(info__adicional));
// const obtener__datos__info__adicional = JSON.parse(localStorage.getItem('infoAdicional'));
// console.log(obtener__datos__info__adicional)
// if(obtener__datos__info__adicional && obtener__datos__info__adicional.airbag__delatero && obtener__datos__info__adicional.airbag__trasero && obtener__datos__info__adicional.alarma && obtener__datos__info__adicional.bloqueo__central && obtener__datos__info__adicional.control__ascenso &&
// obtener__datos__info__adicional.control__descenso && obtener__datos__info__adicional.sensores__delateros && obtener__datos__info__adicional.sensor__reversa && obtener__datos__info__adicional.sensor__punto__ciego && obtener__datos__info__adicional.camara__reversa &&
// obtener__datos__info__adicional.aire__acondicionado && obtener__datos__info__adicional.andorid__auto && obtener__datos__info__adicional.apple__car__play && obtener__datos__info__adicional.bluetoot && obtener__datos__info__adicional.exploradoras && obtener__datos__info__adicional.vidrios__electricos &&
// obtener__datos__info__adicional.techo__corredizo && obtener__datos__info__adicional.techo__panoramico && obtener__datos__info__adicional.parqueo__automatico && obtener__datos__info__adicional.desempañador__trasero && obtener__datos__info__adicional.gps){
//   let info__adicional = document.getElementById('button-info-adicional');
//   info__adicional.innerHTML = ` 
//   <button type="button" class="step__button step__button--next" data-to_step="3" data-step="2">Siguiente</button> 
//   `
//   btn__info.style.display = 'none';

// }

//       })
//     }

    let informacion__adicional__vehiculo =  document.getElementById('formulario-info-adicional-vehiculo')
    if(informacion__adicional__vehiculo){
        informacion__adicional__vehiculo.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-info-adicional-vehiculo'))
        evento.preventDefault();
        fetch('insert-info-adicional-vehiculo',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
              console.log(data)
                let info__adicional = document.getElementById('button-info-adicional');
                let info = document.getElementById('button-info');

                info__adicional.innerHTML= `
                 <button type="button" class="step__button step__button--next" data-to_step="3"
                data-step="2">Siguiente</button>
                `
              info.style.display = 'none'
            }
        })
      })
    } 
}

export function guardar__imagenes__vehiculo(){
  // let boton__imagenes =  document.getElementById('button-imagenes')
  // if (boton__imagenes) {
  //   boton__imagenes.addEventListener('click', (evento) => {
  //     evento.preventDefault();
  // alert('esta funcionado')
  //   });
  // }

  // document.querySelector("#files").addEventListener("change", (e) => {
  //   if (window.File && window.FileReader && window.FileList && window.Blob) {
  //     const files = e.target.files;
  //     const output = document.querySelector("#result");
  //     output.innerHTML = "";
  //     let imagesArr = []; // matriz de imágenes en formato base64
  
  //     if (files.length > 10) {
  //       let error__fotos = (document.getElementById("error-fotos").innerHTML = `
  //         <div class="alert alert-danger alert-dismissible fade show" role="alert">
  //           <strong>Ups</strong> Nos dimos cuenta que superaste el límite de imágenes
  //           <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  //         </div>
  //       `);
  //     } else {
  //       for (let i = 0; i < files.length; i++) {
  //         if (!files[i].type.match("image")) continue;
  //         const picReader = new FileReader();
  //         picReader.addEventListener("load", function (event) {
  //           const picFile = event.target;
  //           const div = document.createElement("div");
  //           div.innerHTML = `<img class="thumbnail" src="${picFile.result}" title="${picFile.name}"/>`;
  //           output.appendChild(div);
  
  //           // convertir la imagen a base64 y agregarla a la matriz
  //           const base64Image = picFile.result.replace(/^data:image\/(png|jpeg|jpg);base64,/, "");
  //           imagesArr.push(base64Image);
  //         });
  //         picReader.readAsDataURL(files[i]);
  //         // guardar la matriz de imágenes en el localStorage
  //         guardarImagenesEnLocalStorage(imagesArr);
  //       }
  //     }
  
  //     if (files.length === 0) {
  //       console.log("vacio");
  //       return false;
  //     }
  //   } else {
  //     alert("Tu navegador no soporta la API de archivos");
  //   }
  // });
  
 
  var url__servidor = 'https://adhoc.com.co/'
  let guardar__imagenes =  document.getElementById('formulario-insertar-imagenes')
 
  if(guardar__imagenes){
      guardar__imagenes.addEventListener('submit',function(evento){
        let form__data = new FormData(document.getElementById('formulario-insertar-imagenes'))
      evento.preventDefault();
      fetch('insert-imagenes',{
          method:'POST',
          body:form__data
      }).then(respuesta => respuesta.json())
      .then(data =>{
          if(data === 'ok'){
            console.log(data)
              let insert__fotos= document.getElementById('insert-fotos');
           let button__imagenes =    document.getElementById('button-imagenes');
              insert__fotos.innerHTML= `
             <button type="button" class="step__button step__button--next " data-to_step="4"
              data-step="3" >Siguiente</button>
              `
              button__imagenes.style.display= 'none'

          }
      })
    
    })
  
}
}

// function guardarImagenesEnLocalStorage(imagenes) {
//   localStorage.setItem("imagenes", JSON.stringify(imagenes));

//   const imagesStr = localStorage.getItem("imagenes");
//   if (imagesStr === null || imagesStr === undefined) {
//     // no hay imágenes almacenadas
//     console.log("No hay imágenes almacenadas en el localStorage");
//   } else {
//     // hay imágenes almacenadas
//     try {
//       const imagesArr = JSON.parse(imagesStr);
//       console.log(`Hay ${imagesArr.length} imágenes almacenadas en el localStorage`);
//     } catch (e) {
//       console.error(`Error al parsear el objeto JSON: ${e}`);
//     }
//   }
// }

export function contacto__vendedor(){
  var url__servidor = 'https://adhoc.com.co/'
    let contacto__vendedor =  document.getElementById('formulario-contactos')
    if(contacto__vendedor){
        contacto__vendedor.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-contactos'))
        evento.preventDefault();
        fetch('insert-contacto-vendedor',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
              console.log(data)
                let button__siguiente = document.getElementById('button-siguiente');
                let button__contacto = document.getElementById('button-contacto');

                button__siguiente.innerHTML= `
                <button type="button" class="step__button step__button--next" data-to_step="5"
                data-step="4">Siguiente</button>
                `
          button__contacto.style.display = 'none'
            }
        })
      })
    }  
}



