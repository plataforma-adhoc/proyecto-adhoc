
AOS.init();


import {abrir__menu,cerrar__menu} from'./usuario.js';
abrir__menu();
cerrar__menu();

import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso,modal__cambio__contrasena__usuario} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();
modal__cambio__contrasena__usuario();



import {insert__datos__conductor,insert__login__conductor,password__conductor,
    insert__datos__edit__perfil__conductor,actualizar__contrasena,metodo__de__pago, modal__cambio__contrasena__conductor,modal__Notificaciones,
  
  } from './insert-datos-conductor.js';
insert__datos__conductor();
insert__login__conductor();
password__conductor();
insert__datos__edit__perfil__conductor();
actualizar__contrasena();
metodo__de__pago();
modal__cambio__contrasena__conductor();
modal__Notificaciones();





import { modal__servicios} from './modal.js';
modal__servicios();



import {comentarios__usuario,mostrar__comentario} from './comentarios-usuario.js';
comentarios__usuario();
mostrar__comentario();

import {comentarios__conductor,mostrar__comentario__conductor} from'./comentarios-conductor.js';
comentarios__conductor(),
mostrar__comentario__conductor();





import {obtener__solicitudes} from'./obtener-solicitudes.js';
obtener__solicitudes();



















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




