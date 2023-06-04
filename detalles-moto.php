<?php 
$titulo="AdHoc | Detalles moto usada";
include'layout/nabvar.php';
 include'conexion-db-accent.php';
$idPublicacion = isset($_GET['idp']) ? $_GET['idp']:'';
$idUsuario= isset($_GET['idu']) ? $_GET['idu']:'';
if($idPublicacion && $idUsuario){
  $consultaDetallesUsada = "SELECT * FROM informacion__de__la__moto__en__venta WHERE idPublicacionMoto = '$idPublicacion' AND idUsuario = '$idUsuario '";
  $ejecutarConsulta = mysqli_query($conexion__db__accent,$consultaDetallesUsada);
 
  $consultaFotosDeLamoto = "SELECT foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10 FROM fotos__de__la__moto WHERE id_fotos ='$idPublicacion' AND id_usuario = '$idUsuario'";
  $ejecutarConsultaFotos = mysqli_query($conexion__db__accent,$consultaFotosDeLamoto);
  $filaFotos = mysqli_fetch_array($ejecutarConsultaFotos);

$consultaContactos = "SELECT  email,telefono,whatsapp FROM  contacto__vendedor__moto WHERE id_contacto = '$idPublicacion' AND id_usuario = '$idUsuario'";
$ejecutarConsultaContacto = mysqli_query($conexion__db__accent,$consultaContactos);
$filaContacto = mysqli_fetch_array($ejecutarConsultaContacto);
 
 if(mysqli_num_rows($ejecutarConsulta) > 0){
 $fila = mysqli_fetch_array($ejecutarConsulta);?>
<div class=" contenedor__detalles__usado">
<div class="contendor__imagenes">
<div class="container carousel-container">
<div class="carousel">
  <div class="carousel-main">
    <img src="<?php  echo $filaFotos['foto_1'] ?>" alt="Imagen 1" class="imagen__principal">
  </div>
  <div class="carousel-thumbnails">
  <img src="<?php  echo $filaFotos['foto_1'] ?>" alt="Imagen 1"class="selected">
    <img src="<?php  echo $filaFotos['foto_2'] ?>" alt="Imagen 2" >
    <img src="<?php  echo $filaFotos['foto_3'] ?>" alt="Imagen 3">
    <img src="<?php  echo $filaFotos['foto_4'] ?>" alt="Imagen 4">
    <img src="<?php  echo $filaFotos['foto_5'] ?>" alt="Imagen 5">
    <img src="<?php  echo $filaFotos['foto_6'] ?>" alt="Imagen 6">
    <img src="<?php  echo $filaFotos['foto_7'] ?>" alt="Imagen 7">
    <img src="<?php  echo $filaFotos['foto_8'] ?>" alt="Imagen 8">
    <img src="<?php  echo $filaFotos['foto_9'] ?>" alt="Imagen 9">
    <img src="<?php  echo $filaFotos['foto_10'] ?>" alt="Imagen 9">
  </div>
</div>
<div id="Modal-galeria" class="modal__galeria">
  <div class="detalles__imagen"><p class="titulo__imagen">Imagen  <span class="current__imagen">1</span> de  <span class="total__imagen">10</span> </p></div>
  <span class="cerrar__modal__galeria">&times;</span>
  <div class="contenedor__imagenes">
    <img class="modal-content-galeria" id="modalImage">
  </div>
    <a class="prev" id="boton-anterior"><i class="fas fa-chevron-left"></i></a>
    <a class="next" id="boton-siguiente"><i class="fas fa-chevron-right"></i></a>
</div>
<div class="container informacion__general__del__vehiculo">
    <div class="detalles__principales">
<div class="detalles__vehiculo">   
    <h2 class="nombre__del__vehiculo"><?php  echo  ucwords($fila['marca']) ?></h2>
    <P class="referencia__del__vehiculo"><?php  echo ucwords($fila['modelo']) ?></P>
</div>
<div class="detalles__vehiculo">
<h2 class="precio__del__vehiculo">$<?php echo number_format($fila['precio'],2,'.','.')   ?></h2>
<P class="kilometros__del__vehiculo"><?php echo number_format($fila['kilometros'],2,'.','.')   ?> km | año <?php echo $fila['fechaFabricacion']?></P>    
</div>
</div>
<div class="caracteristicas__del__vehiculo__e__informacion__del__vendedor">
    <div class="caracteristicas">
       <h3 class="subtitulo__informacion">Informacion del vendedor</h3>
       <div class="contenedor__imagen__no__disponible">
            <img src="upload/<?php echo $fila['fotoVendedor']  ?>" alt="foto del vendedor del carro usado" class="foto__vendedor">
            <br><br>
            <p class="telefono__del__vendedor">Telefono del vendedor</p>
            <p class="telefono"><i class="fas fa-mobile"></i> 
            <?php 
            if($filaContacto['telefono']){
            echo $filaContacto['telefono']; 
            }
            ?>
          </p>
          <p  class="telefono__del__vendedor">
            <a href="mailto:<?php echo $filaContacto['email'] ?>"class="email__vendedor"><i class="fas fa-envelope-open"></i> Enviar email</a>       
          </p>
            <a href="https://api.whatsapp.com/send?phone=57<?php  echo $filaContacto['whatsapp']  ?>&text=Hola vi el anuncio de tu moto en AdHoc" class="enlace__whatsapp__detalles" target="_blank" onclick="guardar__click__contacto(<?php echo $fila['id_usuario'] ?>,<?php echo $fila['id_publicacion_vehiculo'] ?>)"><i class="fab fa-whatsapp"></i> Contactar al vendedor</a>          
          </div>
       <br>
    </div>
    <script>
  function guardarClickContactoMoto(usuario,publicacion){
    var urlServidor = 'https://adhoc.com.co/'
   let  form__data = new FormData();
   form__data.append('usuario',usuario)
   form__data.append('publicacion',publicacion)
  fetch(urlServidor+'click-contacto-moto',{
    method:'POST',
    body:form__data

  }).then(respuesta => respuesta.json())
  .then(data =>{
    if(data === 'ok'){

    }
  })
}
guardarClickContactoMoto(<?php  echo $idUsuario ?>,<?php  echo $idPublicacion ?>)

</script>
    <div class="caracteristicas">
       <h3 class="subtitulo__informacion">Caracteristicas</h3>
      <div class="caracteristicas__de__vehiculo">
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-street-view"></i> Ubicacion</p>
            <p class="respuesta__caracteristicas"><?php echo ucwords($fila['ciudadDeVenta'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-paint-roller"></i> Color</p>
        <p class="respuesta__caracteristicas"><?php echo ucwords($fila['color'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-car-crash"></i> Estado  </p>
        <p class="respuesta__caracteristicas">Usado</p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="./img/llaves.png" /> Propietario unico </p>
        <p class="respuesta__caracteristicas"><?php echo $fila['propietario']  ?> 
      </p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"> <img src="./img/piston.png"/> Cilindraje </p>
        <p class="respuesta__caracteristicas"><?php echo $fila['cilindraje'] ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="./img/matricula.png" class="iconos__caracteristicas"/> Matricula </p>
        <p class="respuesta__caracteristicas">
        <?php echo  $fila['matricula'];   echo  ucwords($fila['ciudadRegistroMatricula'])  ?>
        </p>
       
      </div>
      </div>
    </div>
</div>
<h3 class="vendedor__dice">El vendedor dice</h3>
<div class="contenido__informacion__del__vehiculo">
    <p class="que__dice__el__vendedor">
      <?php echo ucfirst($fila['descripcion']) ?>
</p>
</div>
</div>
<br><br>
<div class=" container accordion contenedor__acordeon__recomendaciones" id="accordionPanelsStayOpenExample">
    <h3 class="vendedor__dice">Recomendaciones</h3>
  <div class="accordion-item ">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      <i class="fas fa-exclamation-triangle"></i> SIGUE ESTAS RECOMENDACIONES
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
      <p class="texto__precaucion"> <i class="fas fa-exclamation-circle"></i> Comunicate directamente con el vendedor o el comprador, no compres un vehiculo <br>
    sin antes verlo direcatamente y comprobar que toda su documentacion esta al dia.
    </p>
    <br>
    <p class="texto__precaucion">Por ningun motivo envie dinero por anticipado.</p>
    <br>
    <p class="texto__precaucion"><i class="fas fa-exclamation-circle"></i> Nunca valla solo a la negociación ni ala entrega del vehiculo<br>
   asegurese que la cita sea en lugares concurridos o bien establecidos.
</p>
    <br>
    <p class="texto__precaucion"><i class="fas fa-exclamation-circle"></i> En caso de que lo adquieras con un particular solicita ayuda de las autoridades<br>
para verificar la legalidad del vehiculo
</p>
    <br>
    <p class="texto__precaucion"> <i class="fas fa-exclamation-circle"></i> No te dejes engañar por sitios falsos, verifica la autenticidad <br>
e incluso comunicate para estar seguro
</p>
    <br>
    <a href="contacto">No estas seguro ?  comunicate con nosotros</a>
      </div>
    </div>
  </div> 
</div>
</div>

<?php  } ?>
<?php  } ?>
<?php

date_default_timezone_set('America/Bogota');
setlocale(LC_ALL,"es_ES");
setlocale(LC_TIME,"es_ES.UTF-8");
$id__publicacion = isset($_GET['idp']) ? $_GET['idp']:'';
$id__usuario= isset($_GET['idu']) ? $_GET['idu']:'';

if($id__publicacion && $id__usuario){
  $fecha__actual = date('Y-m-d');
  $contador__inicial = 1;
     $consulta__contador__click = "SELECT contador_click,fecha_click FROM visitas__al__perfil__moto WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ";
    $ejecutar__contador__click = mysqli_query($conexion__db__accent,$consulta__contador__click);
    $numero__de__filas = mysqli_num_rows($ejecutar__contador__click);

    if($numero__de__filas > 0 ){
        $consulta__contador__click__2 = "SELECT contador_click,fecha_click FROM visitas__al__perfil__moto WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ORDER BY id_visita_perfil DESC";
        $ejecutar__contador__click__2 = mysqli_query($conexion__db__accent,$consulta__contador__click__2);
        $row = mysqli_fetch_array($ejecutar__contador__click__2);
        $fecha__click = $row['fecha_click'];
        $contador = $row['contador_click']+ 1;
        if($fecha__actual > $fecha__click){
          $insertar__click = "INSERT INTO visitas__al__perfil__moto(id_usuario,id_publicacion,contador_click,fecha_click)  VALUES('$id__usuario','$id__publicacion','$contador__inicial','$fecha__actual')";
          $ejecutar__insersion = mysqli_query($conexion__db__accent,$insertar__click);
          
        }else{
          $actualizar__click = "UPDATE visitas__al__perfil__moto SET contador_click ='$contador' WHERE id_usuario = '$id__usuario'  AND  fecha_click = '$fecha__actual' ";
           $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__click);

        }
    }else{
      $insertar__click__2 = "INSERT INTO visitas__al__perfil__moto(id_usuario,id_publicacion,contador_click,fecha_click)  VALUES('$id__usuario','$id__publicacion','$contador__inicial','$fecha__actual')";
      $ejecutar__insersion__2 = mysqli_query($conexion__db__accent,$insertar__click__2);
 

    }
}
?>
  <div class="container contenedor__comentarios">
  <h2 class="subtitulo__comentarios">Comentarios</h2>
  <p class="parrafo__comenatrios">Deja tu comentario sobre esta publicación
  </p>
  <div class="contenido__comentarios">
    <div class="comentario"> 
<div class="chat chat__dos" id="insertar-comentario"></div>
<form id="formulario-comentario">
<div class="caja-texto">
<textarea name="caja-texto" id="mensaje"></textarea>
<input type="hidden" value="<?php  echo $id__publicacion ?>" name="id-publicacion">
<input type="hidden" value="<?php  echo $id__usuario ?>" name="id-usuario">
<input type="hidden" value="comentario" name="comentario">

<button type="submit"><i class="fas fa-paper-plane"></i></button>
</form>
</div>
  
</div>
<div class="anuncio">
  <div class="contenedor__imagen__vender ">
    <img src="./img/vendiendo__moto.png" alt="persona vendiendo su moto">

  </div>
  <h2 class="subtitulo__vender__carro">Vende tu moto usada hoy mismo: <br> ¡Obtén el mejor precio ahora!</h2>
  <p class="parrafo__vender__carro">Ofrecemos una plataforma segura y confiable, para que puedas anunciar tu moto con las características que la hacen especial. Tenemos una audiencia amplia y diversa, interesada en diferentes tipos de moto
    registrate y anunciala gratis
  </p>
  <a href="usuario" class="enlace__anuncio__registrarme">Registrarme <i class="fas fa-paper-plane"></i></a>
</div>
    </div>
</div>
<?php  include'layout/footer.php';?>
