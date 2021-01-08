<?php
    // seccion eleiminar 
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
    
   $consulta = "DELETE FROM ARTÍCULOS WHERE SECCION='$seccion'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
  // $consulta = "DELETE FROM ARTÍCULOS WHERE NOMBRE_ARTICULO='$nombre_articulo'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"

    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un bolean

    if($resultados==false){
        echo "error en la query";
    }else {
     //  echo "registro eliminado <br> <br>";
        if(mysqli_affected_rows($conexion)==0){
            echo "no hay registros que eliminar con esa data";
        }else{
            echo "se han eliminado " . mysqli_affected_rows($conexion) . " registros";
        }
    }
    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

    ?>