<?php
include'layout/nav-home-usuario.php';
include'conexion-db-accent.php'; ?>
<div class="container contenedor__graficas"> 
    <h1 class="titulo__carro__anunciado">Estadisticas</h1>
      <p class="subtitulo__anuncio__carro">Analiza y observa cuantas veces tu anuncio ha sido visto o cuantas veces haz sido contactado por posibles compradores</p>  
      <br>
    <div class="contenido__graficas">
      <div class="myChart">
        <div class="popover">
          <i class="fas fa-question-circle"></i>  
          <span class="tooltiptext">Personas que hicieron click y visitaron el perfil del vehículo</span>
        </div>
        <div  id="grafica"></div>
      </div>
      <div class="myChart">
      <div class="popover">
            <i class="fas fa-question-circle"></i>  
            <span class="tooltiptext">Personas que se han comunicado conmigo para pedir información del anuncio  o tuvieron la intención de hacerlo</span>
          </div>
          <div  id="grafica2"></div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

<?php include'layout/footer-home.php' ?>
<script>

  let id = <?php echo $_SESSION['id_usuario'] ?>  
  function graficos(id,id__publicacion){
    var urlServidor = 'https://adhoc.com.co/'
    let cantidad__clicks = [];
    let fecha__clicks = []
    let form__data =  new FormData()
    form__data.append('id',id)
    fetch(urlServidor+'cargar-datos-grafica',{
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
  var urlServidor = 'https://adhoc.com.co/'
  let cantidad__clicks = [];
    let fecha__clicks = []
  let form__data =  new FormData()
    form__data.append('id',id__usuario)
    fetch(urlServidor+'cargar-graficos-contacto',{
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



<?php include'layout/footer-home.php' ?>