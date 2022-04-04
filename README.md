# Prueba_Verifarma




Diseñar e implementar un servicio que exponga en su API las operaciones CRUD (únicamente creación y lectura por id) de la entidad Farmacia y la consulta de la farmacia más cercana a un punto dado.

Se crea el servicio para ubicar la farmacia mas cercana con la siguiente ruta

Ruta de Solicitud:

http://localhost/verifarma/api/farmacia?lat=lon=

nos devolvera un el id,Nombre,Direccion, y Distancia en km de la farmacia mas cercana en 1Km a la redonda.

se deja Base de datos de Pruebas farmacias.sql

Para probar el servicio: en metodo GET: http://localhost/verifarma/api/farmacia?lat=-34.6329059&lon=-58.473601

Respuesta: {"id":"14", "nombre":"Farmacity", "direccion":"San Pedrito 33", "distancia":"1.07 km"}

Para agregar Farmacias a la Base de datos

en Metod POST http://localhost/verifarma/api/farmacia

Datos a Enviar: lat:@Number lon:@Number nombre:@string direccion:@string