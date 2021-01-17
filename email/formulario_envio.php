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
        Enviar correos electroni_cos.
    </h1>
    <h2>
        video 88.
    </h2>

    <div class="container">
        <form name="formulario_contacto" method="POST" action="enviar_mail.php">
            <div class="form-group">
                <label for="name">Nombre *</label>
                <input type="text" class="form-control" name="name" placeholder="Nombre">
            </div>
            <div class="form-group">
                <label for="lastname">Apellido *</label>
                <input type="text" class="form-control" name="lastname" placeholder="Apellido">
            </div>
            <div class="form-group">
                <label for="email">Email address *</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="cel">Celular</label>
                <input type="number" class="form-control" name="cel" placeholder="Celular">
            </div>
            <div class="form-group">
                <label for="asunto">Asunto</label>
                <input type="text" class="form-control" name="asunto" placeholder="Asunto">
            </div>
            <div class="form-group">
                <label for="Comentarios">Comentarios *</label>
                <input type="text" class="form-control" name="comentarios" placeholder="Comentarios">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Enviar</button>

    </div>

</body>

</html>