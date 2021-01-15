<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <h1>
        PAGINA DE BORRADO.
    </h1>

    <?php
         include("conexion.php");

         $id = $_GET["__id"];

         $base->query("DELETE FROM datos_usuarios WHERE ID='$id'");

         header("Location:index.php");
    ?>
</body>
</html>