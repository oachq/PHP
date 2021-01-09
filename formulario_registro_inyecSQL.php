<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <h1>
    Formulario de registro de articulos evitando inyeccion de SQL.
    </h1>
    <div class="container m-5">
<h2>
    video 50.
</h2>
    <form name="form1" method="get", action="video_50.php">
  <div class="mb-3">
    <label for="seccion" class="form-label">Seccion</label>
    <input type="text" class="form-control" id="seccion"  name="seccion" >
  </div>
  <div class="mb-3">
    <label for="name_articulo" class="form-label">Nombre Articulo</label>
    <input type="text" class="form-control" id="name_articulo"  name="nombre_articulo">
  </div>
  <div class="mb-3">
    <label for="fecha" class="form-label">Fecha</label>
    <input type="text" class="form-control" id="fecha"  name="fecha">
  </div>
  <div class="mb-3">
    <label for="pais_origen" class="form-label">Pais de origen</label>
    <input type="text" class="form-control" id="pais_origen"  name="pais_origen">
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio</label>
    <input type="text" class="form-control" id="precio" name="precio" >
  </div>
 
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>
    </div>

</body>
</html>