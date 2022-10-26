<?php  include'layout/nabvar.php';
 include'conexion-db-accent.php';

$id__publicacion = isset($_GET['idp']) ? $_GET['idp']:'';
if($id__publicacion){
  $consulta__detalles__usado = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE id_publicacion_vehiculo = '$id__publicacion' ";
  $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__detalles__usado);
 if(mysqli_num_rows($ejecutar__consulta) > 0){
 $fila = mysqli_fetch_array($ejecutar__consulta);?>
<div class=" contenedor__detalles__usado">
<div class="contendor__imagenes">
    <div class="image">
        <img src="<?php  echo $fila['foto_1'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_2'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_3'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_4'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_5'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_6'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_7'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_8'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_9'] ?>" alt="">
    </div>
    <div class="image">
        <img src="<?php  echo $fila['foto_10'] ?>" alt="">
    </div>
    <div class="popup-image">
    <span>&times;</span>
    <img src="./img/prueba.jpg" alt="">

    </div>
</div>

<div class="container informacion__general__del__vehiculo">
    <div class="detalles__principales">
<div class="detalles__vehiculo">   
    <h2 class="nombre__del__vehiculo"><?php  echo  ucwords($fila['marca_del_vehiculo']) ?></h2>
    <P class="referencia__del__vehiculo"><?php  echo  ($fila['modelo_vehiculo']) ?></P>
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
            <img src="upload/<?php echo $fila['foto_vendedor']  ?>" alt="" class="img__no__disponible">
            <br><br>
            <p class="telefono__del__vendedor">Telefono del vendedor</p>
            <p class="telefono"><i class="fas fa-phone-volume"></i> <?php echo $fila['telefono_1']  ?></p>
            <p class="telefono"><i class="fas fa-phone-volume"></i> <?php echo $fila['telefono_2']  ?></p>
          <a href="https://api.whatsapp.com/send?phone=numero<?php  echo $fila['whatsapp_1']  ?>&text=mensaje=Hola vi el anuncio de tu vehiculo an AdHoc" class="enlace__whatsapp"><i class="fab fa-whatsapp"></i> Habla con el vendedor</a>

   
       </div>
    </div>
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
        <p class="texto__caracteristicas"><img src="https://img.icons8.com/fluency-systems-filled/32/000000/door-ajar.png"/>  Puertas </p>
        <p class="respuesta__caracteristicas">5</p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="https://img.icons8.com/fluency-systems-filled/32/000000/wind.png"/> Aire  </p>
        <p class="respuesta__caracteristicas"><?php 
        if($fila['aire_acondicionado'] === 'on'){ ?>
           Si
      <?php  } ?>
      </p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="https://img.icons8.com/windows/32/000000/gearbox.png"/> Marcha </p>
        <p class="respuesta__caracteristicas"><?php echo ucwords($fila['tipo_de_caja'])  ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"> <img src="https://img.icons8.com/glyph-neue/32/000000/piston.png"/> Cilindraje </p>
        <p class="respuesta__caracteristicas"><?php echo number_format($fila['cilindraje_vehiculo'],0,'.','.') ?></p>
      </div>
      <div class="info__caracteristicas">
        <p class="texto__caracteristicas"><img src="https://img.icons8.com/ios-filled/32/000000/licence-plate.png"/> Matricula </p>
        <p class="respuesta__caracteristicas">
            ***<?php echo  $fila['matricula_del_vehiculo'];   echo  ucwords($fila['ciudad_registro_matricula'])  ?>
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
<h3 class="vendedor__dice">Ficha tecnica</h3>
<div class="ficha__tecnica__del__vehiculo">
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
       Información general
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body acordion__body">
        <div>
            <p><strong>Direccion : </strong>   <?php echo ucfirst($fila['tipo_de_direccion']) ?></p>
            <p><strong>Unico propietario : </strong><?php echo ucfirst($fila['unico_propietario']) ?></p>
            <p><strong>Air bag delantero : </strong> <?php 
            if($fila['air_bag_delantero']==='on'){ ?>
               Si
          <?php  } ?>
            </p>
            <p><strong>Air bag trasero  : </strong> <?php   if($fila['air_bag_trasero']==='on'){ ?>
               Si
          <?php  }  ?></p>
            <p><strong>Bloqueo central : </strong> <?php 
              if($fila['bloqueo_central']==='on'){ ?>
                Si
           <?php  } ?>
            </p>

        </div>
        <div>
            <p><strong>Vidrios electricos: </strong> <?php 
              if($fila['vidrios_electricos']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Alarma : </strong><?php 
              if($fila['alarma']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Espejos electricos : </strong> <?php 
              if($fila['espejos_electrico']==='on'){ ?>
                Si
           <?php  } ?></p> 
                
             
        </div>
        
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Confort
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
      <div class="accordion-body acordion__body">
      <div>
            <p><strong>Android auto : </strong> <?php 
              if($fila['android_auto']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Apple car play: </strong> <?php 
              if($fila['aple_car_play']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Techo corredizo : </strong> <?php 
              if($fila['techo_corredizo']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Exploradoras: </strong> <?php 
              if($fila['exploradoras']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Retrovisores : </strong> <?php 
              if($fila['bloqueo_central']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Techo panoramico : </strong> <?php 
              if($fila['techo_panoramico']==='on'){ ?>
                Si
           <?php  } ?></p>
         
        </div>
       <div>
       <p><strong>Desempañador trasero : </strong> <?php 
              if($fila['desempaniador_trasero']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>GPS: </strong> <?php 
              if($fila['gps']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Parqueo automatico: </strong> <?php 
              if($fila['parqueo_automatico']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Bluetooht: </strong> <?php 
              if($fila['bluetooth']==='on'){ ?>
                Si
           <?php  } ?></p>
       </div>
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Accesorios y  seguridad
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
      <div class="accordion-body acordion__body">
      <div>
            <p><strong>Camara reversa: </strong>  <?php 
              if($fila['camara_reversa']==='on'){ ?>
                Si
           <?php  } ?></p></p>
            <p><strong>Sensor reversa: </strong>  <?php 
              if($fila['sensor_reversa']==='on'){ ?>
                Si
           <?php  } ?></p></p>
            <p><strong>Sensor delantero: </strong> <?php 
              if($fila['sensor_delantero']==='on'){ ?>
                Si
           <?php  } ?></p>
            <p><strong>Sensor punto ciego </strong>  <?php 
              if($fila['sensor_punto_ciego']==='on'){ ?>
                Si
           <?php  } ?></p>
     
           <p><strong>Control de ascenso </strong>  <?php 
              if($fila['control_de_ascenso']==='on'){ ?>
                Si
           <?php  } ?></p>
        </div>
      <div>
      <p><strong>Control de descenso</strong>  <?php 
              if($fila['control_de_descenso']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Rines de lujo </strong>  <?php 
              if($fila['rines_de_lujo']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Radio digital </strong>  <?php 
              if($fila['radio_cassette']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Radio cd</strong>  <?php 
              if($fila['radio_cd']==='on'){ ?>
                Si
           <?php  } ?></p>
           <p><strong>Pantalla de video </strong>  <?php 
              if($fila['pantalla_de_video']==='on'){ ?>
                Si
           <?php  } ?></p>
      </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
<div class=" container accordion contenedor__acordeon__recomendaciones" id="accordionPanelsStayOpenExample">
    <h3 class="vendedor__dice">Recomendaciones</h3>
  <div class="accordion-item acordion__recomendacion">
    <h2 class="accordion-header " id="panelsStayOpen-headingOne">
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
    <a href="contacto.php">No estas seguro ?  comunicate con nosotros</a>
      </div>
    </div>
  </div>
  
  
</div>
<?php  } ?>
<?php  } ?>

<?php  include'layout/footer.php';