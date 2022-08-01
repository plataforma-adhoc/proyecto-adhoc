export function comentarios__usuario(){
    let form__comentario__usuario = document.getElementById('form-comentario-usuario');
    if(form__comentario__usuario){
      form__comentario__usuario.addEventListener('submit',function(evento){
        evento.preventDefault();
           let form__data = new FormData(document.getElementById('form-comentario-usuario'))

           fetch('insert-comentarios',{
             method:'POST',
             body:form__data
           }).then(respuesta => respuesta.json())
           .then(data =>{
            if(data === 'true'){
              let respuesta__comentario =  document.getElementById('respuesta-comentario').value = "";
            }
           })
      })
    }
}



export function mostrar__comentario(){
  let xhr  =  new XMLHttpRequest()
  xhr.open("POST","obtener-comentario",true) 
  xhr.onload = () =>{
    if(xhr.readyState === XMLHttpRequest.DONE){
    if(xhr.status === 200){
     let data = xhr.response
     let comentario__2 = document.getElementById('comentario-2');
     comentario__2.innerHTML = data;
     
    }
  }
} 
let form__comentario__usuario = document.getElementById('form-comentario-usuario')
if(form__comentario__usuario){
  let form__data = new FormData(form__comentario__usuario)
     xhr.send(form__data);

}


  
}

    setInterval(function(){
      mostrar__comentario();
    
    },1000)


   