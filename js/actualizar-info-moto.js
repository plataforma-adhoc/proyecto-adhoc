export function actualizarInfoMoto(){
    var urlServidor = 'https://adhoc.com.co/'
      let actualizarInfoMoto = document.getElementById('actualizar-info-moto')
      if(actualizarInfoMoto){
        actualizarInfoMoto.addEventListener('submit',function(evento){
              evento.preventDefault();
              let formaData = new FormData(document.getElementById('actualizar-info-moto'));
              fetch(urlServidor+'actualizar-info-moto',{
                  method:'POST',
                  body:formaData
              }).then(respuesta => respuesta.json())
              .then(data =>{
                  if(data ==='ok'){                                      
                      Swal.fire({
                          background:'#212F37',
                          color:'#ffff',
                          toast: true,
                          icon: 'success',
                          title: 'Datos actualizados con exito',
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
                      
                     window.location.reload()
                  }
              })
            })
      }
  }


  
  export function actualizarContactoMoto(){
    var urlServidor = 'https://adhoc.com.co/'
      let actualizarContactoMoto = document.getElementById('actualizar-contacto-moto')
      if(actualizarContactoMoto){
        actualizarContactoMoto.addEventListener('submit',function(evento){
              evento.preventDefault();
              let forma__data = new FormData(document.getElementById('actualizar-contacto-moto'));
              fetch(urlServidor+'actualizar-contacto-moto',{
                  method:'POST',
                  body:forma__data
              }).then(respuesta => respuesta.json())
              .then(data =>{
                  if(data === 'ok'){
                      Swal.fire({
                          background:'#212F37',
                          color:'#ffff',
                          toast: true,
                          icon: 'success',
                          title: 'Datos actualizados con exito',
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
                      
                        window.location.reload()
                  }
              })
            })
      }
  }