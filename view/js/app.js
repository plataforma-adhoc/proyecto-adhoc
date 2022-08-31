
AOS.init();


import {abrir__menu,cerrar__menu} from'./usuario.js';
abrir__menu();
cerrar__menu();

import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso,modal__cambio__contrasena__usuario,validar__datos__usuario} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();
modal__cambio__contrasena__usuario();
validar__datos__usuario();



import {insert__datos__conductor,insert__login__conductor,password__conductor,
    insert__datos__edit__perfil__conductor,actualizar__contrasena,metodo__de__pago, modal__cambio__contrasena__conductor,modal__Notificaciones, conectarse,
  desconectarse} from './insert-datos-conductor.js';
insert__datos__conductor();
insert__login__conductor();
password__conductor();
insert__datos__edit__perfil__conductor();
actualizar__contrasena();
metodo__de__pago();
modal__cambio__contrasena__conductor();
modal__Notificaciones();
conectarse()
desconectarse();







import {comentarios__usuario,mostrar__comentario} from './comentarios-usuario.js';
comentarios__usuario();
mostrar__comentario();

import {comentarios__conductor,mostrar__comentario__conductor} from'./comentarios-conductor.js';
comentarios__conductor(),
mostrar__comentario__conductor();





import {obtener__solicitudes} from'./obtener-solicitudes.js';
obtener__solicitudes();



import {insertar__sugerencia__usaurio,insertar__sugerencia__conductor} from'./sugerencias.js';
insertar__sugerencia__usaurio()
insertar__sugerencia__conductor()














// var modal = document.getElementById("myModal");
// var btn = document.getElementById("card-cambiar-contrasena");


// var span = document.getElementsByClassName("close")[0];

// if(btn){
//   btn.onclick = function() {
//     modal.style.display = "block";
//   }

// }

// if(span){
//   span.onclick = function() {
//     modal.style.display = "none";
//   }

// }



    let btn__back =  document.getElementById('btn-back');
    if(btn__back){
     btn__back.addEventListener('click',function(){
        window.history.back();
     })
    }

