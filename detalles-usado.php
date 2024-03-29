<?php 
$titulo="AdHoc | Detalles usado";
include'layout/nabvar.php';
 include'conexion-db-accent.php';

$id__publicacion = isset($_GET['idp']) ? $_GET['idp']:'';
$id__usuario= isset($_GET['idu']) ? $_GET['idu']:'';
if($id__publicacion && $id__usuario){
  $consulta__detalles__usado = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE id_publicacion_vehiculo = '$id__publicacion' AND id_usuario = '$id__usuario '";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__detalles__usado);
 
  $consulta__fotos__vehiculos = "SELECT foto_1,foto_2,foto_3,foto_4,foto_5,foto_6,foto_7,foto_8,foto_9,foto_10 FROM fotos__del__vehiculo WHERE id_fotos ='$id__publicacion'";
  $ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$consulta__fotos__vehiculos);
  $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);

$consulta__contactos = "SELECT  telefono_1,telefono_2,whatsapp_1,email FROM  contacto__vendedor WHERE id_contacto = '$id__publicacion'";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__contactos);
$fila__contacto = mysqli_fetch_array($ejecutar__consulta__contacto);
 
 if(mysqli_num_rows($ejecutar__consulta) > 0){
 $fila = mysqli_fetch_array($ejecutar__consulta);?>
<div class=" contenedor__detalles__usado">
<div class="contendor__imagenes">
<div class="container carousel-container">
<div class="carousel">
  <div class="carousel-main">
    <img src="<?php  echo $fila__fotos['foto_1'] ?>" alt="Imagen 1" class="imagen__principal">
  </div>
  <div class="carousel-thumbnails">
  <img src="<?php  echo $fila__fotos['foto_1'] ?>" alt="Imagen 1"class="selected">
    <img src="<?php  echo $fila__fotos['foto_2'] ?>" alt="Imagen 2" >
    <img src="<?php  echo $fila__fotos['foto_3'] ?>" alt="Imagen 3">
    <img src="<?php  echo $fila__fotos['foto_4'] ?>" alt="Imagen 4">
    <img src="<?php  echo $fila__fotos['foto_5'] ?>" alt="Imagen 5">
    <img src="<?php  echo $fila__fotos['foto_6'] ?>" alt="Imagen 6">
    <img src="<?php  echo $fila__fotos['foto_7'] ?>" alt="Imagen 7">
    <img src="<?php  echo $fila__fotos['foto_8'] ?>" alt="Imagen 8">
    <img src="<?php  echo $fila__fotos['foto_9'] ?>" alt="Imagen 9">
    <img src="<?php  echo $fila__fotos['foto_10'] ?>" alt="Imagen 9">
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
    <h2 class="nombre__del__vehiculo"><?php  echo  ucwords($fila['marca_del_vehiculo']) ?></h2>
    <P class="referencia__del__vehiculo"><?php  echo ucwords($fila['modelo_vehiculo']) ?></P>
</div>
<div class="detalles__vehiculo">
<h2 class="precio__del__vehiculo">$<?php echo number_format($fila['precio_del_vehiculo'],2,'.','.')   ?></h2>
<P class="kilometros__del__vehiculo"><?php echo number_format($fila['kilometros_del_vehiculo'],2,'.','.')   ?> km | año <?php echo $fila['anio_fabricacion']?></P>    
</div>
</div>
<div class="caracteristicas__del__vehiculo__e__informacion__del__vendedor">
    <div class="caracteristicas">
       <h3 class="subtitulo__informacion">Informacion del vendedor</h3>
       <div class="contenedor__imagen__no__disponible">
            <img src="upload/<?php echo $fila['foto_vendedor']  ?>" alt="foto del vendedor del carro usado" class="foto__vendedor">
            <br><br>
            <p class="telefono__del__vendedor">Telefono del vendedor</p>
            <p class="telefono"><i class="fas fa-mobile"></i> 
            <?php 
            if($fila__contacto['telefono_1']){
            echo $fila__contacto['telefono_1']; 
            }
            ?>
          </p>
        
          <?php  if($fila__contacto['telefono_2'] != NULL){ ?>
          <p class="telefono"><i class="fas fa-mobile"></i> <?php echo $fila__contacto['telefono_2']  ?></p>
          <?php } ?>
          <p  class="telefono__del__vendedor">
            <a href="mailto:<?php echo $fila__contacto['email'] ?>"class="email__vendedor"><i class="fas fa-envelope-open"></i> Enviar email</a>
            
          </p>
            <a href="https://api.whatsapp.com/send?phone=numero<?php  echo $fila__contacto['whatsapp_1']  ?>&text=mensaje=Hola vi el anuncio de tu vehiculo en AdHoc" class="enlace__whatsapp__detalles" target="_blank" onclick="guardar__click__contacto(<?php echo $fila['id_usuario'] ?>,<?php echo $fila['id_publicacion_vehiculo'] ?>)"><i class="fab fa-whatsapp"></i> Contactar al vendedor</a>          
          </div>
       <br>
    </div>
    <script>
  function guardarClickContactoVehculo(usuario,publicacion){
    var urlServidor = 'https://adhoc.com.co/'
   let  form__data = new FormData();
   form__data.append('usuario',usuario)
   form__data.append('publicacion',publicacion)
  fetch(urlServidor+'click-contacto-vehiculo',{
    method:'POST',
    body:form__data

  }).then(respuesta => respuesta.json())
  .then(data =>{
    if(data === 'ok'){

    }
  })
}
guardarClickContactoVehculo(<?php  echo $id__usuario ?>,<?php  echo $id__publicacion ?>);
</script>
    <div class="caracteristicas">
       <h3 class="subtitulo__informacion">Caracteristicas</h3>
      <div class="caracteristicas__de__vehiculo">
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-street-view"></i> Ubicacion</p>
            <p class="respuesta__caracteristicas"><?php echo ucwords($fila['ciudad_de_venta'])  ?></p>

      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-burn"></i> Combustible</p>
        <p class="respuesta__caracteristicas"><?php echo ucwords($fila['tipo_combustible'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-paint-roller"></i> Color</p>
        <p class="respuesta__caracteristicas"><?php echo ucwords($fila['color_vehiculo'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><i class="fas fa-car-crash"></i> Estado  </p>
        <p class="respuesta__caracteristicas">Usado</p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"> <img src="./img/puertas.png" />  Puertas </p>
        <p class="respuesta__caracteristicas"><?php echo $fila['numero_puertas'] ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="./img/llaves.png" /> Propietario unico </p>
        <p class="respuesta__caracteristicas"><?php echo $fila['unico_propietario']  ?> 
      </p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="./img/caja__de__cambios.png"/> Marcha </p>
        <p class="respuesta__caracteristicas"><?php echo ucwords($fila['tipo_de_caja'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"> <img src="./img/piston.png"/> Cilindraje </p>
        <p class="respuesta__caracteristicas"><?php echo $fila['cilindraje_vehiculo'] ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="./img/matricula.png" class="iconos__caracteristicas"/> Matricula </p>
        <p class="respuesta__caracteristicas">
        <?php echo  $fila['matricula_del_vehiculo'];   echo  ucwords($fila['ciudad_registro_matricula'])  ?>
        </p>
       
      </div>
      </div>
    </div>
</div>
<h3 class="vendedor__dice">El vendedor dice</h3>
<div class="contenido__informacion__del__vehiculo">
    <p class="que__dice__el__vendedor">
      <?php echo ucfirst($fila['descripcion_vehiculo']) ?>
</p>
</div>
<?php    
$selecion__seguridad__vehiculo = "SELECT * FROM seguridad__del__vehiculo WHERE id_seguridad = '$id__publicacion'";
$ejecutar__consulta__seguridad = mysqli_query($conexion__db__accent,$selecion__seguridad__vehiculo);
$fila__seguridad = mysqli_fetch_array($ejecutar__consulta__seguridad);

$conuslta__equipamiento__vehiculo = "SELECT * FROM equipamiento__del__vehiculo WHERE id_equipamiento ='$id__publicacion'";
$ejecutar__consulta__equipamiento = mysqli_query($conexion__db__accent,$conuslta__equipamiento__vehiculo);
$fila__equipamiento = mysqli_fetch_array($ejecutar__consulta__equipamiento);

$consulta__lujos = "SELECT * FROM disenio__y__estilo__vehiculo WHERE id_estilos = '$id__publicacion'";
$ejecutar__consulta__lujos = mysqli_query($conexion__db__accent,$consulta__lujos);
$fila__lujos = mysqli_fetch_array($ejecutar__consulta__lujos);?>
<h3 class="vendedor__dice">Ficha tecnica</h3>
<div class="ficha__tecnica__del__vehiculo">
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
     Seguridad del vehiculo
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body acordion__body">
        <div>
         
            <p><strong>Air bag delantero : </strong> <?php echo$fila__seguridad['air_bag_delantero']?></p>
            <p><strong>Air bag trasero  : </strong> <?php echo $fila__seguridad['air_bag_trasero'] ?></p>
            <p><strong>Bloqueo central : </strong> <?php echo  $fila__seguridad['bloqueo_central']?></p>
            <p><strong>Sensor punto ciego : </strong> <?php  echo $fila__seguridad['sensor_punto_ciego'] ?> </p>
            <p><strong>Camara reversa : </strong> <?php echo $fila__seguridad['camara_reversa'] ?></p>
        </div>
        <div>
            <p><strong>Control de ascenso: </strong> <?php echo $fila__seguridad['control_de_ascenso']?></p>
            <p><strong>Control de descenso : </strong><?php echo $fila__seguridad['control_de_descenso']?></p>
            <p><strong>Sensor delantero</strong> <?php echo  $fila__seguridad['sensor_delantero'] ?></p>                
           <p><strong>Sensor reversa</strong> <?php echo $fila__seguridad['sensor_reversa'] ?></p> 
        </div>        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      Equipamiento del vehiculo
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body acordion__body">
      <div>
      <p><strong>Aire acondicionado: </strong> <?php 
              if($fila__equipamiento['aire_acondicionado']){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Android auto : </strong> <?php $fila__equipamiento['android_auto']?></p>
            <p><strong>Apple car play: </strong> <?php echo $fila__equipamiento['apple_car_play'] ?></p>
            <p><strong>Techo corredizo : </strong> <?php echo $fila__equipamiento['techo_corredizo']?></p>
            <p><strong>Exploradoras: </strong> <?php echo $fila__equipamiento['exploradoras']?></p>
            <p><strong>Retrovisores electrico: </strong> <?php echo $fila__equipamiento['espejos_electrico'] ?></p>
           <p><strong>Techo panoramico : </strong> <?php echo  $fila__equipamiento['techo_panoramico']?></p>
         
        </div>
       <div>
       <p><strong>Desempañador trasero : </strong> <?php echo $fila__equipamiento['desempaniador_trasero'] ?></p>
           <p><strong>GPS: </strong> <?php echo $fila__equipamiento['gps'] ?></p>
           <p><strong>Parqueo automatico: </strong> <?php echo $fila__equipamiento['parqueo_automatico'] ?></p>
           <p><strong>Bluetooht: </strong> <?php echo $fila__equipamiento['bluetooth']?> </p>
       </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Lujos del vehiculo
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body acordion__body">
      <div>
            <p><strong>Rines de lujo: </strong>  <?php echo $fila__lujos['rines_de_lujo'] ?></p>
            <p><strong>Radio digital: </strong>  <?php echo $fila__lujos['radio_cassette']?></p>
            <p><strong>Radio CD: </strong> <?php echo $fila__lujos['radio_cd'] ?></p>
            <p><strong>Pantalla de video </strong>  <?php echo $fila__lujos['pantalla_de_video']?></p>
        
      </div>
      </div>
    </div>
  </div>
</div>
</div>
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
     $consulta__contador__click = "SELECT contador_click,fecha_click FROM visitas__al__perfil__del__carro WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ";
    $ejecutar__contador__click = mysqli_query($conexion__db__accent,$consulta__contador__click);
    $numero__de__filas = mysqli_num_rows($ejecutar__contador__click);
    if($numero__de__filas > 0 ){
        $consulta__contador__click__2 = "SELECT contador_click,fecha_click FROM visitas__al__perfil__del__carro  WHERE  id_usuario = '$id__usuario' AND id_publicacion = '$id__publicacion' ORDER BY id_visita_perfil DESC";
        $ejecutar__contador__click__2 = mysqli_query($conexion__db__accent,$consulta__contador__click__2);
        $row = mysqli_fetch_array($ejecutar__contador__click__2);
        $fecha__click = $row['fecha_click'];
        $contador = $row['contador_click']+ 1;
        if($fecha__actual > $fecha__click){
          $insertar__click = "INSERT INTO visitas__al__perfil__del__carro (id_usuario,id_publicacion,contador_click,fecha_click)  VALUES('$id__publicacion','$id__usuario','$contador__inicial','$fecha__actual')";
          $ejecutar__insersion = mysqli_query($conexion__db__accent,$insertar__click);          
        }else{
          $actualizar__click = "UPDATE visitas__al__perfil__del__carro SET contador_click ='$contador' WHERE id_usuario = '$id__usuario'  AND  fecha_click = '$fecha__actual' ";
           $ejecutar__actualizacion = mysqli_query($conexion__db__accent,$actualizar__click);
        }
    }else{
      $insertar__click__2 = "INSERT INTO visitas__al__perfil__del__carro (id_usuario,id_publicacion,contador_click,fecha_click)  VALUES('$id__usuario','$id__publicacion','$contador__inicial','$fecha__actual')";
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
  <div class="contenedor__imagen__vender">
    <img src="./img/vendiendo__carro.jpg" alt="persona vendiendo su carro">
  </div>
  <h2 class="subtitulo__vender__carro">Vende tu carro usado hoy mismo: <br> ¡Obtén el mejor precio ahora!</h2>
  <p class="parrafo__vender__carro">Ofrecemos una plataforma segura y confiable, para que puedas anunciar tu carro con las características que lo hacen especial. Tenemos una audiencia amplia y diversa, interesada en diferentes tipos de vehículos
    registrate y anuncialo gratis
  </p>
  <a href="usuario" class="enlace__anuncio__registrarme">Registrarme <i class="fas fa-paper-plane"></i></a>
</div>
    </div>
</div>
<?php  include'layout/footer.php';?>
