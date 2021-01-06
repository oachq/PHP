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
        Base de datos con Mysql.
    </h1>

    <h2>
        video 33-37
    </h2>

    <?php
/*
    SE REALIZO UNA INTRODUCCION A MYSQUL DE COMO INTERACTUAR CON LA INTERFAS DE MYSQL WEB Y CON LA CONSOLA O TERMINAL.  
*/

// APARTIR DE AQUI EMPIEZA EL VIDEO 36.

    $db_host="localhost";
    $db_nombre="prueba";
    $db_usuario="root";
    $db_contra="";

    $conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar

    if (mysqli_connect_errno()){
        echo "Error 500";// indica que hay error de conexion al server 
        exit();    
    }

    mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar

    mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.

    $consulta = "SELECT * FROM datospersonales"; // aqui ingresamos codigo SQL para entrar a la base de datos de "datospersonales"

    $resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

   //$fila = mysqli_fetch_row($resultados); // mysqli_fetch_row es para ingresar al array de la data y poder interactuar con el.

    while (( $fila = mysqli_fetch_row($resultados))==true){

        echo $fila[0] . " "; echo $fila[1]. " "; echo $fila[2]. " ";echo $fila[3]. " "; echo "<br>"; // imprimir el  array.
    }
  
    mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.
    ?>
</body>
</html>