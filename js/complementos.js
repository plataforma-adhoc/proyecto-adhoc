

 export function cerrar__ventana(){
  let cerrar__ventana = document.getElementById('cerrar-ventana');
  let ventana__perfil =  document.getElementById('ventana-perfil');
  if(cerrar__ventana){
   cerrar__ventana.addEventListener('click',function(){
     ventana__perfil.style.display="none"
   })
  }
 }

export function abrir__modal__calificaciones(){
  let btn__abrir__modal = document.getElementById('myBtn');
  var modal__recorrido =  document.querySelector('.modal__recorrido');

  if(btn__abrir__modal){
    btn__abrir__modal.addEventListener('click',function(){
     modal__recorrido.style.display="block"
    })
  }
}


 export function cerrar__modal__calificaciones(){
  let modal__recorrido =  document.querySelector('.modal__recorrido');
 let cerrar__modal__calificacion = document.getElementById('cerrar-modal-calificacion');
 if(cerrar__modal__calificacion){
    cerrar__modal__calificacion.addEventListener('click',function(){
  modal__recorrido.style.display='none'
    })
 }
 }