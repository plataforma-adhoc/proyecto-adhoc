export function insert__datos__usuario(){
    let formulario__registro = document.getElementById('formulario-registro-usuario');
    if(formulario__registro){
     formulario__registro.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let data = new FormData(document.getElementById('formulario-registro-usuario'))
        fetch('insert-datos-usuario',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(datos =>{
           if(datos == 'true'){
            window.location.href = './dashboard-usuario';

           }else{
            Swal.fire({
                icon: 'error',
                title: `${datos}`,
                footer: 'Esta informacion es importante',
               
              })
           }
        })
     })
    }
}


export function  insert__login__usuario(){
  let login__usuario = document.getElementById('formulario-login');
  if(login__usuario){
    login__usuario.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let datos = new FormData(document.getElementById('formulario-login'));
        fetch('insert-login-usuario',{
            method:'POST',
            body:datos

        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data ==  'true'){
                window.location.href = './dashboard-usuario';
            }else{
                Swal.fire({
                    icon: 'error',
                    title: `${data}`,
                    footer: 'Esta informacion es importante',
                   
                  })
            }
        })
    })
  }  
}

export function password__usuario(){
  let contrasena = document.getElementById('formulario-contraseña');
  
  if(contrasena){
   contrasena.addEventListener('submit',function(evento){

    let datos = new FormData( document.getElementById('formulario-contraseña'))
    evento.preventDefault();
     fetch('insert-contrasena-usuario',{
      method:'POST',
      body:datos
     }).then(respuesta => respuesta.json())
     .then(data=>{
      console.log(data)
      if(data == 'ok'){
        Swal.fire({
          icon: 'success',
          title: `Hemos enviado un correo con una contraseña temporal`,
          footer: 'Esta informacion es importante',
         
        })
      }else{
        Swal.fire({
            icon: 'error',
            title: `${data}`,
            footer: 'Esta informacion es importante',
           
          })

      }

          
        
     })
   })
  }
}

export  function actualizar__contrasena__usuario(){
  let cambiar__contrasena = document.getElementById('formulario-actaulizar-contrasena-usuario');
  if(cambiar__contrasena){
   cambiar__contrasena.addEventListener('submit',function(evento){
    evento.preventDefault();

   let data = new FormData( document.getElementById('formulario-actaulizar-contrasena-usuario'));
    fetch('insert-nueva-contrasena-usuario',{
      method:'POST',
      body:data
    }).then(respuesta => respuesta.json())
    .then(datos =>{
      if(datos === 'ok'){
        Swal.fire({
          background:'#202F36',
          icon: 'success',
          title: `Tu contraseña se actualizo con exito`,
          toast:true,
          position:'bottom-end',
          confirmButtonText:'De acuerdo',
         
         
        })

      }else{
        Swal.fire({
          background:'#202F36',
          icon: 'error',
          title: `${datos}`,
          confirmButtonText:'De acuerdo',
          footer: 'Esta informacion es importante',
         
        })

      }
      
    })
    
     
   })
  }
  }


  export function formulario__completar__proceso(){
     let formulario__fin__de__compra = document.getElementById('formulario-fin-de-compra');
     if(formulario__fin__de__compra){
     formulario__fin__de__compra.addEventListener('submit',function(event){
       event.preventDefault();
       let data = new FormData(document.getElementById('formulario-fin-de-compra'))
       fetch('insert-datos-fin-compra',{
        method:'POST',
        body:data
       }).then(respuesta => respuesta.json())
       .then(datos =>{
        if(datos === 'true'){
          Swal.fire({
            background:'#202F36',
            icon: 'success',
            title: `Tu proceso se ha completado con exito`
          
          })
          window.location.href='./dashboard-usuario'

        }else{
          Swal.fire({
            background:'#202F36',
            icon: 'error',
            title: `${datos}`,
            confirmButtonText:'De acuerdo',
            footer: 'Esta informacion es importante',
           
          })
        }
       })
     })
     } 
  }

  export function modal__cambio__contrasena__usuario(){
    var modal = document.getElementById("myModalCambioContrasena");
    var btn = document.getElementById("card-cambiar-contrasena");
    
    
    var span = document.getElementsByClassName("close")[0];
    
    if(btn){
      btn.onclick = function() {
        modal.style.display = "block";
      }
    
    }
    
    if(span){
      span.onclick = function() {
        modal.style.display = "none";
      }
    
    }
     }