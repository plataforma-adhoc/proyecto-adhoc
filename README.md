Crear la base de datos accent-holding
crear las siguentes tablas 


comentarios__conductor
id_comentario
comentario
id_usuario
id_conductor
fecha_comentario


comentarios__usuario
id_comentario
comentario
id_usuario
id_conductor
fecha_comentario


compra 
id_compra
id_transaccion
fecha_de_compra
status
email_cliente
id_cliente
total_compra


conductores
id_conductor
nombre_conductor
primer_apellido
segundo_apellido
email
numero_documento
numero_telefono
numero_licencia
categoria_licencia
contrasena
status
avatar
facebook
instagram
twitter
quien_soy
entidad_bancaria
cuenta_de_pago
fecha_de_registro


usuarios
id_usuario
nombre_usuario
primer_apellido
segundo_apellido
email
numero_documento
numero_telefono
contrasena
status
avatar
facebook
instagram
twitter
fecha_de_registro


datos__inicio__recorrido
id
direccion_inicio
id_usuario
id_conductor
fecha_inicio
estado_recorrido
status_1
status_2
leido


detalles__de__la__compra
id
id_compra
id_servicio
id_usuario
id_conductor
nombre_servicio
precio_compra
descripcion


notificaciones__conductor
id_notificacion
id_usuario
id_conductor
leido
fecha_notificacion


productos
id_producto
nombre_producto(1 hora de servicio de conductor elegido,2 hora de servicio de conductor elegido,
 3 horas de servicio de conductor elegido, 4 horas de servicio de conductor elegido, 
 5 horas de servicio de conductor elegido, 6 horas de servicio de conductor elegido, 
 7 horas de servicio de conductor elegido, 8 horas de servicio de conductor elegido,
 9 horas de servicio de conductor elegido ,10 horas de servicio de conductor elegido)

valor_producto(25000.00,50000.00,75000.00,100000.00,125000.00,150000.00,175000.00,200000.00,225000.00,
250000.00)
activo
descuento
descripcion
mas_vendido


recuperar__contrasena__conductor
email
clave_nueva
token
fecha_de_solicitud


recuperar__contrasena__usuario
email
clave_nueva
token
fecha_de_solicitud

sugerencias
id_sugerencia
nombre
email
sugerencia
