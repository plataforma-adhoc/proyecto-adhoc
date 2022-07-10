export function insert__datos__conductor(){
    let formulario__registro = document.getElementById('formulario-registro-conductor');
    if(formulario__registro){
     formulario__registro.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let data = new FormData(document.getElementById('formulario-registro-conductor'))
        fetch('insert-datos-conductor',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(datos =>{
           if(datos == 'true'){
            window.location.href = './dashboard-conductor';

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


export function  insert__login__conductor(){
  let login__usuario = document.getElementById('formulario-login-conductor');
  if(login__usuario){
    login__usuario.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let datos = new FormData(document.getElementById('formulario-login-conductor'));
        fetch('insert-login-conductor',{
            method:'POST',
            body:datos

        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data ==  'true'){
                window.location.href = './dashboard-conductor';
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

export function password__conductor(){
  let contrasena = document.getElementById('formulario-contrasena');
  
  if(contrasena){
   contrasena.addEventListener('submit',function(evento){

    let datos = new FormData( document.getElementById('formulario-contrasena'))
    evento.preventDefault();
     fetch('insert-contrasena-conductor',{
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