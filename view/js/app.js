
AOS.init();


import {abrir__menu,cerrar__menu} from'./usuario.js';
abrir__menu();
cerrar__menu();

import {insert__datos__usuario, insert__login__usuario,password__usuario,actualizar__contrasena__usuario} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();



import {insert__datos__conductor,insert__login__conductor,password__conductor,
    insert__datos__edit__perfil__conductor,actualizar__contrasena} from './insert-datos-conductor.js';
insert__datos__conductor();
insert__login__conductor();
password__conductor();
insert__datos__edit__perfil__conductor();
actualizar__contrasena();


var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("card-cambiar-contrasena");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}




