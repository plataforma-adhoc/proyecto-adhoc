
  AOS.init();
  document.addEventListener("DOMContentLoaded", function(){
    var foo = document.querySelectorAll(".contenido__consejo__aleatorio"),
        i = Math.floor(Math.random() * foo.length);
  if(foo){
    foo[i].style.visibility = "visible";

  }
}, false)

import {cerrar__ventana,abrir__modal__calificaciones, cerrar__modal__calificaciones,abrir__modal__vehiculos} from'./complementos.js';
cerrar__ventana();
abrir__modal__calificaciones();
cerrar__modal__calificaciones();
abrir__modal__vehiculos();

import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso,modal__cambio__contrasena__usuario,buscar__carro} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();
modal__cambio__contrasena__usuario();
buscar__carro()




import {insertar__sugerencia__usuario} from'./sugerencias.js';
insertar__sugerencia__usuario()





import {datos__obligatorios__de__vehiculo,informacion__adicional__vehiculo,guardar__imagenes__vehiculo,contacto__vendedor} from './datos-vehiculo.js';
datos__obligatorios__de__vehiculo();
informacion__adicional__vehiculo();
guardar__imagenes__vehiculo();
contacto__vendedor();

