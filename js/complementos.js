export function abrir__menu(){
    let abrir__menu = document.getElementById('abrir-menu');
    if(abrir__menu){
  abrir__menu.addEventListener('click',function(){
      document.getElementById("myNav").style.width = "19%";
      
    })
    }
      }
    
   export function cerrar__menu() {
    let cerrar__menu = document.getElementById('cerrar-menu');
    if(cerrar__menu){
     cerrar__menu.addEventListener('click',function(){
         document.getElementById("myNav").style.width = "0%";
     })
    }
    }

 export function cerrar__ventana(){
  let cerrar__ventana = document.getElementById('cerrar-ventana');
  let ventana__perfil =  document.getElementById('ventana-perfil');
  if(cerrar__ventana){
   cerrar__ventana.addEventListener('click',function(){
     ventana__perfil.style.display="none"
   })
  }
 }