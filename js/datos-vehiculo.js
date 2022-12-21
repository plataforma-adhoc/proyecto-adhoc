var url__servidor = 'https://adhoc.com.co/'

export function datos__obligatorios__de__vehiculo(){
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
    let informacion__adicional__vehiculo =  document.getElementById('formulario-info-adicional-vehiculo')
    if(informacion__adicional__vehiculo){
        informacion__adicional__vehiculo.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-info-adicional-vehiculo'))
        evento.preventDefault();
       console.log(form__data)
        fetch(url__servidor+'insert-info-adicional-vehiculo',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
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
    let guardar__imagenes =  document.getElementById('formulario-insertar-imagenes')
    if(guardar__imagenes){
        guardar__imagenes.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-insertar-imagenes'))
        evento.preventDefault();
       console.log(form__data)
        fetch(url__servidor+'insert-imagenes',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
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

export function contacto__vendedor(){
    let contacto__vendedor =  document.getElementById('formulario-contactos')
    if(contacto__vendedor){
        contacto__vendedor.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-contactos'))
        evento.preventDefault();
        fetch(url__servidor+'insert-contacto-vendedor',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
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



