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
    video 42.
</h1>

<h2>
    insertando registros nuevos en la data base.
</h2>
<?php

    
    //$busqueda=$_GET["buscar"];

    require("datos_conexion.php");
    
    $conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar
    
    if (mysqli_connect_errno()){
        echo "Error 500";// indica que hay error de conexion al server 
        exit();    
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar
    
    mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.
    
    $consulta = "INSERT INTO ARTÍCULOS (SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO) VALUES ('TEC', 'Laravel', '07/01/21', 'Mexico', '3000')"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
    
    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

    ?>
</body>
</html>