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
        Bucles 2, bucle FOR
    </h1>
    <h3>
        video 19.
    </h3>

    <?php
        // bucle for
    for ($i=10; $i>=-10; $i--){ // en la variable de incremento se puedo agregar el numero de incremento que deseemos
       // echo $i . "   tamos en el bucle <br>";
       if ($i==0){
           echo "division por 0 no posible <br>";
           continue;
       }
        echo $i .")" . " 9 / $i = " . 9/$i . "<br>";
    }
    echo "tamos fuera del bucle ";
    ?>
</body>
</html>