

export function datos__obligatorios__del__vehiculo(){
  var url__servidor = 'https://adhoc.com.co/'
    let formulario__datos__obligatorios = document.getElementById('formulario-datos-basicos-vehiculo')
     if(formulario__datos__obligatorios){
       formulario__datos__obligatorios.addEventListener('submit',function(evento){
        let form__data = new FormData(document.getElementById('formulario-datos-basicos-vehiculo'))
        evento.preventDefault()
         fetch(url__servidor+'insert-datos-obligatorios-vehiculo',{
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
    let informacion__adicional__vehiculo =  document.getElementById('formulario-info-adicional-vehiculo')
    if(informacion__adicional__vehiculo){
        informacion__adicional__vehiculo.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-info-adicional-vehiculo'))
        evento.preventDefault();
        fetch(url__servidor+'insert-info-adicional-vehiculo',{
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



