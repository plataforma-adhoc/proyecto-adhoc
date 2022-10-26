<?php  include'layout/nabvar.php'; 
 include'conexion-db-accent.php';
?>
   
  <section class="hero__main__vehiculos ">  
            <div class=" container hero__textos">
                <h1 class="title__carros__y__comionetas">La compra y venta <br><span class="title--active"> De vehiculos usados va en aumento.</span></h1> 
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
        <!-- <button type="submit"><i class="fa fa-search"></i></button> -->
</form>


  </div>
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3>
    <div class="vehiculos"id="insertar-resultados">
  </div>
  
</div>
<section class=" container contenedor__anuncio__propio">
            <div class="contenido__anuncio">
                <img src="./img/imagen__anuncio__conductores.png" alt="" class="imagen__anuncio__carros">

            </div>
            <div class="contenido__anuncio">
                <h2 class="subtitulo__anuncio">Conductor elegido </h2>
                 <p class="texto__anuncio">Contrata los servicios de un conductor elegido si no puedes conducir tu carro </p>
                   <a href="dashboard-usuario.php" class="publicar__carro">Conductores</a>
                </div>
         </section>
<?php  include'layout/footer.php';
