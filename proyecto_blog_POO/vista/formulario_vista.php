<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h1>
        Enviar correos electronicos.
    </h1>
    <h2>
        video 93.
    </h2>

    <div class="container">
        <form name="formulario_blog" method="POST" enctype="multipart/form-data" action="../controlador/Transacciones.php">
            <div class="form-group">
                <label for="name">Titulo</label>
                <input type="text" class="form-control" name="campo_titulo" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Comentario</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="area_comentarios" rows="3"></textarea>
            </div>
            <div class="mb-3">
                <label for="img" class="form-label text-uppercase text-blod f24">subir data max 2MB</label>
                <input type="file" class="form-control" id="img" name="archivo">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>
           
    </div>
    <div class="container mt-5">
     <a href="mostrar_blog.php"> Ir al blog</a>
    </div>
</body>

</html>