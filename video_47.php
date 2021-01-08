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

//$consulta = "SELECT * FROM ARTÍCULOS  WHERE NOMBRE_ARTICULO LIKE '%$busqueda%'"; // aqui ingresamos codigo SQL para entrar a la base de datos de "ARTÍCULOS"
//$consulta = "SELECT * FROM datospersonales WHERE nombre = '$usuario' AND nip='$password'";
$consulta = "DELETE FROM datospersonales WHERE nombre = '$usuario' AND nip='$password'";
$resultados = mysqli_query($conexion, $consulta); // mysqli_query aqui se ejecuta la peticion a ala base de datos, devuelve la data en un array 

//$fila = mysqli_fetch_row($resultados); // mysqli_fetch_row es para ingresar al array de la data y poder interactuar con el.

while (( $fila = mysqli_fetch_array($resultados, MYSQLI_ASSOC))) { // imprimir el  array.---- array asociativo.
    echo "<table style class='center table border'><tr><td >";
    echo $fila["nip"] . "</td><td >";
    echo $fila["nombre"] . "</td><td >"; 
    echo $fila["apellido"] . "</td><td >";
    echo $fila["edad"] . "</td><td ></tr></table>";
    echo "<br>";

    echo "borrado";
}

mysqli_close($conexion); // esta funcion es para cerrar la conexion que tienes con una base de datos.
    ?>
</body>
</html>