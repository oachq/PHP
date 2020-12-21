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
        Funciones por paramatro o por referencia. 
    </h1>
    <h3>
        Video 21. 
    </h3>

    <?php
    // funciones por parametros o por referencia. 
    // definicion..  (parametros con el mismo nombre de variable) cuando una funcion es por parametro se toma el valor del parametro para la funcion a usar, una ves usado ese parametro 
    // vuelve a su valor ortiginal. 

    // definicion.. (parametros con el mismo nombre de variable) cuando una funcion es por referencia "&" se toma el valor del parametro para la funcion a usar, una ves usado ese parametro
    // se modifica el nuevo valor que tomo ese parametro, es decir se modifica globalmente el valor. 
     function incrementa (&$valor){
         $valor++;
         return $valor;
     }
//------------------------- 
     $numero=5;
     echo incrementa ($numero) . "<br>";
     echo $numero;

    ?>
</body>
</html>