<?php
include'layout/nav-home-usuario.php';

$id__usuario = isset($_GET['idu']) ? $_GET['idu']: '';
$id__publicacion = isset($_GET['idp']) ? $_GET['idp']: '';
$id__notificacion = isset($_GET['idn']) ? $_GET['idn']: '';
if($id__usuario && $id__usuario && $id__notificacion){ ?>
<div class="contenedor__respuesta__comentario">
<h1 class="titulo__respuesta__comentario">Responder un comentario</h1>
<div class="respuesta">
<form id="formulario-respuesta">
<div class="caja-texto">
<textarea name="caja-texto" id="mensaje"></textarea>
<input type="hidden" value="<?php  echo $id__usuario ?>" name="id-usuario">
<input type="hidden" value="<?php  echo $id__publicacion ?>" name="id-publicacion">
<input type="hidden" value="respuesta" name="respuesta">

<button type="submit"><i class="fas fa-paper-plane"></i></button>
</form>
    </div>
</div>
<?php }  ?>

<?php
function actualizar__notificaciones(){
$id__usuario = isset($_GET['idu']) ? $_GET['idu']: '';
$id__publicacion = isset($_GET['idp']) ? $_GET['idp']: '';
$id__notificacion = isset($_GET['idn']) ? $_GET['idn']: '';
include'conexion-db-accent.php';
 $actualizar__notificacion = "UPDATE notificaciones SET leido = 1 WHERE id_notificacion = '$id__notificacion' AND  id_publicacion = '$id__publicacion' AND id_usuario ='$id__usuario'";
 $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__notificacion);

}
actualizar__notificaciones();
?>
<?php
include'layout/footer-home.php';
?>

<script>
  function respuesta__comentario(){
  let formulario__respuesta = document.getElementById('formulario-respuesta')
  if(formulario__respuesta){
    formulario__respuesta.addEventListener('submit', function(event){
        event.preventDefault();
        let url__servidor  = 'https://adhoc.com.co/'
        let form__data =  new FormData(document.getElementById('formulario-respuesta'))
        fetch('insert-respuesta',{
            method:'POST',
            body:form__data
        }).then(respuesta =>  respuesta.json())
        .then(data =>{
          if(data === 'ok'){
            let mensaje = document.getElementById('mensaje').value =""
            Swal.fire({
                        background:'#212F37',
                        color:'#ffff',
                        toast: true,
                        icon: 'success',
                        title: 'Se Guardo Tu Respuesta',
                        animation: false,
                        position: 'top',
                        showConfirmButton: false,
                        timer: 3000,
                        timerProgressBar: true,
                        didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                        }
                      })
          } 
        })
    })

  }
 }
respuesta__comentario()

</script>