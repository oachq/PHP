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
        subir imagenes al servidor.
    </h1>
    <h2>
        video 83.
    </h2>

    <div class="container">
        <form action="datos_archivos.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="img" class="form-label text-uppercase text-blod f24">subir img</label>
                <input type="file" class="form-control" id="img" name="archivo">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>