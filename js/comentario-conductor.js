var url__servidor = 'https://adhoc.com.co/'

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
  
     