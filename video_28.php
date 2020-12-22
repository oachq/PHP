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
        POO, VARIABLES Y MÉTODOS STATIC.
    </h1>

    <h2>
    video 28-29. 
    </h2>

<?php 
/*
DEFINICION: Se creeo un archivo php donde se obtiene la data, que se reutilia segun cada obejto y la cual se rescribe segun a las 
caracteriscas de cada obejto, en pocas palabras reutilizamos el mismo codigo consesionario.php para cada objeto. 

*/

    include ("concesionario.php");

    //compra_vehiculo::$ayuda=10000; // como ayuda no es una variable privada se puede manipular una ves mandando llamar el archivo. 
    compra_vehiculo::descuento_gobierno();

    $compra_antonio=new compra_vehiculo("compacto"); // la variable compra_antonio es un objeto.
    $compra_antonio->climatizador();
    echo "añadio el climatizador <br>";
    $compra_antonio->tapiceria_cuero("beige");
    echo "añadio tapiceria de cuera beige <br>";
    echo "antoinio compro el coche de " .  $compra_antonio->precio_final() ."mx" . "<br> <br>";


    $compra_anae=new compra_vehiculo("compacto");// la variable compra_anae es un objeto.
    echo "anae compro el coche de " . $compra_anae->precio_final() . " mx" . "<br>";

?>
</body>
</html>