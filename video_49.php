<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
   <h1>
    video 49
   </h1>
   <h2>
    buscador evitando inyeccion sql.
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

$sql= "SELECT SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO FROM ARTÍCULOS WHERE PAIS_DE_ORIGEN=? ";

$resultado=mysqli_prepare($conexion, $sql);

$ok=mysqli_stmt_bind_param($resultado, "s", $busqueda);

$ok=mysqli_stmt_execute($resultado);
if($ok === false){
    echo "Error al ejecutar la consulta";
}else {
    $ok=mysqli_stmt_bind_result($resultado, $seccion, $nombre_articulo, $fecha, $pais_origen, $precio);
    echo "articulos encontrados: <br> <br>";
    while (mysqli_stmt_fetch($resultado)){
        echo $seccion. " " . $nombre_articulo . " " . $fecha . " " . $pais_origen . " " . $precio . "<br>" ;
    }
    mysqli_stmt_close($resultado);
}

mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.
    ?> 
</body>
</html>