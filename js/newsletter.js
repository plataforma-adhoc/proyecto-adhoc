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
        let respuesta = document.getElementById('respuesta').innerHTML=`
        ${datos}
        `
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
      fetch(url__servidor+'../insert-email-newsletter-blog',{
          method:'POST',
          body:data
      }).then(respuesta => respuesta.json())
      .then(datos =>{
      let respuesta = document.getElementById('respuesta-newsletter').innerHTML=`
      ${datos}
      `
      let input__email = document.getElementById('input-email')
      input__email.value = ""
      })
  
    })
  }
}