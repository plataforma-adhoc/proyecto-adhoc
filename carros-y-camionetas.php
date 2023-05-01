<?php 
$titulo = "AdHoc | venta de carros usados";
 include'layout/nabvar.php'; 
?> 
  <section class="hero__main__vehiculos"> 
      <img src="./img/carros__y__camionetas.webp" alt="camioneta 4x4 " class="img__carros__y__camionetas">
            <div class=" container hero__textos__carros__y__camionetas">
                <h1 class="title__carros__y__comionetas">CARROS USADOS DE TODAS  <br><span class="title--active__carros__y__camionetas"> LAS MARCAS Y MODELOS.</span></h1> 
               
            </div>
        </section>
    </header>
    
<div class="container contendor__de__vehiculos">
    <h3 class="subtitulo__vehiculos">Novedades</h3> 
    <div class="vehiculos">
  <?php  
 include'conexion-db-accent.php';
  
$extraer__datos__publicaciones = "SELECT * FROM informacion__del__vehiculo__en__venta WHERE estado_anuncio = '1'";
$ejecutar__consulta = mysqli_query($conexion__db__accent,$extraer__datos__publicaciones);
$numero__fila = mysqli_num_rows($ejecutar__consulta);

 
$seleccion__imagenes = "SELECT * FROM fotos__del__vehiculo  WHERE estado_anuncio = '1'";
$ejecutar__consulta__fotos = mysqli_query($conexion__db__accent,$seleccion__imagenes);
$numero__fila__fotos = mysqli_num_rows($ejecutar__consulta__fotos); 



$consulta__contacto__vendedor = "SELECT * FROM contacto__vendedor WHERE estado_anuncio = '1'";
$ejecutar__consulta__contacto = mysqli_query($conexion__db__accent,$consulta__contacto__vendedor);
$numero__fila__contacto = mysqli_num_rows($ejecutar__consulta__contacto); 

