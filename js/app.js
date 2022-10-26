
AOS.init();


import {cerrar__ventana,abrir__modal__calificaciones, cerrar__modal__calificaciones,abrir__modal__vehiculos} from'./complementos.js';
cerrar__ventana();
abrir__modal__calificaciones();
cerrar__modal__calificaciones();
abrir__modal__vehiculos();

import {insert__datos__usuario, insert__login__usuario,
  password__usuario,actualizar__contrasena__usuario,formulario__completar__proceso,modal__cambio__contrasena__usuario,getData,recargar__conductores__disponibles,buscar__carro} from './insert-datos-usuario.js';
insert__datos__usuario();
insert__login__usuario();
password__usuario();
actualizar__contrasena__usuario();
formulario__completar__proceso();
modal__cambio__contrasena__usuario();
recargar__conductores__disponibles()
getData();
buscar__carro()



import {insert__datos__conductor,insert__login__conductor,password__conductor,
    insert__datos__edit__perfil__conductor,actualizar__contrasena,metodo__de__pago, modal__cambio__contrasena__conductor,modal__Notificaciones, conectarse,desconectarse,recargar__solicitudes__conductores} from './insert-datos-conductor.js';
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
recargar__solicitudes__conductores()







import {comentario__usuario} from './comentario-usuario.js';
comentario__usuario()


import {comentarios__conductor} from'./comentario-conductor.js';
comentarios__conductor()
// mostrar__comentario__conductor();








import {insertar__sugerencia__usaurio,insertar__sugerencia__conductor} from'./sugerencias.js';
insertar__sugerencia__usaurio()
insertar__sugerencia__conductor()


    let btn__back =  document.getElementById('btn-back');
    if(btn__back){
     btn__back.addEventListener('click',function(){
        window.history.back();
     })
    }

