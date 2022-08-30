<?php  include'layout/nav-home-conductor.php';
$id__conductor = isset($_GET['id']) ? $_GET['id']: 0;
if($id__conductor ===""){
  header("Location: ./dashboard-conductor");
  exit;
}
 
?>
<h2 class="titulo__historial">Historial</h2>
<p class="parrafo__historial">En tu historial puedes revisar a detalles tu solicitudes, en esta seccion veras la informacion necesaria de tus servicos de conductor elegido</p>
<?php  

$consulta__datos__servicio = "SELECT *  FROM detalles__de__la__compra WHERE id_conductor = '{$_SESSION['id_conductor']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
while($resultado = mysqli_fetch_array($ejecutar__consulta)){?>
<br><br>
<div class="container contenedor__datos__historial">  
<?php
$consulta__datos__servicio = "SELECT *  FROM usuarios WHERE id_usuario = '{$resultado['id_usuario']}'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicio);
$resultado__datos__usuario = mysqli_fetch_array($ejecutar__consulta);


?>

<div class="info__perfil datos__de__historial">
        <img src="upload/<?php  echo $resultado__datos__usuario['avatar'] ?>" alt="" class="foto__de__perfil foto__historial">
        
    </div> 
    <div class="info__perfil datos__de__historial">
        <div class="datos__del__perfil__de__usuario">
        <br><br><br><br>
            <p class="texto texto__historial">datos del usuario</p>
            <div>
                <p class="datos__basicos"><strong> Nombre : </strong><?php  echo $resultado__datos__usuario['nombre_usuario'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido : </strong> <?php  echo $resultado__datos__usuario['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido : </strong> <?php  echo $resultado__datos__usuario['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Email :</strong>  <?php  echo $resultado__datos__usuario['email'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento : </strong> <?php  echo $resultado__datos__usuario['numero_documento'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono :</strong>  <?php  echo $resultado__datos__usuario['numero_telefono'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Fecha de registro :</strong>  <?php  echo date("d-m-Y", strtotime($resultado__datos__usuario['fecha_de_registro']))?></p>
            </div>
            <a href="./eliminar-historial-conductor?id=<?php echo $resultado['id'] ?>" class="enlace__eliminar__historial">Eliminar <i class="fas fa-trash-alt"></i></a>
          <br><br>
            <p class="parrafo__info"><i class="fas fa-info-circle"></i> si eliminas este historial no sera posible recuperarlo</p>
        </div>
</div>
<div class="info__perfil datos__de__historial">
    <div class="datos__del__perfil__de__usuario ">
         <p class="texto texto__historial">datos del servicio</p>
         <br>
  
             <div>
                 <p class="datos__basicos"><strong>Id servicio </strong> : <?php  echo $resultado['id'] ?></p>
             </div>
             <div>
                 <p class="datos__basicos"><strong>Nombre servicio : <br><br></strong> <?php  echo $resultado['nombre_servicio'] ?></p>
             </div>
             <div>
                 <p class="datos__basicos"><strong>Valor servicio : </strong> <?php  echo $resultado['precio_compra'] ?></p>
             </div>
             <div>
                 <p class="datos__basicos"><strong>Cantidad servicio : </strong> <?php  echo $resultado['cantidad_compra'] ?></p>
             </div>
             <p class="texto">Datos adicionales</p>
                 <p class="datos__basicos"><strong></strong><?php echo $resultado['descripcion'] ?></p>
         </div>
 </div>
</div>


        
    <?php   } ?>
<br><br>
<?php  include'layout/footer-home.php' ?>