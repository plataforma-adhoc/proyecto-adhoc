<?php include'layout/nav-home-usuario.php';
include'conexion-db-accent.php';
if(!isset($_SESSION['id_usuario'])){
  header("Location: login-usuario");
  die();
}
    $consulta__datos__usuario = "SELECT *  FROM usuarios   WHERE id_usuario = '{$_SESSION['id_usuario']}' LIMIT 1";
    $resultado__consulta = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
    if(mysqli_num_rows($resultado__consulta) > 0){
      $datos__resultado = mysqli_fetch_array($resultado__consulta);
}?>



<div class="container contenedor__dashboard">
    <h2 class="vista__nombre__usuario"><i class="fas fa-user-astronaut"></i> Hola, <strong> <?php echo ucwords($datos__resultado['nombre_usuario'])?></strong></h2>
    <br><br>
    <h3 class="subtitulo__dashboard">Que haras hoy ? </h3>
    <div class="contenedor__card__dashboard">
      <div class="contenido__card__dashboard">
        <a href="publicar-vehiculos?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
          <div class="card__dashboard">
            <div class="contenido">
              <div>
              <i class="fas fa-car historial__de__vehiculos"></i>
              </div>
              <div>
                <br>
                <p>Anunciar un carro</p>  

              </div>
    
            </div>
        </div>
      </a>
      </div>
    <div class="contenido__card__dashboard">
    <a href="mis-carros-anunciados?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
        <div class="card__dashboard">
          <div class="contenido">
            <div>
            <i class="fas fa-history historial__de__vehiculos"></i>
            </div>
           <div>
             <br>
             <p>Historial de anuncio</p> 
           </div>
  
          </div>
      </div>
    </a>

  </div>

  <div class="contenido__card__dashboard">
    <a href="beneficios?idu=<?php  echo $datos__resultado['id_usuario'] ?>" class="enlace__anunciar__carro">
        <div class="card__dashboard">
          <div class="contenido">
            <div>
            <i class="fas fa-gifts historial__de__vehiculos"></i>
            </div>
           <div>
             <br>
             <p>Beneficios</p> 
           </div>
  
          </div>
      </div>
    </a>

  </div>
   
  </div>
  <div class="contenedor__graficas"> 
    <br>
    <div class="contenido__graficas">
      <div class="myChart">
        <div class="popover">
          <i class="fas fa-question-circle"></i>  
          <span class="tooltiptext">Toda la informacion de las personas que hicieron click y visitaron el perfil de tu vehiculo</span>
        </div>
        <div  id="grafica"></div>
      </div>
      <div class="myChart">
      <div class="popover">
            <i class="fas fa-question-circle"></i>  
            <span class="tooltiptext">Personas que se ha comunicado conmigo para pedir información del vehiculo o tuvieron la intención de hacerlo</span>
          </div>
          <div  id="grafica2"></div>
      </div>
    </div>
    </div>
  </div>
</div>

<br><br>
</div>

<div class="modal fade modal__notificaciones" id="modal-notificaciones" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen ">
    <div class="modal-content ">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body cuerpo__modal__notificaciones">
        <br><br>
        <h2 class="subtitulo__modal__body">Notificaciones</h2>
        <br>
        <?php  
            $seleccion__notificaciones = "SELECT *   FROM  comentario WHERE id_usuario ='{$_SESSION["id_usuario"]}' AND tipo = 'comentario'";
            $ejecutar__seleccion = mysqli_query($conexion__db__accent,$seleccion__notificaciones);

            $selecion__contador =  "SELECT id_notificacion  FROM notificaciones WHERE id_usuario = '{$_SESSION['id_usuario']}' ";
            $ejecutar__consulta__notificacion = mysqli_query($conexion__db__accent,$selecion__contador);
        

            if(mysqli_num_rows($ejecutar__seleccion) > 0 ){ 
              while($fila__notificaciones = mysqli_fetch_array($ejecutar__seleccion)){
                $fila__id__notificacion = mysqli_fetch_array($ejecutar__consulta__notificacion); ?>
              <div class="contenido__de__la__notificacion">
              <div class="notificacion">
                <br>
            <p class="comentario__notificacion">Se ha hecho un nuevo comentario <br> <?php  echo ucwords($fila__notificaciones['comentario']) ?></p>
            <p class="fecha__notificacion"><?php  echo $fila__notificaciones['fecha_comentario'] ?></p>     
            <a href="responder-comentarios?idu=<?php  echo $_SESSION['id_usuario'] ?>&idp=<?php echo $fila__notificaciones['id_publicacion']  ?>&idn=<?php  echo  $fila__id__notificacion['id_notificacion'] ?>" class="btn btn-primary">Responder</a>
          </div>
          <br>
        </div>
        <?php } ?> 
           <?php }else{ ?>
            <p class="no__hay__notificaciones">No hay notificaciones</p>
            <?php } ?> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
 

