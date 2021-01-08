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
    Actualizacion de registros 
</h1>
<h2>
    video 45-46.
</h2>
<?php

$busqueda=$_GET["buscar"];

require("datos_conexion.php");

$conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar

if (mysqli_connect_errno()){
    echo "Error 500";// indica que hay error de conexion al server 
    exit();    
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar

mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.

$consulta = "SELECT * FROM ARTÍCULOS  WHERE NOMBRE_ARTICULO LIKE '%$busqueda%'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"

$resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

//$fila = mysqli_fetch_row($resultados); // mysqli_fetch_row es para ingresar al array de la data y poder interactuar con el.

while (( $fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))) { // imprimir el  array.---- array asociativo.
    //echo "<table style class='center table border'><tr><td >";
    
     echo "<form action='actualizar.php' method='get'>";
    echo "<input type='text' name='seccion' value='" . $fila['SECCION'] . "'><br>";
    echo "<input type='text' name='nombre_articulo' value='" . $fila["NOMBRE_ARTICULO"] . "'><br>";
    echo "<input type='text' name='fecha' value='" . $fila['FECHA'] . "'><br>";
    echo "<input type='text' name='pais_origen' value='" . $fila['PAIS_DE_ORIGEN'] . "'><br>";
    echo "<input type='text' name='precio' value='" . $fila['PRECIO'] . "'><br>";
    echo "<input type='submit' name='enviando' value='actualizar'>";
    echo "</form>";
    echo "<br>";
}

mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

?>
</body>
</html>