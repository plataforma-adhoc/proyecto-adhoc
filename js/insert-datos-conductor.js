

   var url__servidor__conductor = 'https://www.adhoc.com.co/'
   const inputs =  document.querySelectorAll('#formulario-registro-conductor input');
   const expresiones = {
   nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   primer__apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   segundo__apellido: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
   email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
   documento: /^\d{7,14}$/, // 7 a 14 numeros.
   telefono: /^\d{7,14}$/, // 7 a 14 numeros.
   licencia: /^\d{7,14}$/, // 7 a 14 numeros.
   categoria: /^[a-zA-ZÀ-ÿ\s]/, // 7 a 14 numeros.
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


         if(document.querySelector('#grupo__nombre .formulario__input-error').classList.remove('formulario__input-error-activo')   ){
          document.querySelector('#grupo__nombre .formulario__input-error').classList.remove('formulario__input-error-activo')
         }
         
      }else{
        document.getElementById('grupo__nombre').classList.add('formulario__grupo-incorrecto');
        document.getElementById('grupo__nombre').classList.remove('formulario__grupo-correcto');
        document.querySelector('#grupo__nombre i').classList.add('fa-times-circle')
         document.querySelector('#grupo__nombre i').classList.remove('fa-check-circle')
      
        if(  document.querySelector('#grupo__nombre .formulario__input-error').classList.add('formulario__input-error-activo')){
          document.querySelector('#grupo__nombre .formulario__input-error').classList.add('formulario__input-error-activo')
         }

      }

    
		break;
		case "primerApellido":  
			if(expresiones.primer__apellido.test(e.target.value)){
        document.getElementById('grupo__primer__apellido').classList.remove('formulario__grupo-incorrecto');
        document.getElementById('grupo__primer__apellido').classList.add('formulario__grupo-correcto');
        document.querySelector('#grupo__primer__apellido i').classList.add('fa-check-circle')
        document.querySelector('#grupo__primer__apellido i').classList.remove('fa-times-circle')


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

        case "licencia":
        if(expresiones.licencia.test(e.target.value)){
          document.getElementById('grupo__licencia').classList.remove('formulario__grupo-incorrecto');
          document.getElementById('grupo__licencia').classList.add('formulario__grupo-correcto');
          document.querySelector('#grupo__licencia i').classList.add('fa-check-circle')
          document.querySelector('#grupo__licencia i').classList.remove('fa-times-circle')
          document.querySelector('#grupo__licencia .formulario__input-error').classList.remove('formulario__input-error-activo')
  
  
        }else{
          document.getElementById('grupo__licencia').classList.add('formulario__grupo-incorrecto');
          document.getElementById('grupo__licencia').classList.remove('formulario__grupo-correcto');
          document.querySelector('#grupo__licencia i').classList.add('fa-times-circle')
           document.querySelector('#grupo__licencia i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__licencia .formulario__input-error').classList.add('formulario__input-error-activo')

        }
        break

        case "categoria":
        if(expresiones.categoria.test(e.target.value)){
          document.getElementById('grupo__categoria').classList.remove('formulario__grupo-incorrecto');
          document.getElementById('grupo__categoria').classList.add('formulario__grupo-correcto');
          document.querySelector('#grupo__categoria i').classList.add('fa-check-circle')
          document.querySelector('#grupo__categoria i').classList.remove('fa-times-circle')
          document.querySelector('#grupo__categoria .formulario__input-error').classList.remove('formulario__input-error-activo')
  
  
        }else{
          document.getElementById('grupo__categoria').classList.add('formulario__grupo-incorrecto');
          document.getElementById('grupo__categoria').classList.remove('formulario__grupo-correcto');
          document.querySelector('#grupo__categoria i').classList.add('fa-times-circle')
           document.querySelector('#grupo__categoria i').classList.remove('fa-check-circle')
         document.querySelector('#grupo__categoria .formulario__input-error').classList.add('formulario__input-error-activo')

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
  




export function insert__datos__conductor(){
    let formulario__registro = document.getElementById('formulario-registro-conductor');
    if(formulario__registro){
     formulario__registro.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let data = new FormData(document.getElementById('formulario-registro-conductor'))
        fetch(url__servidor__conductor+'insert-datos-conductor.php',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(datos =>{


           if(datos === 'true'){
            window.location.href = 'dashboard-conductor.php';

           }else{
            Swal.fire({
              background:'#202F36',
                icon: 'error',
                title: `Atención`,
                footer: `${datos}`,
               
              })
           }
        })
     })
    }
}

const  inputs__login = document.querySelectorAll('#formulario-login-conductor input')

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

export function  insert__login__conductor(){
  let login__usuario = document.getElementById('formulario-login-conductor');
  if(login__usuario){
    login__usuario.addEventListener('submit',function(evento){
        evento.preventDefault();
        
        let datos = new FormData(document.getElementById('formulario-login-conductor'));
        fetch(url__servidor__conductor+'insert-login-conductor.php',{
            method:'POST',
            body:datos

        }).then(respuesta => respuesta.json())
        .then(data =>{
            if(data ===  'true'){
                window.location.href = 'dashboard-conductor.php';
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

export function password__conductor(){
  let contrasena = document.getElementById('formulario-contrasena');
  
  if(contrasena){
   contrasena.addEventListener('submit',function(evento){

    let datos = new FormData( document.getElementById('formulario-contrasena'))
    evento.preventDefault();
     fetch(url__servidor__conductor+'insert-contrasena-conductor.php',{
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

export function insert__datos__edit__perfil__conductor(){
  let contrasena = document.getElementById('formulario-edit-perfil');
  
  if(contrasena){
   contrasena.addEventListener('submit',function(evento){

    let datos = new FormData( document.getElementById('formulario-edit-perfil'))
    evento.preventDefault();
     fetch(url__servidor__conductor+'insert-edit-perfil-conductor.php',{
      method:'POST',
      body:datos
     }).then(respuesta => respuesta.json())
     .then(data=>{
      console.log(data)
      if(data =='true'){
       window.location.reload();
      }
          
        
     })
   })
  }
}


export  function actualizar__contrasena(){
  let cambiar__contrasena = document.getElementById('formulario-actaulizar-contrasena-conductor');
  if(cambiar__contrasena){
   cambiar__contrasena.addEventListener('submit',function(evento){
    evento.preventDefault();

   let data = new FormData( document.getElementById('formulario-actaulizar-contrasena-conductor'));
    fetch(url__servidor__conductor+'insert-nueva-contrasena-conductor.php',{
      method:'POST',
      body:data
    }).then(respuesta => respuesta.json())
    .then(datos =>{
      if(datos == 'true'){
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



  export function metodo__de__pago(){
    let metodo__de__pago = document.getElementById('formulario-metodo-pago');
  if(metodo__de__pago ){
   metodo__de__pago.addEventListener('submit',function(evento){
    evento.preventDefault();

   let data = new FormData( document.getElementById('formulario-metodo-pago'));
   console.log(data);
    fetch(url__servidor__conductor+'insert-metodo-pago.php',{
      method:'POST',
      body:data
    }).then(respuesta => respuesta.json())
    .then(datos =>{
     if(datos == 'ok'){
      console.log(datos);
      Swal.fire({
        background:'#202F36',
        icon: 'success',
        title: `Tu metodo de pago se configuro`,
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
 
  

 export function modal__cambio__contrasena__conductor(){
var modal = document.getElementById("myModalCambioContrasena");
var btn = document.getElementById("card-cambiar-contrasena")
var span = document.getElementById('cerrar-modal');

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

 export function modal__Notificaciones(){
  var modal = document.getElementById("myModalNotificaciones");
  var span = document.getElementsByClassName("close")[0];

  var btn = document.getElementById("abrir-modal");

  if(btn){
   btn.addEventListener('click',function(){
    modal.style.display = "block";
   })
  }

 
  if(span){
    span.addEventListener('click',function(){
      modal.style.display = "none";
    })
  
  }


   }

   export function conectarse(){
    let form__conectarse = document.getElementById('form-conectarse');
    if(form__conectarse){
    form__conectarse.addEventListener('submit',function(evento){
     evento.preventDefault();

     let form__data = new FormData(document.getElementById('form-conectarse'))
    fetch(url__servidor__conductor+'conectarse.php',{
      method:'POST',
      body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
      if(data === 'true'){
        window.location.reload()
      }
    })
    })
    }
   }


   export function desconectarse(){
    let form__desconectarse = document.getElementById('form-desconectarse');
    if(form__desconectarse){
    form__desconectarse.addEventListener('submit',function(evento){
     evento.preventDefault();

     let form__data = new FormData(document.getElementById('form-desconectarse'))
    fetch(url__servidor__conductor+'desconectarse.php',{
      method:'POST',
      body:form__data
    }).then(respuesta => respuesta.json())
    .then(data =>{
      if(data ==='true'){
        window.location.reload()
      }
    })
    })
    }
   }


   
export function recargar__solicitudes__conductores(){
  let contenedor__dasboard = document.getElementById('contenedor-dashboard');
  console.log('cargando..')
 }
 
 setInterval(recargar__solicitudes__conductores,5000)