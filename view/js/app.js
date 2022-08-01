
AOS.init();


import {abrir__menu,cerrar__menu} from'./usuario.js';
abrir__menu();
cerrar__menu();

import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();



import {insert__datos__conductor,insert__login__conductor,password__conductor,
    insert__datos__edit__perfil__conductor,actualizar__contrasena} from './insert-datos-conductor.js';
insert__datos__conductor();
insert__login__conductor();
password__conductor();
insert__datos__edit__perfil__conductor();
actualizar__contrasena();


import { modal__servicios} from './modal.js';
modal__servicios();



import {comentarios__usuario,mostrar__comentario} from './comentarios.js';
comentarios__usuario();
mostrar__comentario();




















var modal = document.getElementById("myModal");
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




