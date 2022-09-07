export  function insertar__sugerencia__usaurio(){
    let form__susgrencia = document.getElementById('form-sugerencias')
    if(form__susgrencia){
    form__susgrencia.addEventListener('submit',function(evento){
        let data = new FormData(document.getElementById('form-sugerencias'))
        evento.preventDefault();
        fetch('insert-sugerencia',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(resultado =>{
           if(resultado === 'true'){
            document.getElementById('sugerencia').value ="";
            Swal.fire({
                background:'#202F36',
                icon: 'success',
                title: `Se recibio tu sugerencia`,
                footer: 'Gracias por escribirnos, trabajaremos para mejorar',
               
              })
           }
        })
    })
    }
}

export  function insertar__sugerencia__conductor(){
    let form__susgrencia = document.getElementById('form-sugerencias-conductor')
    if(form__susgrencia){
    form__susgrencia.addEventListener('submit',function(evento){
        let data = new FormData(document.getElementById('form-sugerencias-conductor'))
        evento.preventDefault();
        fetch('insert-sugerencia',{
            method:'POST',
            body:data
        }).then(respuesta => respuesta.json())
        .then(resultado =>{
           if(resultado === 'true'){
            document.getElementById('sugerencia').value ="";
            Swal.fire({
                background:'#202F36',
                icon: 'success',
                title: `Se recibio tu sugerencia`,
                footer: 'Gracias por escribirnos, trabajaremos para mejorar',
               
              })
           }
        })
    })
    }
}