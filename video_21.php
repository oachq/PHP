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
        Funciones 2, parametros por valor y por referencia.
    </h1>

    <h2>
        video 21.
    </h2>

    <?php 
    // funciones de paso de parametro por valor:
    // sintaxis. 
        /* function ejemplo ($param){  //funcion dodne solo se pasa un valor.
            $param++
        }
       
    function ejemplo ($param){
        $param++;
        return $param;
    }
    echo ejemplo(5);
 */

    // funciones de paso de parametro por referencia:
    // sintaxis. 
    /* function ejemplo (&$param){  //se le agrega el & en el param y es una funcion dodne solo se pasa un referencia que hace que se me modifique por el valor nuevo de la variable.
        $param++
    }
    */
    function ejemplo (&$param){
        $param++;
        return $param; //param aqui vale 6 
    }
    $param=5; //param aqui vale 5 
    echo ejemplo($param) . "<br>"; //param aqui vale 6

    echo $param; //param aqui vale 6


    ?>
</body>
</html>