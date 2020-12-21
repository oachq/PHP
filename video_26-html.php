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
        POO. MODIFICADORES.
    </h1>

    <h2>
        video 26-?
    </h2>

    <?php 
    //POO  modiciadores, es seccionar el codigo segun a tus necesidades y despues juntarlo e interactuar con algunas funciones en comun de tu bloque de codigo.
    // para implementar los modificadores e tiene que utilizar lo sig
    //setter = modificar y getter = ver las propiedades de la var.

    include ("video_26.php"); // funcion para mandar llamar un archivo y puedas ejecturarlo 

    $mazda=new coche (); // se crea la variable mazda para llamar la funcion coche 

    $pegaso=new camion();// se crea la variable pegaso para llamar la funcion camion


    echo "el mazada tiene  " . $mazda->get_ruedas() . " rudas <br> "; // mandas llamar la nueva instancia de coche.

    echo "el pegaso tiene " . $pegaso->get_ruedas() . " ruedas <br>";

?>

</body>
</html>