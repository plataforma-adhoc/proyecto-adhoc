<?php 

   include'layout/nav-home-usuario.php';
    include'config/config.php';
    include'conexion/conexion-db-accent.php';

    $id_conductor = $_GET['idc'] ? $_GET['idc'] : '';
    if($id_conductor ===""){
       header("Location: ./ dashboard-usuario");
    }
    
    $consulta__datos__conductor = "SELECT * FROM conductores WHERE id_conductor = '$id_conductor' LIMIT 1";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
   $resultado = mysqli_fetch_array($ejecutar__consulta);


    $consulta__productos = "SELECT * FROM productos    WHERE activo = 1";
    $ejecutar__consulta__productos = mysqli_query($conexion__db__accent, $consulta__productos);
 
?>
<div class="container contenedor__servicios">
    <h2 class="titulo__servicios"> Servicios</h2>
    <p class="parrafo__servicios__info">Cada servicio de conductor elegido que eligas tiene un timepo maximo de espera, una vez llegue el conductor
      al punto de encuentro, luego de transcurrido este 
      tiempo el conductor iniciara el servicio
    </p>
    <br>
    <p class="parrafo__servicios">Elige uno de nuestros planes de servicios para continuar </p>
    <div class="contenedor__cards__servicios">
        <?php  while($fila = mysqli_fetch_array($ejecutar__consulta__productos)){  ?>
        <div class="cards__servicios">
        <h3 class="titulo__producto"><?php echo $fila['nombre_producto'] ?></h3>
        <p class="precio_producto">$ <?php echo number_format($fila['valor_producto'],2,'.','.') ?></p>
      
      <br><br>
         <div class="botones">
             <a href="./detalles?ids=<?php echo $fila['id_producto'] ?>&token=<?php echo hash_hmac('sha1',$fila['id_producto'],TOKEN)?>&idc=<?php echo $resultado['id_conductor'] ?>">detalles</a>
             <button type="button" onclick="agregar(<?php echo  $fila['id_producto']?>,'<?php echo hash_hmac('sha1',$fila['id_producto'],TOKEN) ?>')">Agregar</button>
            </div>
            <br>
            <div><?php echo utf8_encode($fila['mas_vendido'] ) ?></div>
          </div>
     <?php } ?>
    </div>

</div>

<script>
   function agregar(id,token){
       let url = 'agregar-servicio';
       let form__data = new FormData();

       form__data.append('id',id);
       form__data.append('token',token);
     

       fetch(url,{
       method:'POST',
        body:form__data,
        
       }).then(respuesta => respuesta.json())
       .then(data=>{
        if(data.ok){
         Swal.fire({
      position: 'bottom-end',
      background:'#202F36',
      icon: 'success',
      title: `<a href="./compra?idc=<?php  echo $id_conductor  ?>"class="enlace__compra__servicio" >Se agrego a tu lista</a>`,
      toast:true,
      showConfirmButton: false,
      })
        
        }
       })
    }


</script>
<?php   include'layout/footer-home.php';?>