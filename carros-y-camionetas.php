<?php 
$titulo = "AdHoc | Vende y compra tu carro usado, publica tu vehiculo y vendelo en Bogotá ";
 include'layout/nabvar.php'; 
 include'conexion-db-accent.php';
?>
   
  <section class="hero__main__vehiculos ">  
            <div class=" container hero__textos">
                <h1 class="title__carros__y__comionetas">La compra y venta <br><span class="title--active"> de vehiculos usados va en aumento.</span></h1> 
                <p class="copy"> Publica tu vehiculo usado y obten una oferta de compra de cientos de posibles compradores o estrena  tu 
                    proximo carro 
                 
                <span class="copy__active">¡ aqui!</span></p>
                <!-- <a href="usuario.php" class="cta">Pedir mi conductor</a> -->
            </div>
        </section>
    </header>
   
      <h2 class="subtitulo__buscador">¿Que carro buscamos hoy? </h2>
        <div class="buscador">
        <form class="example">
        <input type="text" placeholder="Buscar un carro" name="buscador" id="buscador">
</form>


  </div>
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
    <div class="vehiculos" id="insertar-resultados">
   


 </div>


  

</div>
<?php  include'layout/footer.php';
