export function abrir__menu(){
    let abrir__menu = document.getElementById('abrir-menu');
    if(abrir__menu){
  abrir__menu.addEventListener('click',function(){
      document.getElementById("myNav").style.width = "20%";
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