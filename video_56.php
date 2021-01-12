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
        PDO consultas preparadas y marcadores en consultas preparadas . 
    </h1>

    <h2>
        video 56.
    </h2>


    <?php
    $seccion= $_POST["seccion"];
    $nombre_articulo= $_POST["nombre_articulo"]; 
    $fecha= $_POST["fecha"]; 
    $pais_origen= $_POST["pais_origen"]; 
    $precio= $_POST["precio"]; 


    try {
        $base= new PDO ('mysql:host=localhost; dbname:prueba', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");

        $sql= "INSERT INTO ARTÍCULOS (SECCION, NOMBRE_ARTIULO, FECHA, PAIS_DE_ORIGEN, PRECIO) VALUES (:seccion, :nombre_articulo, :fecha, :pais_origen, :precio)";
        $resultado=$base->prepare($sql);
         
    // no funciona la funcion execute
    $resultado->execute( $seccion= ":seccion",$nombre_articulo=":nombre_articulo", $fecha= ":fecha", $pais_origen=":pais:origen",  $precio=":precio"); 
    echo "Registro insertado";
    $resultado->closeCursor();
    }catch(Exeption $e){
        die('Error: ' . $e->GetMessage()) . "<br>";
    }finally{
        $base=null;
    }
/*
    try{
        $base= new PDO ('mysql:host=localhost; dbname:prueba', 'root','');
        $base->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        $sql="INSERT INTO ARTÍCULOS (SECCION, NOMBRE_ARTIULO, FECHA, PAIS_DE_ORIGEN, PRECIO) VALUES (:seccion, :nombre_articulo, :fecha, :pais_origen, :precio)";
        
        $resultado=$base->prepare($sql);
        
        $resultado->execute(array(":seccion"=>$seccion, ":nombre_articulo"=>$nombre_articulo, ":fecha"=>$fecha, ":pais_origen"=>$pais_origen, ":precio"=>$precio));
        
        echo "Registro insertado";
        $resultado->closeCursor();
    }catch(Exeption $e){
        die('Error: ' . $e->GetMessage()) . "<br>";
    }finally{
        $base=null;
    }*/
     
    ?>

</body>
</html>