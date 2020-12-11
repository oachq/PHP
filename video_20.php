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
        Funciones predefinidas.
    </h1>
    <h3>
        video 20.
    </h3>

    <?php
    // FUNCIONES PREDEFINIDAS
    $var = "oscar <br>";
    echo (strtoupper($var)); // transforma el texto a mayuscula

    // funcion segun la respuesta esperada. 
    function frase_mayus($frases, $conversion=true){
        $frases=strtolower($frases);
        if ($conversion==true){
            $resul=ucwords($frases); // capatiliza el texto
        }else{
            $resul=strtoupper($frases);
        }
        return $resul;
    }
    
    echo (frase_mayus("esto es una prueba"))


    ?>
</body>
</html>