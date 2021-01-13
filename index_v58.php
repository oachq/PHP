<?php
// video 58  
// imprimimos la tabla ARTICULOS.
    require "video_58.php";
    $pais=$_GET["buscar"];
    $productos = new DevuelveProductos();

    $array_productos=$productos->get_productos($pais);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Conexion a base de datos con POO y PDO
    </h1>
    <h2>
        video 58.
    </h2>
    <?php
        foreach($array_productos as $elemento){
            //echo "entre aqui";
            echo "<table><tr><td>";
            echo $elemento ['SECCION'] . "</td><td>";
            echo $elemento ['NOMBRE_ARTICULO'] . "</td><td>";
            echo $elemento ['FECHA'] . "</td><td>";
            echo $elemento ['PAIS_DE_ORIGEN'] . "</td><td>";
            echo $elemento ['PRECIO'] . "</td><td></tr></table>";

           /* echo $elemento [0] . "</td><td>";
            echo $elemento [1] . "</td><td>";
            echo $elemento [2] . "</td><td>";
            echo $elemento [3] . "</td><td>";
            echo $elemento [4] . "</td><td></tr></table>";*/

            echo "<br>";
            echo "<br>";
        }
    ?>
</body>
</html>