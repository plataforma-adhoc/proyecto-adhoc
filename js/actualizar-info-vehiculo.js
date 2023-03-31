export function actualizar__info__vehculo(){
  var url__servidor = 'https://adhoc.com.co/'
    let form__actualizar__info__vehiculo = document.getElementById('form-actualizar-info-vehiculo')
    if(form__actualizar__info__vehiculo){
          form__actualizar__info__vehiculo.addEventListener('submit',function(evento){
            evento.preventDefault();
            let forma__data = new FormData(document.getElementById('form-actualizar-info-vehiculo'));
            fetch(url__servidor+'actualizar-info-vehiculo',{
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

export function actualizar__diseño__y__estilo(){
  var url__servidor = 'https://adhoc.com.co/'
    let form__actualizar__info__vehiculo = document.getElementById('form-diseño-y-estilo')
    if(form__actualizar__info__vehiculo){
          form__actualizar__info__vehiculo.addEventListener('submit',function(evento){
            evento.preventDefault();
            let forma__data = new FormData(document.getElementById('form-diseño-y-estilo'));
            fetch(url__servidor+ 'actualizar-diseño-y-estilo',{
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

export function actualizar__equipamiento(){
  var url__servidor = 'https://adhoc.com.co/'
    let form__actualizar__info__vehiculo = document.getElementById('form-actualizar-equipamiento')
    if(form__actualizar__info__vehiculo){
          form__actualizar__info__vehiculo.addEventListener('submit',function(evento){
            evento.preventDefault();
            let forma__data = new FormData(document.getElementById('form-actualizar-equipamiento'));
            fetch(url__servidor+'actualizar-quipamiento',{
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

export function actualizar__seguridad(){
  var url__servidor = 'https://adhoc.com.co/'
    let form__actualizar__info__vehiculo = document.getElementById('form-actaulizar-seguridad')
    if(form__actualizar__info__vehiculo){
          form__actualizar__info__vehiculo.addEventListener('submit',function(evento){
            evento.preventDefault();
            let forma__data = new FormData(document.getElementById('form-actaulizar-seguridad'));
            fetch(url__servidor+'actualizar-seguridad',{
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



export function actualizar__informacion__contacto(){
    let form__actualizar__info__vehiculo = document.getElementById('form-actaulizar-contactos')
    if(form__actualizar__info__vehiculo){
          form__actualizar__info__vehiculo.addEventListener('submit',function(evento){
            evento.preventDefault();
            let forma__data = new FormData(document.getElementById('form-actaulizar-contactos'));
            fetch(url__servidor+'actualizar-contacto',{
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