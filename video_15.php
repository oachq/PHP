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
        Condicionales if else.
    </h1>

    <h2>
        video 15
    </h2>

<form name="form" method="post" action="">
    <label for="edad">ingrese la edad</label>
    <input type="text" name="edad" id="edad">
    <input type="submit" name="button" id="button" value="Enviar" onClick="reslutado()">
</form>
    <?php
    // operadpres logicos ordenados segun su prioridad
    /*
        &&  -> Y logico
        ADN -> Y logico
        ||  -> O logico
        OR  -> O logico 
        XOR -> O exclusivo
        !   -> Negacion (Not)
    */
/*
    $var1=true;
    $var2=false;
    $resul = $var1 && $var2; //resul is false
    // nota: el resultado puede variar segun el tipo de prioridad que tenga tu operador. 
    if($resul == true){ 
        echo "correcto!";
    }else{
        echo "incorrecto!";
    }
*/


if (isset($_POST["button"])){

    $edad =$_POST["edad"];

    if($edad <= 18){
        echo "eres menor de edad";
    }elseif($edad <= 40){
        echo "eres joven";
    }elseif($edad <= 65){
        echo "eres maduro";
    }else{
        echo "cuidate ya tas viejo";
    }
}



    ?>
</body>
</html>