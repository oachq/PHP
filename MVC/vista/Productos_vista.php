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
<table class="table">
    <tr><td>Nombre del articulo </td>
    <?php
   // include("../modelo/Productos_modelo.php");
        foreach ($matriz_productos as $registro){
            echo "<tr><td>" . $registro["NOMBRE_ARTICULO"] . "</td></tr>";
        }
    ?>
   </table> 
</body>
</html>