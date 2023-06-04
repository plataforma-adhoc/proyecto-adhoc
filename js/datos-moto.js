export function datosDeLaMoto(){
    var urlServidor = 'https://adhoc.com.co/'
      let datosDeLaMoto = document.getElementById('datos-basicos-moto')
       if(datosDeLaMoto){
        datosDeLaMoto.addEventListener('submit',function(evento){
          let formData = new FormData(document.getElementById('datos-basicos-moto'))
           evento.preventDefault()
           fetch(urlServidor+'insert-datos-moto',{
              method:'POST',
              body:formData 
           }).then(respuesta => respuesta.json())
           .then(data =>{
              if(data === 'ok'){
                let  btnDeshabilitado = document.getElementById('btnDeshabilitado');
                btnDeshabilitado.removeAttribute('disabled'); 
                btnDeshabilitado.style.cursor = 'pointer';  
              }
              if(data === 'error'){
                Swal.fire({
                  background:'#212F37',
                  color:'#ffff',
                  toast: true,
                  icon: 'error',
                  title: 'Campos vacios',
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
              }
           })
         })
     }
    }
  

  
  export function fotosDeLaMoto(){
    var urlServidor = 'https://adhoc.com.co/'
    let fotosDeLaMoto =  document.getElementById('fotos-de-la-moto')
    if(fotosDeLaMoto){
        fotosDeLaMoto.addEventListener('submit',function(evento){
          let formData = new FormData(document.getElementById('fotos-de-la-moto'))
        evento.preventDefault();
        fetch(urlServidor+'insert-fotos-de-la-moto',{
            method:'POST',
            body:formData
        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data === 'ok'){
              let  btnDeshabilitadoFotos = document.getElementById('btnDeshabilitadoFotos');
              btnDeshabilitadoFotos.removeAttribute('disabled'); 
              btnDeshabilitadoFotos.style.cursor = 'pointer';  
  
            }
            if(data ==='error'){
              Swal.fire({
                background:'#212F37',
                color:'#ffff',
                toast: true,
                icon: 'error',
                title: 'No hay imagenes',
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
            }
        })
      
      }) 
  }
  }
  
  export function contactoVendedorMoto(){
    var urlServidor = 'https://adhoc.com.co/'
      let contacto__vendedor =  document.getElementById('contacto-vendedor-moto')
      if(contacto__vendedor){
          contacto__vendedor.addEventListener('submit',function(evento){
            let form__data = new FormData(document.getElementById('contacto-vendedor-moto'))
          evento.preventDefault();
          fetch(urlServidor+'insert-contacto-vendedor-moto',{
              method:'POST',
              body:form__data
          }).then(respuesta => respuesta.json())
          .then(data =>{
              if(data === 'ok'){
                let  btnDeshabilitadoContacto = document.getElementById('btnDeshabilitadoContacto');
                btnDeshabilitadoContacto.removeAttribute('disabled'); 
                btnDeshabilitadoContacto.style.cursor = 'pointer'; 
              }

              if(data === 'error'){
                Swal.fire({
                  background:'#212F37',
                  color:'#ffff',
                  toast: true,
                  icon: 'error',
                  title: 'Campos vacios',
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
              }
          })
        })
      }  
  }
  
  
  
  