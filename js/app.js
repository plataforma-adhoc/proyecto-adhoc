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

import {datosDeLaMoto,fotosDeLaMoto,contactoVendedorMoto} from'./datos-moto.js';
datosDeLaMoto();
fotosDeLaMoto();
contactoVendedorMoto();

import {actualizarInfoMoto,actualizarContactoMoto} from './actualizar-info-moto.js'
actualizarInfoMoto();
actualizarContactoMoto()
setInterval(() => {
  mostrar__comentario();
}, 5000);


let slider = document.querySelector(".slider-contenedor")
let sliderIndividual = document.querySelectorAll(".contenido-slider")
let contador = 1;
let width = sliderIndividual[0].clientWidth;
let intervalo = 5000;

window.addEventListener("resize", function(){
    width = sliderIndividual[0].clientWidth;
})

setInterval(function(){
    slides();
},intervalo);

function slides(){
    slider.style.transform = "translate("+(-width*contador)+"px)";
    slider.style.transition = "transform .8s";
    contador++;

    if(contador == sliderIndividual.length){
        setTimeout(function(){
            slider.style.transform = "translate(0px)";
            slider.style.transition = "transform .8s";
            contador=1;
        },2500)
    }
}

document.addEventListener('DOMContentLoaded', function() {
  var menu = document.querySelector('.nav__hero');
  var altura = menu.offsetTop;
  
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > altura) {
      menu.classList.add('menu__sticky');
    } else {
      menu.classList.remove('menu__sticky');
    }
  });
});


