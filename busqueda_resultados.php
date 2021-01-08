<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php 
function ejecuta_query($labuscqueda){
    
    //$busqueda=$_GET["buscar"];

    require("datos_conexion.php");
    
    $conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar
    
    if (mysqli_connect_errno()){
        echo "Error 500";// indica que hay error de conexion al server 
        exit();    
    }
    
    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar
    
    mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.
    
    $consulta = "SELECT * FROM ARTÍCULOS  WHERE NOMBRE_ARTICULO LIKE '%$labusqueda%'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
    
    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 
    
    //$fila = mysqli_fetch_row($resultados); // mysqli_fetch_row es para ingresar al array de la data y poder interactuar con el.
    
    while (( $fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))) { // imprimir el  array.---- array asociativo.
        echo "<table style class='center table border'><tr><td >";
        echo $fila["SECCION"] . "</td><td >";
        echo $fila["NOMBRE_ARTICULO"] . "</td><td >"; 
        echo $fila["FECHA"] . "</td><td >";
        echo $fila["PAIS_DE_ORIGEN"] . "</td><td >"; 
        echo $fila["PRECIO"] . "</td><td ></tr></table>";
        echo "<br>";
    }
    
    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.
}
    ?>

</head>
<body>
    <h1>
        video 40-41.
    </h1>
<?php
    
    $mibusqueda=$_GET["buscar"];
    $mipag=$_SERVER["PHP_SELF"];

    if($mibusqueda!=NULL){
        ejecuta_query($mibusqueda);
    }else {
        echo(
        "<form action'" . $mipag . "' method='get'>
        <label> Buscar: <input type='text' name='buscar'></label>
        <input type='submit' name='enviando' value='dale!'>
        </form>"
        );
    }
 ?>

</body>
</html>