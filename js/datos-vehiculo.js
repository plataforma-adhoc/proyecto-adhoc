
export function datos__obligatorios__del__vehiculo(){
  var url__servidor = 'https://adhoc.com.co/'
    let formulario__datos__obligatorios = document.getElementById('formulario-datos-basicos-vehiculo')
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
                data-step="1">Siguiente</button>`
              activar__btn.style.display = 'none';
            }
         })
       })
   }

  }

export function informacion__adicional__vehiculo(){
  var urlServidor = 'https://adhoc.com.co/'
    let informacion__adicional__vehiculo =  document.getElementById('formulario-info-adicional-vehiculo')
    if(informacion__adicional__vehiculo){
        informacion__adicional__vehiculo.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-info-adicional-vehiculo'))
        evento.preventDefault();
       
  let airbagDelatero = document.getElementById('airbag-delatero').value
  let airbagTrasero = document.getElementById('airbag-trasero').value
  let alarma= document.getElementById('alarma').value
  let bloqueoCentral = document.getElementById('bloqueo-central').value
  let controlAscenso= document.getElementById('control-ascenso').value
  let controlDescenso = document.getElementById('control-descenso').value
  let sensoresDelateros = document.getElementById('sensores-delateros').value
  let sensorReversa = document.getElementById('sensor-reversa').value
  let sensorPuntoCiego = document.getElementById('sensor-punto-ciego').value
  let camaraReversa = document.getElementById('camara-reversa').value
  let aireAcondicionado = document.getElementById('aire-acondicionado').value
  let andoridAuto= document.getElementById('andorid-auto').value
  let appleCarPlay= document.getElementById('apple-car-play').value
  let bluetoot = document.getElementById('bluetoot').value
  let espejosElectricos = document.getElementById('espejos-electricos').value
  let exploradoras = document.getElementById('exploradoras').value
  let vidriosElectricos = document.getElementById('vidrios-electricos').value
  let techoCorredizo = document.getElementById('techo-corredizo').value
  let techoPanoramico = document.getElementById('techo-panoramico').value
  let parqueoAutomatico = document.getElementById('parqueo-automatico').value
  let desempañadorTrasero = document.getElementById('desempañador-trasero').value
  let gps = document.getElementById('gps').value
  let rinesDeLujo = document.getElementById('rines-de-lujo').value
  let radioCassette = document.getElementById('radio-cassette').value
  let radioCd = document.getElementById('radio-cd').value
  let pantallaVideo= document.getElementById('pantalla-video').value


if(airbagDelatero || airbagTrasero || alarma ==="" || bloqueoCentral ==="" || controlAscenso === "" || controlDescenso ==="" ||
sensoresDelateros ==="" || sensorReversa ==="" || sensorPuntoCiego ==="" || camaraReversa ==="" || aireAcondicionado ==="" || andoridAuto ==="" ||
appleCarPlay ==="" || bluetoot ==="" ||espejosElectricos ==="" || exploradoras ==="" || vidriosElectricos ==="" || techoCorredizo ==="" ||
techoPanoramico ==="" || parqueoAutomatico ==="" || desempañadorTrasero ==="" || gps ==="" || rinesDeLujo ==="" || radioCassette ==="" ||
radioCd ==="" || pantallaVideo ===""){
  Swal.fire({
    background:'#212F37',
    color:'#ffff',
    toast: true,
    icon: 'error',
    title: 'Campos requeridos',
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
        fetch(urlServidor+'insert-info-adicional-vehiculo',{
            method:'POST',
            body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){              
                let info__adicional = document.getElementById('button-info-adicional');
                let info = document.getElementById('button-info');
                info__adicional.innerHTML= `
                 <button type="button" class="step__button step__button--next" data-to_step="3"
                data-step="2">Siguiente</button>`
              info.style.display = 'none'
            }
        })
      }
      })
      
    } 
  
}

export function guardar__imagenes__vehiculo(){
  var urlServidor = 'https://adhoc.com.co/'
  let guardar__imagenes =  document.getElementById('formulario-insertar-imagenes')
  if(guardar__imagenes){
      guardar__imagenes.addEventListener('submit',function(evento){
        let form__data = new FormData(document.getElementById('formulario-insertar-imagenes'))
      evento.preventDefault();
      fetch(urlServidor+'insert-imagenes',{
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

export function contacto__vendedor(){
  var urlServidor = 'https://adhoc.com.co/'
    let contacto__vendedor =  document.getElementById('formulario-contactos')
    if(contacto__vendedor){
        contacto__vendedor.addEventListener('submit',function(evento){
          let form__data = new FormData(document.getElementById('formulario-contactos'))
        evento.preventDefault();
        
        fetch(urlServidor+'insert-contacto-vendedor',{
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





