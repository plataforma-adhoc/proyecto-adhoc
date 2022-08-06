export function obtener__solicitudes(){
    fetch('obtener-solicitudes',{
     method:'GET',

    }).then(respuesta => respuesta.json())
    .then(data =>{
        console.log(data);
        let numero__solicitudes = document.getElementById('numero-solicitudes')
        if(numero__solicitudes){
         numero__solicitudes.innerHTML =  data;
        }
    })
  
    
  }
  
      setInterval(function(){
       obtener__solicitudes();
      
      },5000)