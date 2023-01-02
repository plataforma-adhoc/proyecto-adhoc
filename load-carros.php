<?php 

include'conexion-db-accent.php'; 
$search = isset($_POST['buscador']) ?   mysqli_real_escape_string($conexion__db__accent,$_POST['buscador']) : NULL;
$extraer__datos__publicaciones = "SELECT * FROM informacion__del__vehiculo__en__venta  WHERE marca_del_vehiculo LIKE '%{$search}%' OR modelo_vehiculo LIKE '%{$search}%' AND estado_anuncio = 'Activo' ";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$extraer__datos__publicaciones);
$numero__fila = mysqli_num_rows($ejecutar__consulta);


$seleccion__imagenes = "SELECT foto_1 FROM fotos__del__vehiculo WHERE estado_anuncio = 'Activo'";
$ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$seleccion__imagenes);



$consulta__contacto__vendedor = "SELECT * FROM contacto__vendedor WHERE estado_anuncio = 'Activo' ";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__contacto__vendedor);


$html = '';
if($numero__fila > 0 ){
while($fila = mysqli_fetch_array($ejecutar__consulta)){ 
 $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
 $fila__contactos = mysqli_fetch_array($ejecutar__consulta__contacto);
    $html .= '<div class="descripcion__del__vehiculo">
    <div class="conetendor__imagen__vehiculo">
        <img src="'.$fila__fotos['foto_1'] .'" alt="Foto portada del carro usado en venta" class="imagen__del__vehiculo">

    </div>
<div class="datos__del__vehiculo">
   <p class="nombre__del__vehiculo">'. ucwords($fila['marca_del_vehiculo']).'</p>
   <div class="motor">
  <p class="motor__del__vehiculo">'.ucwords($fila['modelo_vehiculo']).'</p>
  <p class="motor__del__vehiculo">'.  $fila['cilindraje_vehiculo'].'</p>

</div> 
  <div class="kilometraje__y__año">
  <div>
      <p class="kilometros">'. number_format($fila['kilometros_del_vehiculo'],2,'.','.') .'KM</p>

  </div>
  <div>
      <p class="modelo__del__vehiculo"> '.$fila['anio_fabricacion'].'</p>

  </div>
  <div>
      <p class="placas__del__vehiculo">  ** '.$fila['matricula_del_vehiculo'].'</p>

  </div>
  </div>
  <h3 class="precio__del__vehiculo">$'.number_format($fila['precio_del_vehiculo'],2,'.','.').'</h3>
  <div class="contactos__del__vehiculo">
  <div>
  <a href="https://api.whatsapp.com/send?phone=numero'. $fila__contactos['whatsapp_1'].'&text=mensaje=Hola vi el anuncio de tu vehiculo an AdHoc" class="enlace__whatsapp"><i class="fab fa-whatsapp" target="_blank"></i> Habla con el vendedor</a>
   </div>
   <a href="detalles-usado?idp='.$fila['id_publicacion_vehiculo'].'&idu='.$fila['id_usuario'].'" class="mas__detalles"><i class="fas fa-plus"></i> Mas detalles
   </a>
  </div>

</div>
</div>
';
}
 }else{
    $html .='<div class="container no__resultado">
      <img src="./img/no__resultados__de__busqueda.svg" alt=" ilustracion busqueda " class="imagen__no__resultados">
      
      <h2 class="subtitulo__sin__resultados"><b>Sin resultados</b></h2></div> ';
 }
 echo json_encode($html,JSON_UNESCAPED_UNICODE);
?>

