
var url__servidor = 'https://www.adhoc.com.co/'
// export function comentarios__usuario(){
//     let form__comentario__usuario = document.getElementById('form-comentario-usuario');
//     if(form__comentario__usuario){
//       form__comentario__usuario.addEventListener('submit',function(evento){
//         evento.preventDefault();
//            let form__data = new FormData(document.getElementById('form-comentario-usuario'))

//            fetch(url__servidor+'insert-comentarios-usuario.php',{
//              method:'POST',
//              body:form__data
//            }).then(respuesta => respuesta.json())
//            .then(data =>{
//             if(data === 'true'){
//               let respuesta__comentario =  document.getElementById('respuesta-comentario').value = "";
//             }
//            })
//       })
//     }
// }



// export function mostrar__comentario(){
//   let xhr  =  new XMLHttpRequest()
//   xhr.open("POST",url__servidor+"obtener-comentarios-usuario.php",true) 
//   xhr.onload = () =>{
//     if(xhr.readyState === XMLHttpRequest.DONE){
//     if(xhr.status === 200){
//      let data = xhr.response
//      let comentario__usuario = document.getElementById('comentario-usuario');
//      comentario__usuario.innerHTML = data;
     
//     }
//   }
// } 
// let form__comentario__usuario = document.getElementById('form-comentario-usuario')
// if(form__comentario__usuario){
//   let form__data = new FormData(form__comentario__usuario)
//      xhr.send(form__data);

// }


  
// }

//     setInterval(function(){
//       mostrar__comentario();
    
//     },1000)

export function comentario__usuario(){
  let form__me_gusta = document.getElementById('form-comentario');
  if(form__me_gusta){
   form__me_gusta.addEventListener('submit',function(evento){
    evento.preventDefault();
    let form__data = new FormData(document.getElementById('form-comentario'))
    fetch(url__servidor+'insert-comentario-usuario.php',{
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

 