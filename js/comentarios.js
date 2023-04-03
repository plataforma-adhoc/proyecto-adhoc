export function insertar__comentarios(){
    let formulario__comentario = document.getElementById('formulario-comentario');
    if(formulario__comentario){ 
    formulario__comentario.addEventListener('submit', function(event){
      var url__servidor = 'https://adhoc.com.co/'
        event.preventDefault();
        let form__data =  new FormData(document.getElementById('formulario-comentario'))
        fetch('insert-comentarios',{
            method:'POST',
            body:form__data
        }).then(respuesta =>  respuesta.json())
        .then(data =>{
          if(data === 'ok'){
            let mensaje = document.getElementById('mensaje').value =""
          } 
        })
    })
   } 
 }


 export function mostrar__comentario(){  
        let form__data =  new FormData(document.getElementById('formulario-comentario'))  
        var url__servidor = 'https://adhoc.com.co/'
        fetch('mostrar-comentarios',{
            method:'POST',
            body:form__data
        }).then(respuesta =>  respuesta.json())
        .then(data =>{
          
          var insertar__comentario =  document.getElementById('insertar-comentario')
          var  html ="";
          if(data.length > 0){
             data.forEach(element => {
             html += `
               <div class="mensaje">
               <img src="./img/avatar.png" alt="Imagen de perfil">
               <div class="contenido contenido__dos">
                 <p>${element.comentario}</p>
                 </div>
                 <p class="fecha__publicacion__comentario">Publicado el ${ element.fecha_comentario }</p>
               
             </div>
               
               `
              insertar__comentario.innerHTML= html;
             
             });
          

            }else{
           insertar__comentario.innerHTML=`
           <p class="texto__sin__comentarios">
           <i class="far fa-comment-alt icono__sin__comentario"></i>
           
           </p>
           
           <p class="texto__sin__comentarios">No hay comentarios, se el primero en comentar</p>
           `   
            }
        })
       
 }





