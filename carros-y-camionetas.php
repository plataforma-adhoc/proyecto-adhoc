<?php 
$titulo = "AdHoc | venta de carros usados";
 include'layout/nabvar.php'; 
 include'conexion-db-accent.php';
?>
   
  <section class="hero__main__vehiculos"> 
      <img src="./img/carros__y__camionetas.webp" alt="" class="img__carros__y__camionetas">
            <div class=" container hero__textos__carros__y__camionetas">
                <h1 class="title__carros__y__comionetas">CARROS USADOS DE TODAS  <br><span class="title--active__carros__y__camionetas"> LAS MARCAS Y MODELOS.</span></h1> 
               
            </div>
        </section>
    </header>
    <div class="contenedor__del__buscador">
      <h2 class="subtitulo__buscador">¿Que carro buscamos hoy? </h2>
        <div class="buscador">
        <form class="example">
        <input type="text" placeholder="Buscar un carro" name="buscador" id="buscador">
</form>
  </div>

    </div>
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
    <div class="vehiculos" id="insertar-resultados">
 </div>


  

</div>
<?php  include'layout/footer.php';
