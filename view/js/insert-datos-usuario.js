
   const inputs =  document.querySelectorAll('#formulario-registro-usuario input');
   const expresiones = {
   nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   primer__apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   segundo__apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
   documento: /^\d{7,14}$/, // 7 a 14 numeros.
   telefono: /^\d{7,14}$/, // 7 a 14 numeros.
   contrasena: /^.{4,12}$/, // 4 a 12 digitos.
 
   }

   const campos = {
    nombre: false,
    usuario: false,
    segundo: false,
    email: false,
    documento:false,
    telefono:false,
    contrasena:false
  }

  

 const   validar__formulario = (e) =>{
  switch (e.target.name) {
		case "nombre":
      if(expresiones.nombre.test(e.target.value)){
        document.getElementById('grupo__nombre').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__nombre').classList.add('formulario__grupo-correcto');
         document.querySelector('#grupo__nombre i').classList.add('fa-check-circle')
         document.querySelector('#grupo__nombre i').classList.remove('fa-times-circle')
         document.querySelector('#grupo__nombre .formulario__input-error').classList.remove('formulario__input-error-activo')
         
      }else{
        document.getElementById('grupo__nombre').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__nombre').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__nombre i').classList.add('fa-times-circle')
         document.querySelector('#grupo__nombre i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__nombre .formulario__input-error').classList.add('formulario__input-error-activo')

      }

    
		break;
		case "primerApellido":  
			if(expresiones.primer__apellido.test(e.target.value)){
        document.getElementById('grupo__primer__apellido').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__primer__apellido').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__primer__apellido i').classList.add('fa-check-circle')
        document.querySelector('#grupo__primer__apellido i').classList.remove('fa-times-circle')
        document.querySelector('#grupo__nombre .formulario__input-error').classList.remove('formulario__input-error-activo')


      }else{
        document.getElementById('grupo__primer__apellido').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__primer__apellido').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__primer__apellido i').classList.add('fa-times-circle')
         document.querySelector('#grupo__primer__apellido i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__primer__apellido .formulario__input-error').classList.add('formulario__input-error-activo')

      }

			// validarPassword2();
		break;
		case "segundoApellido":
      if(expresiones.segundo__apellido.test(e.target.value)){
        document.getElementById('grupo__segundo__apellido').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__segundo__apellido').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__segundo__apellido i').classList.add('fa-check-circle')
        document.querySelector('#grupo__segundo__apellido i').classList.remove('fa-times-circle')
        document.querySelector('#grupo__segundo__apellido .formulario__input-error').classList.remove('formulario__input-error-activo')


      }else{
        document.getElementById('grupo__segundo__apellido').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__segundo__apellido').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__segundo__apellido i').classList.add('fa-times-circle')
         document.querySelector('#grupo__segundo__apellido i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__segundo__apellido .formulario__input-error').classList.add('formulario__input-error-activo')

      }

			// validarPassword2();
		break;
		case "email":
			if(expresiones.email.test(e.target.value)){
        document.getElementById('grupo__email').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__email').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__email i').classList.add('fa-check-circle')
        document.querySelector('#grupo__email i').classList.remove('fa-times-circle')
        document.querySelector('#grupo__nombre .formulario__input-error').classList.add('formulario__input-error-activo')
        document.querySelector('#grupo__email .formulario__input-error').classList.remove('formulario__input-error-activo')


      }else{
        document.getElementById('grupo__email').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__email').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__email i').classList.add('fa-times-circle')
         document.querySelector('#grupo__email i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__email .formulario__input-error').classList.add('formulario__input-error-activo')

      }
		break;
		case "documento":
      if(expresiones.documento.test(e.target.value)){
        document.getElementById('grupo__documento').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__documento').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__documento i').classList.add('fa-check-circle')
        document.querySelector('#grupo__documento i').classList.remove('fa-times-circle')
        document.querySelector('#grupo__documento .formulario__input-error').classList.remove('formulario__input-error-activo')


      }else{
        document.getElementById('grupo__documento').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__documento').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__documento i').classList.add('fa-times-circle')
         document.querySelector('#grupo__documento i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__documento .formulario__input-error').classList.add('formulario__input-error-activo')

      }
      break;
      case "telefono":
        if(expresiones.telefono.test(e.target.value)){
          document.getElementById('grupo__telefono').classList.remove('formulario__grupo-incorrecto');
          document.getElementById('grupo__telefono').classList.add('formulario__grupo-correcto');
          document.querySelector('#grupo__telefono i').classList.add('fa-check-circle')
          document.querySelector('#grupo__telefono i').classList.remove('fa-times-circle')
          document.querySelector('#grupo__telefono .formulario__input-error').classList.remove('formulario__input-error-activo')
  
  
        }else{
          document.getElementById('grupo__telefono').classList.add('formulario__grupo-incorrecto');
          document.getElementById('grupo__telefono').classList.remove('formulario__grupo-correcto');
          document.querySelector('#grupo__telefono i').classList.add('fa-times-circle')
           document.querySelector('#grupo__telefono i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__telefono .formulario__input-error').classList.add('formulario__input-error-activo')

        }
        break
      case "contrasena":
        if(expresiones.contrasena.test(e.target.value)){
          document.getElementById('grupo__contrasena').classList.remove('formulario__grupo-incorrecto');
          document.getElementById('grupo__contrasena').classList.add('formulario__grupo-correcto');
          document.querySelector('#grupo__contrasena i').classList.add('fa-check-circle')
          document.querySelector('#grupo__contrasena i').classList.remove('fa-times-circle')
          document.querySelector('#grupo__contrasena .formulario__input-error').classList.remove('formulario__input-error-activo')
  
  
        }else{
          document.getElementById('grupo__contrasena').classList.add('formulario__grupo-incorrecto');
          document.getElementById('grupo__contrasena').classList.remove('formulario__grupo-correcto');
          document.querySelector('#grupo__contrasena i').classList.add('fa-times-circle')
           document.querySelector('#grupo__contrasena i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__contrasena .formulario__input-error').classList.add('formulario__input-error-activo')

        }
      
		break;
	}
 }

 




 inputs.forEach((input)=>{
  input.addEventListener('keyup', validar__formulario)
  // input.addEventListener('blur', validar__formulario)


  
  })
  

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
              background:'#202F36',
                icon: 'error',
                title: `${datos}`,
                footer: 'Esta informacion es importante',
               
              })
           }
        })
     })
    }
}