<?php include'layout/footer-home.php' ?>
<script>


  let id = <?php echo $_SESSION['id_usuario'] ?>  
  function graficos(id,id__publicacion){
    var url__servidor = 'https://adhoc.com.co/'
    let cantidad__clicks = [];
    let fecha__clicks = []
    let form__data =  new FormData()
    form__data.append('id',id)
    fetch(url__servidor+'cargar-datos-grafica',{
      method:'post',
      body:form__data
      
    }).then(respuesta => respuesta.json())
    .then(data => {
      var datos =   JSON.parse(JSON.stringify(data))
      for(let  i = 0; i < datos.length; i++){
        cantidad__clicks.push(datos[i][3])
        fecha__clicks.push(datos[i][4])
      }
  
     
      var options = {
        colors: ["#008A55"],
          series: [{
            name: "Total de visitas al perfil de mi vehiculo",
            data:cantidad__clicks,
            style: {
              fontSize: '16px',
              fontFamily: 'Montserrat',
              fontWeight: 400,
              cssClass: 'apexcharts-xaxis-label',
          }
     
        }],
        tooltip: {
        theme: "dark"
      },
        
          chart: {
          height: 350,
          type:'area',
          zoom: {
            enabled: false
          }
      },

    dataLabels: {
          enabled: false,
          style: {
         colors: ['#000']
      },
    offsetX: 30
    
  },
        markers: {
          size: 0,
        },
        stroke: {
          curve: 'straight',
        },
       

        title: {
          text: 'Visitas',
          align: 'left',
        style: {
      fontSize:  '20px',
      fontWeight:  'bolder',
      fontFamily: 'Montserrat',
      color:  'white'
    },
        },
    
     
        
        xaxis: {
          categories:fecha__clicks,
          labels: {
          show: true,
          rotate: -45,
          rotateAlways: false,
          hideOverlappingLabels: true,
          showDuplicates: false,
          trim: false,
          minHeight: undefined,
          maxHeight: 120,
          style: {
            
              fontFamily: 'Montserrat',
              fontWeight: 400,
              cssClass: 'apexcharts-xaxis-label',
          }
        }
      
        }
        };

  var chart = new ApexCharts(document.getElementById("grafica"), options);
  chart.render();
     
    })
  }
  graficos(<?php echo $_SESSION['id_usuario'] ?>);
  var id__usuario = <?php echo $_SESSION['id_usuario'] ?>;
 function graficos__contacto(id__usuario){
  var url__servidor = 'https://adhoc.com.co/'
  let cantidad__clicks = [];
    let fecha__clicks = []
  let form__data =  new FormData()
    form__data.append('id',id__usuario)
    fetch(url__servidor+'cargar-graficos-contacto',{
      method:'POST',
      body:form__data
      
    })
    .then(respuesta => respuesta.json())
    .then(data => {
      var datos =   JSON.parse(JSON.stringify(data))
      for(let  i = 0; i < datos.length; i++){
        cantidad__clicks.push(datos[i][3])
        fecha__clicks.push(datos[i][4])
      }
     
      var options = {
    colors: ["#008A55"],
          series: [{
            name: "Personas que me han contactado",
            data: cantidad__clicks
        }],
          chart: {
          height: 350,
          type: 'line',
          zoom: {
            enabled: false
          }
        },
        dataLabels: {
          enabled: false
        },
        stroke: {
          curve: 'straight'
        },
        title: {
          text: 'Contacto',
          align: 'left',
          style: {
      fontSize:  '20px',
      fontWeight:  'bolder',
      fontFamily: 'Montserrat',
      color:  'white'
    }
        },

       
        xaxis: {
          categories:fecha__clicks,
        }
        };

        var chart2 = new ApexCharts(document.getElementById("grafica2"), options);
        chart2.render();
  })
}
  
  graficos__contacto(<?php echo $_SESSION['id_usuario'] ?>)  
</script>

