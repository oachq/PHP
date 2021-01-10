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
        Conexion a base de datos usando la libreria PDO. 
    </h1>
    <h2>
        Video 52.
    </h2>

    <?php
    // creando una conexion a base de datos mysql con PDO utilizando try catch
    try{
        $base= new PDO('mysql:host=localhost; dbname=prueba', 'root', '');
        echo "Conected";
    }catch(Exepttion $e){
        die ('Error: ' .$e->GetMessage());
    }finally{
        $base=null;
    }

    ?>


</body>
</html>