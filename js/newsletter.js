export function newsletter(){
    var url__servidor = 'https://adhoc.com.co/'
    let formulario__newsletter = document.getElementById('formulario-newsletter')
    if(formulario__newsletter){
      formulario__newsletter.addEventListener('submit',function(evento){
        evento.preventDefault();
        let data = new FormData(document.getElementById('formulario-newsletter'))
        fetch(url__servidor+'insert-email-newsletter',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(datos =>{
          Swal.fire({
            background:'#212F37',
            color:'#ffff',
            toast: true,
            icon: 'success',
            title: `${datos}`,
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
        let input__email = document.getElementById('input-email')
        input__email.value = ""
        })
    
      })
    }
}
export function newsletter__blog(){
  var url__servidor = 'https://adhoc.com.co/'
  let formulario__newsletter = document.getElementById('formulario-newsletter-blog')
  if(formulario__newsletter){
    formulario__newsletter.addEventListener('submit',function(evento){
      evento.preventDefault();
      let data = new FormData(document.getElementById('formulario-newsletter-blog'))
      fetch(url__servidor+'../insert-email-newsletter',{
          method:'POST',
          body:data
      }).then(respuesta => respuesta.json())
      .then(res =>{
        Swal.fire({
          background:'#212F37',
          color:'#ffff',
          toast: true,
          icon: 'success',
          title: `${res}`,
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
        console.log(res)
      let input__email = document.getElementById('input-email')
      input__email.value = ""
      })
  
    })
  }
}