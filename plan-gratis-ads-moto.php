<?php include'layout/nav-home-usuario.php'; 
include'conexion-db-accent.php';  
$id__paquete = isset($_GET['idpaq']) ? $_GET['idpaq'] : '';
$nombre__plan = isset($_GET['nombre_plan']) ? $_GET['nombre_plan'] : '';
if($id__paquete && $nombre__plan){
  if(isset($_SESSION['datosDeLaMoto'])){
    $datosDeLaMoto = $_SESSION['datosDeLaMoto'];
    $nombreUsuario = $datosDeLaMoto ['nombre'];
    $avatar = $datosDeLaMoto['avatar'];
    $idUsuario = $datosDeLaMoto ['id'];
    $marca = $datosDeLaMoto ['marca'];
    $modelo = $datosDeLaMoto ['modelo'];
    $color = $datosDeLaMoto ['color'];
    $fechaFabricacion = $datosDeLaMoto['fechaFabricacion'];
    $matricula = $datosDeLaMoto['matricula'];
    $ciudadMatricula = $datosDeLaMoto['ciudadMatricula'];
    $ciudadVenta = $datosDeLaMoto['ciudadVenta'];
    $propietario = $datosDeLaMoto['propietario'];
    $kilometros = $datosDeLaMoto['kilometros'];
    $precio= $datosDeLaMoto['precio'];
    $tipo = $datosDeLaMoto['tipo'];
    $cilindraje = $datosDeLaMoto['cilindraje'];
    $descripcion = $datosDeLaMoto['descripcion'];
    
    }
       
    if(isset($_SESSION['datosContactoMoto'])){
      $datosDeContacto = $_SESSION['datosContactoMoto'];
      $email = $datosDeContacto['email'];
      $Whatsapp = $datosDeContacto['Whatsapp'];
      $telefono = $datosDeContacto['telefono'];
    
    }
    if(isset($_SESSION['fotosDeLaMoto'])){
      $fotosDeLaMoto = $_SESSION['fotosDeLaMoto'];
      $rutaUno = $fotosDeLaMoto['ruta_1'];
      $rutaDos = $fotosDeLaMoto['ruta_2'];
      $rutaTres = $fotosDeLaMoto['ruta_3'];
      $rutaCuatro = $fotosDeLaMoto['ruta_4'];
      $rutaCinco = $fotosDeLaMoto['ruta_5'];
      $rutaSeis = $fotosDeLaMoto['ruta_6'];
      $rutaSiete = $fotosDeLaMoto['ruta_7'];
      $rutaOcho = $fotosDeLaMoto['ruta_8'];
      $rutaNueve = $fotosDeLaMoto['ruta_9'];
      $rutaDiez = $fotosDeLaMoto['ruta_10'];
    
    }
   
    $consulta = "SELECT * FROM planes__de__publicaciones WHERE id_paquete = '$id__paquete'";
    $ejecutar__la__consulta = mysqli_query($conexion__db__accent,$consulta);
    if($ejecutar__la__consulta){
      $fila = mysqli_fetch_array($ejecutar__la__consulta); 
      $nombre__paquete = $fila['nombre_paquete'];
      $valor__paquete = $fila['valor_paquete'];?>
      <div class="container contenedor__compra contenedor__pago container__proceso__de__pago">
    <h2 class="titulo__compra">Detalles de tu pago  </h2>
    <div class="table-responsive ">
    <table class="table table-dark table-striped  table-hover ">

    <tr>
      <th scope="col" class="texto__compra">Nombre del plan</th>
      <th scope="col"class="texto__compra">Total a pagar</th>
    </tr>
    <tbody>
    <tr>
      <th scope="row" class="texto__compra"><?php  echo  $nombre__paquete ?></th>
      <td class="texto__compra"><?php echo  number_format($valor__paquete,2,'.','.') ?></td> 
    </tr>  
  </tbody>
</table>
<div class="container contenedor__detalles__de__pago ">
  <form id="proceso-de-pago-motos">
  <!-- <input type="hidden"  class="step__input"name="id-usuario" value="<?php  echo $_SESSION['id_usuario'] ?>">
  <input type="hidden"  class="step__input"name="nombre-pagador" value="<?php  echo $datos__resultado['nombre_usuario']  ?>">
  <input type="hidden"  class="step__input"name="nombre-paquete" value="<?php  echo $fila['nombre_paquete']  ?>">
  <input type="hidden"  class="step__input"name="valor-paquete" value="<?php  echo $fila['valor_paquete']  ?>"> -->
<div class="contenedor__btn__anunciar">
  <button type="submit" class="step__button btn__anunciar__gratis">Enviar</button>
</div>
<br><br>
  </form>
  <div id="alerta" class="alerta"></div>
</div>
</div>
<br>
<?php  } ?>
<?php  } ?>
</div>
<script>

  function procesoDePagoGratisMoto(){
let formulario__de__pago = document.getElementById('proceso-de-pago-motos');
if(formulario__de__pago){
formulario__de__pago.addEventListener('submit',function(evento){
    evento.preventDefault();
    let form__data = new FormData(document.getElementById('proceso-de-pago-motos'))
    var urlServidor  = 'https://adhoc.com.co/'
    fetch(urlServidor+'insertar-info-motos',{
     method:'POST',
     body:JSON.stringify({
      nombreUsuario: "<?php  if(isset($nombreUsuario)){echo $nombreUsuario;} ?>",
      idUsuario:"<?php if(isset($idUsuario)){ echo $idUsuario; }?>",
      nombrePlan:"<?php if(isset($nombre__plan)){ echo $nombre__plan; } ?>",
      avatar : "<?php if(isset($avatar)){ echo $avatar; }?>" ,
      marca : "<?php if(isset($marca)){echo $marca; }?>" ,
      modelo : "<?php if(isset($modelo)){echo $modelo; }?>" ,
      color: "<?php if(isset($color)){echo $color; }?>" ,
      fechaFabricacion:"<?php if(isset($fechaFabricacion)){echo $fechaFabricacion; }?>",
      matricula: "<?php if(isset($matricula)){echo $matricula; } ?>" ,
      ciudadMatricula: "<?php if(isset($ciudadMatricula)){echo $ciudadMatricula; }?>" ,
      ciudadVenta: "<?php if(isset($ciudadVenta)){echo $ciudadVenta; }?>",
      propietario: "<?php if(isset($propietario)){echo $propietario; }?>" ,
      kilometros: "<?php if(isset($kilometros)){echo $kilometros; }?>",
      precio:"<?php if(isset($precio)){echo $precio; }?>",
      tipo:"<?php if(isset($tipo)){echo $tipo; }?>",
      cilindraje: "<?php if(isset($cilindraje)){echo $cilindraje;} ?>",
      descripcion: "<?php if(isset($descripcion)){echo $descripcion; }?>",

      //DATOS DEL CONTACTO DEL VENDEDOR
      email: "<?php if(isset($email)){echo $email;} ?>",
      telefono: "<?php if(isset( $telefono)){echo $telefono;} ?>",
      Whatsapp: "<?php if(isset($Whatsapp)){echo $Whatsapp;} ?>",

      //RUTAS DE LAS IMAGENES
      ruta_1: "<?php if(isset($rutaUno)){echo $rutaUno;} ?>",
      ruta_2: "<?php if(isset($rutaDos)){echo $rutaDos;} ?>",
      ruta_3: "<?php if(isset($rutaTres)){echo $rutaTres;} ?>",
      ruta_4: "<?php if(isset($rutaCuatro)){echo $rutaCuatro;} ?>",
      ruta_5: "<?php if(isset($rutaCinco)){echo $rutaCinco;} ?>",
      ruta_6: "<?php if(isset($rutaSeis)){echo $rutaSeis;} ?>",
      ruta_7: "<?php if(isset($rutaSiete)){echo $rutaSiete;} ?>",
      ruta_8: "<?php if(isset($rutaOcho)){echo $rutaOcho;} ?>",
      ruta_9: "<?php if(isset($rutaNueve)){echo $rutaNueve;} ?>",
      ruta_10: "<?php if(isset($rutaDiez)){echo $rutaDiez;} ?>",
    }),
              headers: {
                'Content-Type': 'application/json'
              }

            }).then(respuesta => respuesta.json())
    .then(data =>{
        if(data ==='ok'){
          console.log(data)
          fetch(urlServidor+'eliminar-variables-sesion-moto', { method: 'POST' })
                .then(res => {
                  if (res === 'ok') {
                    let alerta = document.getElementById('alerta');
                        alerta.innerHTML = `<div class="tarjeta__finalizacion__anuncio">
                 <div class="ilustration">
                       <img src="./img/celebracion.gif" alt="">
                 </div>
                 <h3>¡Felicidades!</h3>
                 <p>Hemos publicado tu anuncio exitosamente</p>
                 <a href="dashboard-usuario" class="enlace__terminar__publicacion">Continue</a>              
                 </div>
                 `             
                    console.log(res);
                  location.reload();
                  } 
                })
                .catch(error => {
                  alert('Error al enviar la petición: ', error);
                });
        }
    })
    })

}
}
procesoDePagoGratisMoto();
</script>
<?php include'layout/footer-home.php'  ?>
