export function comentarios__conductor(){
    let form__comentario = document.getElementById('formulario-comentario-conductor');
    if(form__comentario){
      form__comentario.addEventListener('submit',function(evento){
        evento.preventDefault();
           let form__data = new FormData(document.getElementById('formulario-comentario-conductor'))

           fetch('insert-comentarios-conductor.php',{
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



export function mostrar__comentario__conductor(){
  let xhr  =  new XMLHttpRequest()
  xhr.open("POST","obtener-comentarios-conductor.php",true) 
  xhr.onload = () =>{
    if(xhr.readyState === XMLHttpRequest.DONE){
    if(xhr.status === 200){
     let data = xhr.response
     let comentarios = document.getElementById('comentario-conductor');
     comentarios.innerHTML = data;
     
    }
  }
} 
let form__comentario__usuario = document.getElementById('formulario-comentario-conductor')
if(form__comentario__usuario){
  let form__data = new FormData(form__comentario__usuario)
     xhr.send(form__data);

}


  
}




    setInterval(function(){
      mostrar__comentario__conductor();
    },1000)




    
       