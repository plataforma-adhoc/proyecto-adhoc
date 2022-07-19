<?php  include'layout/nav-home-conductor.php';
    include'config/config.php';

    $id__servicio = isset($_GET['ids']) ? $_GET['ids'] :'';
    $token =  isset($_GET['token']) ? $_GET['token'] : '';

    if($id__servicio ==="" || $token === ""){
     header("Location: ./dashboard-usuario");
     exit;
    }else{
        $token__temporal = hash_hmac('sha1',$id__servicio,TOKEN);
        if($token == $token__temporal){

            $consulta__productos = "SELECT COUNT(id_producto) FROM productos    WHERE id_producto = '$id__servicio'AND  activo = 1 LIMIT 1";
            $ejecutar__consulta__productos = mysqli_query($conexion__db__accent, $consulta__productos);
            if(mysqli_num_rows($ejecutar__consulta__productos) > 0){

            $consulta__productos = "SELECT * FROM productos    WHERE id_producto = '$id__servicio'AND  activo = 1";
            $ejecutar__consulta__productos = mysqli_query($conexion__db__accent, $consulta__productos);

            $resultado = mysqli_fetch_array($ejecutar__consulta__productos);
            $nombre__producto = $resultado['nombre_producto'];
            $precio__producto = $resultado['valor_producto'];
            $descripcion__producto = $resultado['descripcion'];
            $descuento__producto = $resultado['descuento'];
            $precio__descuento =  $precio__producto- (($precio__producto * $descuento__producto) / 100);
            }

        }else{
            header("Location: ./dashboard-usuario"); 
            exit;
        }
    }

?>

<div class="container contenedor__detalles">
    <h2 class="titulo__detalles">Detalle individual</h2>
    <p class="parrafo__detalles">detalle indivdual de cada uno de los servicios de conductor elegido</p>
    <div class="contenido__detalles">
        <div class="detalles">
        <h3 class="titulo__producto"><?php echo $nombre__producto?></h3>
        <?php  if($descuento__producto > 0){ ?>
            <p class="titulo__producto"> <del class="precio__antes">antes $ <?php echo number_format($precio__producto,2,'.','.')?></del></p>
        <h3 class="titulo__producto"><?php echo number_format($precio__descuento,2,'.','.') ?>
         <span class="precio__descuento"><?php  echo $descuento__producto  ?>% de descuento</span>
    </h3>
     <p class="parrafo__info"><i class="fas fa-info-circle"></i> esta oferta es por tiempo limitado</p>

       <?php }else{?>
        <h3 class="titulo__producto"><?php echo number_format($precio__producto,2,'.','.') ?> </h3>
        <?php } ?>
        </div>
        <div class="detalles">
            <div class="descripcion">
                <h5><?php  echo $descripcion__producto;?> </h5>

            </div>
          <div>
            <!-- <a href="" class="enlace__compra">Comprar <i class="fas fa-paper-plane"></i></a> -->
            <button type="button" class="enlace__compra" onclick="agregarProducto(<?php echo $id__servicio ?>,'<?php echo $token__temporal ?>')">Comprar <i class="fas fa-paper-plane"></i></button>
          </div>
        </div>

    </div>
</div>

<script>
   function agregarProducto(id,token){
       let url = 'agregar-servicio';
       let form__data = new FormData();

       form__data.append('id',id);
       form__data.append('token',token);

       fetch(url,
       method:'POST',{
        body:form__data,
        mode:'cors'
       }).then(respuesta => respuesta.json())
       .then(data=>{
        if(data.ok){
   
        }
       })
    }
</script>
<?php  include'layout/footer-home.php' ?>