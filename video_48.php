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
    Inyeccion de codigo sql 
    </h1>
    <h2>
        video 47-50
    </h2>

    <?php



require("datos_conexion.php");

$conexion = mysqli_connect ($db_host, $db_usuario, $db_contra); // mysquli_connect es para mandar las credenciales a la base de datos y conectar

$usuario=mysqli_real_escape_string($conexion,$_GET["usuario"]);
$password=mysqli_real_escape_string($conexion,$_GET["password"]);

if (mysqli_connect_errno()){
    echo "Error 500";// indica que hay error de conexion al server 
    exit();    
}

mysqli_select_db($conexion,$db_nombre) or die ("no se encontro data base"); //indica el nombre de la db que queremos conectar

mysqli_set_charset($conexion, "utf8"); // indica que vamos a utilizar los tipos de caracteres español.

$consulta = "DELETE FROM datospersonales WHERE nombre = '$usuario' AND nip = '$password'";
$resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

mysqli_query($conexion, $consulta);
echo "filas afectadas : ". mysqli_affected_rows($conexion);
echo "<br>";
if (mysqli_affected_rows($conexion)>0){
    echo "usuario borrado";
   
}else {
    echo "no se ha encontrado usuario";
}
/*if (mysqli_query($conexion, $consulta)){
    echo "usuario borrado";
}*/

mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.

    ?>
</body>
</html>