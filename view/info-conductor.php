<?php include'layout/nav-home-usuario.php';

$id = isset($_GET['idc']) ? $_GET['idc'] : '';
if($id ==="" || $id !=$id){
header("Location:./dashboard-usuario");
}
$consulta__datos__conductor = "SELECT * FROM conductores WHERE id_conductor = '$id' LIMIT 1";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__datos__conductor);
$resultado = mysqli_fetch_array($ejecutar__consulta);

?>
<div class="container contenedor__datos__perfil">
    <div class="info__perfil">
        <img src="upload/<?php  echo $resultado['avatar']  ?>" alt="" class="foto__de__perfil">
        <div class="redes__sociales">
        <?php  if($resultado['facebook'] !=NULL ){ ?>
            <a href="<?php echo $resultado['facebook'] ?>" class="enlace__de__redes__sociales" target="_blank"><i class="fab fa-facebook"></i></a>
             <?php } ?>  
              
             <?php  if($resultado['instagram'] !=NULL ){ ?>
                <a href="<?php echo $resultado['instagram'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-instagram"></i></a>
             <?php } ?> 

             <?php  if($resultado['twitter'] !=NULL ){ ?>
                <a href="<?php echo $resultado['twitter'] ?>" class="enlace__de__redes__sociales"target="_blank"><i class="fab fa-twitter"></i></a>
             <?php } ?>

        </div>

        <a href="./servicios?idc=<?php  echo $resultado['id_conductor']  ?>" class="enlace__editar__perfil">Quiero este conductor </a>
        <br><br>
        <p class="datos__basicos">Conductor disponible</p>
    </div>
    <div class="info__perfil">
        <div class="datos__del__perfil__de__usuario">
            <div>
                <p class="datos__basicos"><strong>Nombre : </strong><?php  echo $resultado['nombre_conductor']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Primer apellido : </strong><?php  echo $resultado['primer_apellido']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Segundo apellido : </strong><?php  echo $resultado['segundo_apellido']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Email : </strong><?php  echo $resultado['email']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Documento : </strong><?php  echo $resultado['numero_documento']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Telefono : </strong><?php  echo $resultado['numero_telefono']  ?></p>
            </div>
            <div>
                <p  class="datos__basicos"> <strong>Licencia : </strong><?php  echo $resultado['numero_licencia']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"> <strong>Categoria : </strong><?php  echo $resultado['categoria_licencia']  ?></p>
            </div>
            <div>
                <p class="datos__basicos"><strong>Estado : </strong><?php  echo $resultado['status']  ?></p>
            </div>
            <?php if($resultado['quien_soy'] != NULL) {  ?>
            <div>
                <p class="datos__basicos quien__soy"><strong> Quien soy : </strong><?php  echo $resultado['quien_soy']  ?></p>
            </div>
            <?php } ?>
            <div>
                <p class="datos__basicos fecha__registro">Miembro desde <?php echo date("d-m-y",strtotime($datos__resultado['fecha_de_registro'])) ?></p>
            </div>
        </div>
    </div>
</div>

<div class="container contenedor__opinion">
    <p class="titulo__opinion">Que opinan otros usuarios de este conductor</p>
    <?php      
$consulta__comentarios = "SELECT * FROM comentarios__conductor WHERE id_conductor = '$id'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$consulta__comentarios);
if(mysqli_num_rows($ejecutar__consulta) > 0){

while($fila = mysqli_fetch_array($ejecutar__consulta)){ ?>
<div class="opinion">
 <div class="opinion__1" >
     <div class="item__opinion">
         <img src="upload/<?php echo $datos__resultado['avatar'] ?>" alt="" class="avatar__opinion__1">
         <div class="nombre__item__opinion"><p><?php echo $datos__resultado['nombre_usuario'] ?></p></div>
     </div>
         <div class="parrafo__item__opinion">
             <p class="parrafo"><?php echo $fila['comentario'] ?></p>
             <p class="fecha__publicacion"><?php echo $fila['fecha_comentario'] ?></p>
     </div>
     </div>
 
 </div>

 <?php } ?>
 <?php }else{ ?>
    <p class="titulo__opinion">No hay comentarios aun</p>

 <?php } ?>
 </div> 
<br><br>

<?php include'layout/footer-home.php'  ?>