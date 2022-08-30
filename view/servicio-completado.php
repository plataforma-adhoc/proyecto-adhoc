<?php include'layout/nav-home-conductor.php';
$id__conductor = isset($_GET['idc']) ? $_GET['idc'] : '';
if($id__conductor){
    $consulta__datos__servicios = "SELECT * FROM datos__inicio__recorrido WHERE id_conductor = '$id__conductor' LIMIT 1";
    $ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__servicios);


}?>

<div class="container contenedor__mis__solicitudes">
    <h2 class="subtitulo__solicitudes">Servivios completados</h2>
    <p class="texto__solicitud">Toda la informacin de servicios completados aparecera aqui .
    </p>
    <br><br>
    <?php                              
    
    if(mysqli_num_rows($ejecutar__consulta) > 0){
        while($fila = mysqli_fetch_array($ejecutar__consulta)){ 
            
            $consulta__datos__usuario = "SELECT avatar FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";  
             $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
             $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);?>
        
     <div class="datos__de__solicitud">
      <div class="info__perfil  datos__mis__solicitudes"> 
      <img src="upload/<?php echo $resultado['avatar'] ?>" alt="" class="foto__de__perfil">
      <div>
      

     </div>
    </div>
      <div class="info__perfil datos__mis__solicitudes">
      <div class="datos__del__perfil__de__usuario ">
    <br><br><br><br><br>
      <p class="texto">datos del usuario</p>
      <?php                 
      $consulta__datos__usuario = "SELECT nombre_usuario, primer_apellido,segundo_apellido,email,numero_documento,numero_telefono 
     FROM  usuarios WHERE id_usuario = '{$fila['id_usuario']}'";
      
      $ejecutar__consulta__datos__usuario = mysqli_query($conexion__db__accent,$consulta__datos__usuario);
      $resultado = mysqli_fetch_array($ejecutar__consulta__datos__usuario);
      ?> 
            <div>
                <p class="datos__basicos"><strong> Nombre : </strong>  <?php echo $resultado['nombre_usuario']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido: </strong>  <?php echo $resultado['primer_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido : </strong>  <?php echo $resultado['segundo_apellido'] ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>E-mail : </strong>  <?php echo $resultado['email']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento : </strong>  <?php echo $resultado['numero_documento']?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono : </strong><?php echo $resultado['numero_telefono'] ?></p>
            </div>
            <?php   $consulta__detalles__compra = "SELECT * FROM detalles__de__la__compra WHERE id_conductor = '$id__conductor' ";  
                  $ejecutar__consulta__compra = mysqli_query($conexion__db__accent,$consulta__detalles__compra);
                  if(mysqli_num_rows($ejecutar__consulta) > 0)
                  while($fila__resultado = mysqli_fetch_array($ejecutar__consulta__compra)){?>
            
                <div>
                  <br>
                <p class="texto">Informacion general</p>
                <p class="datos__basicos"><strong></strong><?php echo $fila__resultado['descripcion'] ?></p>
            </div>
         <?php }   ?>
        </div>
      </div>
      <div class="info__perfil datos__mis__solicitudes">
      <div class="datos__del__perfil__de__usuario servicio">
      <p class="texto">datos del servicio a tomar</p>
            <div>
                <p class="datos__basicos"><strong>Direccion inicio:</strong>  <?php echo $fila['direccion_inicio']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Hora de inicio:</strong>  <?php echo date('g:i:a',strtotime($fila['hora_inicio'])) ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>El dia:  </strong> <?php echo $fila['fecha_inicio'] ?></p>
            </div>
           
        </div>


        <?php   if($fila['estado_recorrido'] === "Recorrido terminado"){ ?>
        <p class="parrafo__estado culminado" id="estado">Estado solicitud : <?php echo $fila['estado_recorrido']  ?></p>
        <?php } ?>
    </div>
        </div>
        </div>
        
    <?php } ?>
    <?php } ?>
 
    
</div>





<?php include'layout/footer-home.php' ?>