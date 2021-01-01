<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1> ARRAYS </h1>
    <h2> video 31  </h2>

<?php
 // funcion is array. 

   // $datos = array("nombre"=>"oscar","apellido"=>"chavez","edad"=>"28");

    //$datos= "alan";

   /* if (is_array($datos)){ //funcion is array te dice si la data que tomaste es un array o no. 
        echo "esto es un array";
    }else{
        echo "esto no es un array";
    }*/

  /*  foreach($datos as $clave=>$valor){ // el foreach se usa para recorrer un array 
        echo "a $clave le corresponde  $valor <br>";
    }*/

    ////////////////////////////////////////////////////////////////////////////////////////////

    $semana[]="lunes";
    $semana[]="martes";
    $semana[]="miercoles";
    $semana[]="jueves";

    for ($i=0; $i<count($semana); $i++){ //for normal como js y funcion count que controla el numero de elementos del array semana. 
     echo  $i+1 . " " . $semana[$i] . "<br>";
    }

?>
</body>
</html>