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
    Conexion base de datos con POO.
</h1>

<h2>
    Video 51.
</h2>
    <?php
 /// conexion con base de datos con programacion orientada a objetos explicando el ejemplo anterior con el POO.
        $conexion= new mysqli("localhost", "root", "", "prueba");

        if ($conexion->connect_errno){ // funcion para desplegar el error de la conexion 
            echo "Fallo la conexion" .  $conexion->connect_errno; 
        }

        // mysqli_set_charset($conexion, "utf8"); // metodo normal 
        $conexion->set_charset("utf8"); // metodo POO
        $sql="SELECT * FROM ARTÍCULOS";

        // $resultados =  mysqli_query ($conexion, $sql); // metodo normal 
        $resultados=$conexion->query($sql); // metodo POO.
        
        if ($conexion->errno){
            die($conexion->error);
        }

        //while ($fila=mysqlo_fetch_array($resultados, MYSQLI_ASSOC) ){} //metodo normal 
        // utilizando el metodo fetch_assoc se define por que mandas llamar la data por nombre de la variable.
        /*while ($fila=$resultados->fetch_assoc()){ //metodo POO
            echo "<table style class='center table border'><tr><td >";
            echo $fila["SECCION"] . "</td><td >";
            echo $fila["NOMBRE_ARTICULO"] . "</td><td >"; 
            echo $fila["FECHA"] . "</td><td >";
            echo $fila["PAIS_DE_ORIGEN"] . "</td><td >"; 
            echo $fila["PRECIO"] . "</td><td ></tr></table>";
            echo "<br>";
        }*/

        // utilizando metodo fetch_array se define por que mandas llamar la data por array [0,1,2,...]  
        while ($fila=$resultados->fetch_array()){ //metodo POO
            echo "<table style class='center table border'><tr><td >";
            echo $fila[0] . "</td><td >";
            echo $fila[1] . "</td><td >"; 
            echo $fila[2] . "</td><td >";
            echo $fila[3] . "</td><td >"; 
            echo $fila[4] . "</td><td ></tr></table>";
            echo "<br>";
        }

       // mysqli_close($conexion); // metodo normal
       $conexion->close(); // metodo POO

    ?>
</body>
</html>