const  inputs__login = document.querySelectorAll('#formulario-login input')

const validar__formulario__login = (e) =>{
  switch(e.target.name){
    case "email":
     validarCampo(expresiones.email,e.target, 'email')
		break;
  }
}

const validarCampo = (expresion, input, campo) => {
  if(expresion.test(input.value)){
    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-incorrecto');
    document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-correcto');
    document.querySelector(`#grupo__${campo} i`).classList.add('fa-check-circle');
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-times-circle');
    document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.remove('formulario__input-error-activo');
    campos[campo] = true;
  } else {
    document.getElementById(`grupo__${campo}`).classList.add('formulario__grupo-incorrecto');
    document.getElementById(`grupo__${campo}`).classList.remove('formulario__grupo-correcto');
    document.querySelector(`#grupo__${campo} i`).classList.add('fa-times-circle');
    document.querySelector(`#grupo__${campo} i`).classList.remove('fa-check-circle');
    document.querySelector(`#grupo__${campo} .formulario__input-error`).classList.add('formulario__input-error-activo');
    campos[campo] = false;
  }
}

inputs__login.forEach((input)=>{
  input.addEventListener('keyup', validar__formulario__login)
  // input.addEventListener('blur', validar__formulario)


  
  })

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
                  background:'#202F36',
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
          background:'#202F36',
          icon: 'success',
          title: `Hemos enviado un correo con una contraseña temporal`,
          footer: 'Esta informacion es importante',
         
        })
      }else{
        Swal.fire({
          background:'#202F36',
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

     export function validar__datos__usuario() {
    
     }


    