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
        ARRAY MULTIDIMENSIONALES.
    </h1>

    <h2>
        video 32
    </h2>

    <?php

    $alimentos=array("frutas"=>array("tropical"=>"kiwi",
                                     "citrico"=>"mandarina",
                                     "otros"=>"manzana"),
                     "leche"=>array("animal"=>"vaca",
                                     "vegetal"=>"coco"),
                     "carne"=>array("vacuno"=>"lomo",
                                    "procino"=>"pata"));


   // echo $alimentos["frutas"]["otros"]; metodo para ingresar a un elemento del array bidimensional
   
   
   // funcion creada con logia de uno mismo para recorrrer el array 
   echo "-----------------FUNCION CON LOGICA PRIMITIVA-----------------";
   echo "<br>";

    foreach($alimentos as $sec_1=>$sec_2){
        echo "$sec_1: <br>";
        while(list ($clave,$valor)= each ($sec_2)){
            echo "$clave=$valor <br>";
        }
        echo "<br>";
    }

    echo "<br>";
    echo "<br>";

    echo "-----------------FUNCION PREDEFINIDA DE PHP-----------------";
    echo "<br>";
    echo var_dump($alimentos);
    ?>
</body>
</html>