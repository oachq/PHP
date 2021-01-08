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
        Data actualizada
    </h1>
    <h2>
        video 45-46.
    </h2>

    <?php
    
    //$busqueda=$_GET["buscar"];

    $seccion=$_GET["seccion"];
    $nombre_articulo=$_GET["nombre_articulo"];
    $fecha=$_GET["fecha"];
    $pais_origen=$_GET["pais_origen"];
    $precio=$_GET["precio"];

    require("datos_conexion.php");
    
    $conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar
    
    if (mysqli_connect_errno()){
        echo "Error 500";// indica que hay error de conexion al server 
        exit();    
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar
    
    mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.
    
    $consulta = "UPDATE ARTÍCULOS SET SECCION='$seccion', NOMBRE_ARTICULO='$nombre_articulo', FECHA='$fecha', PAIS_DE_ORIGEN='$pais_origen', PRECIO='$precio' WHERE SECCION='$seccion'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS""; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
    
    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

    if($resultados==false){
        echo "error en la query";

    }else {
        echo "registro guardado <br> ";

        echo $seccion . "<br>"; 
        echo $nombre_articulo . "<br>"; 
        echo $fecha . "<br>"; 
        echo $pais_origen . "<br>"; 
        echo $precio . "<br>"; 

    }
    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

    ?>
</body>
</html>