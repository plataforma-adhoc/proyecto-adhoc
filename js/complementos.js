

 export function cerrar__ventana(){
  let cerrar__ventana = document.getElementById('cerrar-ventana');
  let ventana__perfil =  document.getElementById('ventana-perfil');
  if(cerrar__ventana){
   cerrar__ventana.addEventListener('click',function(){
     ventana__perfil.style.display="none"
   })
  }
 }


 


export function carrousel(){
  let indiceImagenActual = 0;
  const carousel = document.querySelector(".carousel");
  const mainImage = document.querySelector(".carousel-main img");
  const thumbnails = document.querySelectorAll(".carousel-thumbnails img");
  const botonAnterior = document.getElementById("boton-anterior");
const botonSiguiente = document.getElementById("boton-siguiente");
const totalImagenes = document.querySelector(".total__imagen");
const currentImagen = document.querySelector(".current__imagen");
  
  thumbnails.forEach((thumbnail) => {
    thumbnail.addEventListener("click", () => {
      mainImage.src = thumbnail.src;
      thumbnails.forEach((thumb) => {
        thumb.classList.remove("selected");
      });
      thumbnail.classList.add("selected");
    });

  
  });
  if(mainImage){
    mainImage.addEventListener("click", () => {
      const modal = document.querySelector("#Modal-galeria");
      const modalImg = document.querySelector("#modalImage");
      modal.style.display = "block";
      modalImg.src = mainImage.src;
  
      
    });

  }
  
  const closeModal = document.querySelector(".cerrar__modal__galeria");
  if(closeModal){
    closeModal.addEventListener("click", () => {
      const cerrar__modal = document.getElementById("Modal-galeria");
      cerrar__modal.style.display = "none";
    });
  }
if(botonAnterior){
  botonAnterior.addEventListener("click", () => {
    const modalImg = document.querySelector("#modalImage");
    if (indiceImagenActual === 0) {
      indiceImagenActual = thumbnails.length - 1;
    } else {
      indiceImagenActual--;
    }
    modalImg.src = thumbnails[indiceImagenActual].src;
    currentImagen.textContent = indiceImagenActual + 1;
  });

}
  
if(botonSiguiente){
  botonSiguiente.addEventListener("click", () => {
    const modalImg = document.querySelector("#modalImage");
    if (indiceImagenActual === thumbnails.length - 1) {
      indiceImagenActual = 0;
    } else {
      indiceImagenActual++;
    }
    modalImg.src = thumbnails[indiceImagenActual].src;
    currentImagen.textContent = indiceImagenActual + 1;
  });

}
 
if(totalImagenes){
  totalImagenes.textContent = thumbnails.length;

}

}


