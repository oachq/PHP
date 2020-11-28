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
    video 8-- strings. 
    </h1>
<br>
    <?php
        $var1 = "Texlave";
        $var2= "TEXLAVE";

        $resul = strcmp($var1,$var2);
        //$resul = strcasecmp($var1,$var2);
        //strcmp = funcion para comparar dos variables si son identicas gemelas
        //strcasecmlp = funcion para comparar dos variables si son iguales no importa si estan en mayusculas y minusculas
        if (!$resul){ //el signo ! significa que es lo contrario o negacion de la variable $resul.
            echo "conciden esto es 0=true";            
        }else {
            echo "no coinciden esto es 1=false";
        }

    ?>
</body>
</html>