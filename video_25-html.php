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
        POO. HERENCIAS.
    </h1>

    <h2>
        video 25
    </h2>

    <?php 
    //POO  herencias.

    include ("video_25.php"); // funcion para mandar llamar un archivo y puedas ejecturarlo 

    $mazda=new coche (); // se crea la variable mazda para llamar la funcion coche 

    $pegaso=new camion();// se crea la variable pegaso para llamar la funcion camion


    echo "el mazada tiene  " . $mazda->ruedas . " rudas <br> "; // mandas llamar la nueva instancia de coche.

    echo "el pegaso tiene  " . $pegaso->ruedas . " ruedas <br>";// mandas llamar la nueva instancia de camion.

    $pegaso->frenar();

    $pegaso->arrancar();
?>

</body>
</html>