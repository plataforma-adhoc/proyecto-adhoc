window.addEventListener("load",function(){
  document.getElementById('loader').classList.remove('loader')

})

  AOS.init();
 

import {cerrar__ventana,carrousel} from'./complementos.js';
cerrar__ventana();
carrousel()



import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso,modal__cambio__contrasena__usuario,buscar__carro} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();
modal__cambio__contrasena__usuario();
buscar__carro()


import {datos__obligatorios__del__vehiculo,informacion__adicional__vehiculo,guardar__imagenes__vehiculo,contacto__vendedor} from './datos-vehiculo.js';
datos__obligatorios__del__vehiculo();
informacion__adicional__vehiculo();
guardar__imagenes__vehiculo();
contacto__vendedor();


import {newsletter,newsletter__blog} from './newsletter.js';
newsletter();
newsletter__blog();


import {actualizar__info__vehculo,actualizar__diseño__y__estilo,actualizar__equipamiento,actualizar__seguridad,actualizar__informacion__contacto} from './actualizar-info-vehiculo.js';
actualizar__info__vehculo()
actualizar__diseño__y__estilo();
actualizar__equipamiento();
actualizar__seguridad();
actualizar__informacion__contacto();

import {insertar__comentarios,mostrar__comentario} from './comentarios.js';
insertar__comentarios();

setInterval(() => {
  mostrar__comentario();
}, 5000);


