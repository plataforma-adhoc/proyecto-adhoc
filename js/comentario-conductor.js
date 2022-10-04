var url__servidor = 'https://www.adhoc.com.co/'





// export function mostrar__comentario__conductor(){
//   let xhr  =  new XMLHttpRequest()
//   xhr.open("POST",url__servidor+"obtener-comentarios-conductor.php",true) 
//   xhr.onload = () =>{
//     if(xhr.readyState === XMLHttpRequest.DONE){
//     if(xhr.status === 200){
//      let data = xhr.response
//      let comentarios = document.getElementById('comentario-conductor');
//      comentarios.innerHTML = data;
     
//     }
//   }
// } 
// let form__comentario__usuario = document.getElementById('formulario-comentario-conductor')
// if(form__comentario__usuario){
//   let form__data = new FormData(form__comentario__usuario)
//      xhr.send(form__data);

// }


  
// }




    // setInterval(function(){
    //   mostrar__comentario__conductor();
    // },1000)




    
    export function comentarios__conductor(){
      let form__me_gusta = document.getElementById('form-comentario-conductor');
      if(form__me_gusta){
       form__me_gusta.addEventListener('submit',function(evento){
        evento.preventDefault();
        let form__data = new FormData(document.getElementById('form-comentario-conductor'))
        fetch(url__servidor+'insert-comentario-conductor.php',{
          method:'POST',
          body:form__data
        }).then(respuesta => respuesta.json())
        .then(data =>{
          if(data == 'true'){
            Swal.fire({
              icon:'success',
              toast:true,
              position:'top-end',
              background:'#212F37',
              text: 'Gracias por tu calificación',
            })
            
          }else{
           alert('error')
  
          }
        })
       })
      }
     }
  
     