if($numero__fila > 0 && $numero__fila__fotos > 0 && $numero__fila__contacto > 0){
while($fila = mysqli_fetch_array($ejecutar__consulta)){
   $fila__fotos = mysqli_fetch_array($ejecutar__consulta__fotos);
 $fila__contactos = mysqli_fetch_array($ejecutar__consulta__contacto) ?>
    <div class="descripcion__del__vehiculo">
    <div class="contenedor__imagen__vehiculo">
         <img src="<?php echo $fila__fotos['foto_1'] ?>" alt="Foto portada del carro usado en venta" class="imagen__del__vehiculo">
         
         <?php if($fila['nombre_paquete'] ==="PREMIUN"){ ?>
          <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Patrocinado <?php echo ucwords($fila['nombre_vendedor'])?> </p>

<?php } ?>

<?php if($fila['nombre_paquete'] ==="GRATIS"){ ?>
 <p class="texto__segun__paquete"><i class="fas fa-info-circle"></i> Anunciado por <?php echo ucwords($fila['nombre_vendedor'])?></p>
<?php } ?>
    </div>
<div class="datos__del__vehiculo">
  <div class="motor">
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['marca_del_vehiculo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo ucwords($fila['modelo_vehiculo']) ?></p>
  <p class="motor__del__vehiculo"><?php echo  $fila['cilindraje_vehiculo'] ?></p>
</div> 
  <div class="kilometraje__y__año">
  <div>
      <p class="kilometros"><i class="fas fa-clock"></i> <?php echo  number_format($fila['kilometros_del_vehiculo'],2,'.','.') ?></p>
  </div>
  
  <div>
      <p class="modelo__del__vehiculo"><i class="fas fa-calendar"></i> <?php echo $fila['anio_fabricacion'] ?></p>

  </div>

  </div>
  <div class="contenido__contacto__mas__detalles">
    <div class="contactos__del__vehiculo">
      <a href="https://api.whatsapp.com/send?phone=numero<?php echo $fila__contactos['whatsapp_1']?>&text=mensaje=Hola vi el anuncio de tu vehiculo en AdHoc" class="enlace__whatsapp"><i class="fab fa-whatsapp" target="_blank"></i></a>
      </div>
     <a href="detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" class="mas__detalles"><i class="fas fa-plus"></i> Mas detalles
     </a>
    </div>
      <div>
  </div>

<hr class="hr">
<div class="btn__compartir">
  <p class="texto__compartir">Compartir en <i class="fas fa-share-alt"></i> </p>
  <div class="enlaces__comprtir">
    <div class="compartir">
      <a href="https://www.facebook.com/sharer/sharer.php?u=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>" target_blank><i class="fab fa-facebook iconos__compartir"></i></a>
    </div>
    <div class="compartir">
    <a href="https://twitter.com/intent/tweet?text=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>"><i class="fab fa-twitter iconos__compartir"></i></a>
    </div>
    <div class="compartir">
      <a href="https://www.linkedin.com/shareArticle?mini=true&url=http%3A//localhost/accent__hollding/detalles-usado?idp=<?php echo $fila['id_publicacion_vehiculo']?>&idu=<?php echo $fila['id_usuario']?>"><i class="fab fa-linkedin-in  iconos__compartir"></i></a>

    </div>
  </div>
  <div>
  <p class="modelo__del__vehiculo precio__del__carro"><i class="fas fa-dollar-sign"></i> <?php echo number_format($fila['precio_del_vehiculo'],2,'.','.') ?></p>
</div>
</div>
</div>
<br>
</div>

<?php } ?>
<?php } ?> 
 </div>
 <div class="contenedor__asesoramiento" id="asesoramiento">
  <h2 class="subtitulo__asesoramiento">Como vender tu carro, rapido</h2>
<div class="contenido__asesoramiento">
  <div class="asesoramiento">
    <i class="fas fa-camera-retro"></i>
    <div class="descripcion__asesoramiento">
      <h3 class="title__asesoramiento">Toma fotos de calidad</h3>
      <p class="parrafo__asesoramiento">Busca un lugar bien iluminado y sin sombras para tomar las fotos. Si es posible, toma las fotos al aire libre, preferiblemente en un día soleado, para que la luz natural ilumine el carro de manera uniforme.
      Usa una cámara de buena calidad o un teléfono móvil con una buena cámara. Asegúrate de que las fotos estén enfocadas y sean de alta resolución.
      </p>
    </div>
  </div>
  <div class="asesoramiento   borde__derecho">
    <i class="fas fa-wrench"></i>
    <div class="descripcion__asesoramiento">
      <h3 class="title__asesoramiento">Realizar reparaciones necesarias</h3>
<p class="parrafo__asesoramiento">Realiza un mantenimiento general al carro, como cambio de frenos, ajuste de la suspensión, revisión del sistema eléctrico, entre otros. Esto puede ayudar a que el carro funcione mejor y aumentar su valor de reventa.
Lava y detalla el carro para que luzca bien tanto por fuera como por dentro. Un carro limpio y bien cuidado puede hacer una gran diferencia en el precio de venta.
</p>
    </div>
  </div>
  <div class="asesoramiento  borde__derecho">
    <i class="fas fa-ad"></i>
    <div class="descripcion__asesoramiento">
      <h3 class="title__asesoramiento">Escribir un anuncio atractivo</h3>
      <p class="parrafo__asesoramiento">
        Si tienes un historial de mantenimiento detallado, inclúyelo en el anuncio. Esto puede ayudar a los posibles compradores a sentirse más seguros de la calidad del carro.
        Describe el estado actual del carro y si ha tenido algún tipo de mantenimiento o reparaciones recientes. Es importante que los posibles compradores sepan que el carro está en buenas condiciones.
      </p>
    </div>
  </div>
  <div class="asesoramiento  borde__derecho">
   <i class="fas fa-search-plus"></i>
   <div class="descripcion__asesoramiento">
     <h3 class="title__asesoramiento">Se honesto</h3>
<p class="parrafo__asesoramiento">Proporciona una descripción detallada del estado actual del carro. Si hay rasguños, abolladuras, partes rotas o defectos, mencionarlos en el anuncio. De esta forma, los posibles compradores sabrán qué esperar antes de ver el carro en persona.
Establece un precio justo para el carro. Investiga los precios de mercado de carros similares para tener una idea de cuál es un precio justo. Si el carro necesita reparaciones o mantenimiento.
</p>
   </div>
  </div>
</div>
</div>
<h2 class="subtitulo__asesoramiento">Guia de como vender tu carro</h2>
<div class="guia__para__vender__tu__carro">
<div class="guia">
  <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" class="enlace__guia">
    <div class="contenido__guia">
    <i class="fas fa-car preparando__el__carro"></i>
      <h3>Preparando tu carro </h3>
      <p class="texto__guia"> Antes de nada, deberás limpiar el interior y el exterior de tu carro. Esto incluye lavar el carro, aspirar los asientos, alfombras, el maletero y el área de almacenamiento.</p>
    </div>

  </a>
</div>
<div class="guia">
  <a href="#" class="enlace__guia" data-bs-toggle="modal" data-bs-target="#exampleModal2">
    <div class="contenido__guia">
      <i class="fas fa-keyboard creando__el__anuncio"></i>
        <h3>Creando el anuncio</h3>
       <p class="texto__guia">Un anuncio de buena calidad, conduce a una venta mucho más rapida lee nuestro  consejo para que puedas crear un anuncio efectivo</p>
    </div>

  </a>
</div>
<div class="guia">
  <a href="#" class="enlace__guia" data-bs-toggle="modal" data-bs-target="#exampleModal3">
    <div class="contenido__guia">
      <i class="fas fa-handshake cerrando__la__venta"></i>
        <h3>Cerrando la venta</h3>
          <p class="texto__guia"> ¿ En efectivo, cheque o transferencia bancaria ? Conoce la mejor manera de aceptar pagos y mantengase seguro.</p>
    </div>

  </a>
</div>
</div>
</div>
 

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h1 class="modal-title fs-5" id="exampleModalLabel">Preparando tu carro para la venta</h1> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body cuerpo__modal">
        <h2 class="subtitulo__modal__body">Preparando tu carro para venderlo</h2>
        <br><br>
        <div class="contenedor__img__preparando__el__carro">
          <img src="./img/preparando__el__carro.jpg" alt="ilustracion reparacionn del vehiculo">
          </div>
        <p class="texto__modal__body">
        Si tiene alguna financiación pendiente en el automóvil, deberá liquidarse antes de que pueda vender el automóvil y recibir el pago. Si está vendiendo de forma privada, debe hablar con su proveedor financiero para ver si necesita hacer esto antes de la venta (lo cual es probable). Si está vendiendo a un distribuidor, es posible que pueda hacerlo como parte del intercambio. Sin embargo, recuerde que esto no se aplica a los préstamos personales, ya que no están garantizados en el automóvil. Relacionado: <br>
        ¿Puedo vender un auto con financiamiento pendiente?
        <br><br>
Se honesto
<br>
A quien sea que le vendas el auto, es importante ser honesto. Debe describir el vehículo de la manera más veraz y justa posible, tanto en cualquier anuncio que publique como en conversaciones cara a cara. Esto debería reducir el riesgo de futuras disputas o reclamos de que ha tergiversado lo que está vendiendo. <br></b>

No debe vender un automóvil que no esté en condiciones de circular y debe responder las preguntas con sinceridad.
<br>
¿Cómo debes preparar tu carro antes de venderlo?
Un automóvil limpio y ordenado no solo es más fácil de vender, sino que le da al comprador menos oportunidades de regatear.
<br>

Preparar su automóvil para la venta es una importante inversión de tiempo y, posiblemente, de dinero. No solo podría significar que venderá su automóvil más rápido, sino que también podría significar que obtendrá más dinero por él. 
<br><br>
CONSEJOS
<br>
Limpiar el carro por dentro y por fuera
Asegúrate de que todo funcione
Reúne todos los papeles del auto.

<br><br>
Limpiando tu auto
<br><br>
Lo mínimo que debe hacer es asegurarse de que esté limpio y ordenado por dentro y por fuera. Cosas simples como vaciar la guantera y los compartimientos de las puertas pueden hacer que el automóvil sea más atractivo para un comprador.
<br><br>
Comprobando la electricidad
<br><br>
Del mismo modo, dé la vuelta al automóvil y verifique que todo el sistema eléctrico funcione, desde las luces y los limpiaparabrisas en el exterior hasta el estéreo, el aire acondicionado y las pantallas en el interior. También debe verificar que las llantas (incluida la de repuesto, si su automóvil tiene una) estén en buenas condiciones y que todas las partes y piezas mecánicas estén en buen estado de funcionamiento.

Si encuentra algún problema o daño menor, vale la pena repararlo; Esto no se debe solo a que un certificado de buena salud hará que el automóvil sea más atractivo para los compradores potenciales, sino también a que cualquier problema obvio brinda al comprador la oportunidad perfecta para tratar de reducir el precio.
<br><br>
Prepara tu papeleo

<br><br>
Finalmente, no olvide que preparar su automóvil implica más que solo el automóvil. Reúna toda la documentación que tiene para el automóvil: certificados de revision tectnico mecanica y detalles de cualquier servicio o reparación que haya realizado en el automóvil.

Una vez más, todo ayuda a que el automóvil sea más valioso y atractivo para un comprador potencial, ya que ayudará a confirmar el historial del automóvil y brindará la tranquilidad de saber que el automóvil ha sido cuidado. Relacionado: <a href="usuarios"> Vende tu auto con adhoc registrate y ofrecelo ya!</a> .
        </p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body cuerpo__modal">
      <h2 class="subtitulo__modal__body">Creando el anuncio</h2>
      <br><br>
        <div class="contenedor__img__preparando__el__carro">
          <img src="./img/creando__el__anuncio.avif" alt="ilustracion reparacionn del vehiculo">
          </div>
      <p class="texto__modal__body">
      Esta es tu oportunidad de contarles a todos acerca de tu maravilloso automóvil. Cuantos más detalles proporciones, mayores serán tus posibilidades de obtener respuestas y vender su automóvil rápidamente. <br><br>
      Puede resaltar las características de su automóvil . Incluya todo lo que ayude al comprador adecuado a encontrar su carro, incluido lo que tiene su automóvil, como navegación por satélite, asistente de arranque en pendiente, ventanas eléctricas, asientos traseros plegables, puntos de asiento para niños, 
      control de crucero y cierre centralizado, por nombrar solo algunos. También puede agregar información sobre el historial y el mantenimiento de su automóvil cuando escribas la descripción de tu vehiculo, incluida la cantidad de propietarios anteriores. 
      Ser transparente con este tipo de información puede ayudar a aumentar la confianza del comprador en su automóvil
<br><br>
Al escribir un anuncio, trata de proporcionar tantos detalles como sea posible. Si el comprador sabe lo que está viendo, se sentirá más seguro para ponerse en contacto y usted se destacará entre la multitud.
Y si el comprador está bien informado sobre el automóvil que se ofrece, debería ser más fácil cerrar el trato cuando se comuniquen con él. Asegúrese de incluir todos los detalles técnicos básicos sobre su automóvil, junto con detalles sobre usted: su ubicación y datos de contacto. 
La información esencial que buscan los compradores de automóvil,
• Los detalles básicos del automóvil, como la marca, el modelo, el kilometraje, el tamaño del motor y el nivel de equipamiento,
entre otros
      </p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body cuerpo__modal">
      <h2 class="subtitulo__modal__body">Cerrando la venta</h2>
      <br><br>
        <div class="contenedor__img__preparando__el__carro">
          <img src="./img/cerrando__la__venta.jpg" alt="ilustracion reparacionn del vehiculo">
          </div>
          <p class="texto__modal__body">
          Una vez que haya negociado y acordado un precio, el paso final al vender su automóvil es recibir el pago. Entonces, ¿cuál es la mejor manera de que le paguen por su automóvil?
Hay algunas opciones: puede llevar dinero en efectivo cuando el comprador recoja el automóvil, usar una transferencia bancaria para un pago rápido e inmediato,  Estos son los pros y los contras de cada método para recibir el pago de su automóvil:
<br><br>
EFECTIVO:
<br>
Si está dispuesto a aceptar un pago en efectivo, considere hacer arreglos para que esto se lleve a cabo en un banco. 
El personal allí puede contar los billetes y garantizar que sean genuinos. También podrá pagar el dinero de inmediato.
<br>
Si no lo entrega en el banco, asegúrese de contar el dinero y tenga cuidado al andar con grandes sumas de dinero en efectivo. Uno de los inconvenientes de aceptar efectivo como pago es que si el dinero resulta ser falso, puede ser difícil localizar al comprador si ya se ha ido con su automóvil. Por lo tanto, cuando reciba efectivo, solicite que le entreguen el dinero durante el horario comercial, reciba el dinero dentro de un banco donde el banco pueda verificar inmediatamente los billetes en busca de falsificaciones y depositar los fondos en su cuenta en ese momento

<br><br>
TRANSFERENCIA BANCARIA:
<br>
Los compradores que pagan por un automóvil a través de transferencias bancarias en línea son una de las mejores formas de recibir pagos. Las transferencias bancarias se pueden realizar rápidamente a través de 'Pagos más rápidos
<br>
Solo tenga en cuenta que deberá proporcionar al comprador sus datos bancarios, incluido su nombre,  su número de cuenta. A veces, 
es posible que el comprador no desee esperar los varios días que puede demorar una transferencia bancaria, pero un comprador genuino debe estar preparado para hacerlo. 
Sin embargo, puede haber limitaciones para las transferencias bancarias
<br><br>
Si estas vendiendo tu carro...

<br>
Cuando vende un vehículo, es importante que sepa cómo detectar las señales de un posible fraude. 
No importa qué tan confiable parezca el comprador con el que está tratando, eche un vistazo a las siguientes reglas:
• Nunca envíe dinero al exterior 
• Nunca pague un depósito grande 
• No entregue su vehículo hasta que esté seguro de que los fondos están en su cuenta. V
erifique con su banco que puede retirar fondos de manera segura en el cheque. 
• Recuerde que su banco no aceptará giros fraudulentos o giros que no puedan ser compensados ​​por falta de fondos. 
• No se deje presionar para liberar su vehículo. A un comprador genuino no le importará esperar hasta que se haya liquidado el giro. Recuerde: si acepta un cheque, nunca permita que el comprador se quede con su vehículo hasta que los fondos hayan aparecido en su cuenta bancaria, 
ya que el cheque podría ser falsificado, cancelado o robado. giros bancarios, contrariamente a la creencia común, no son tan buenos como el efectivo, así que trátelos como lo haría con un cheque personal

<br><br>
 Si eres un comprador..
 <br>
 Un ejemplo típico de fraude es cuando el 'vendedor' coloca un anuncio falso con un precio inusualmente bajo para captar la atención del comprador. Cuando el comprador pregunta sobre el vehículo, se le envía una respuesta estándar, prometiendo renunciar a los costos de envío y sugiriendo que el pago se realice a través de un servicio de depósito en garantía en particular. 
 Después de que se envía el dinero, el vendedor se vuelve imposible de contactar e irrastreable. • Sea cual sea el método que elija para pagar el automóvil, nunca envíe dinero por un vehículo que no haya visto. • Finalmente, no importa cómo cambie de manos el dinero, 
 es importante asegurarse de que el vendedor proporcione un recibo al comprador y se quede con una copia
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
<?php  include'layout/footer.php' ?>

