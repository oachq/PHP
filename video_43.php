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
    
    $consulta = "INSERT INTO ARTÍCULOS (SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO) VALUES ('$seccion', '$nombre_articulo', '$fecha', '$pais_origen', '$precio')"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
    
    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

    if($resultados==false){
        echo "error en la query";

    }else {
        echo "registro guardado <br> <br>";

        echo $seccion . "<br>"; 
        echo $nombre_articulo . "<br>"; 
        echo $fecha . "<br>"; 
        echo $pais_origen . "<br>"; 
        echo $precio . "<br>"; 



    }
    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

    ?>