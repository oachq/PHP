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
        PDO consultas preparadas. 
    </h1>

    <h2>
        video 52.
    </h2>


    <?php
    $busqueda= $_GET["buscar"];

    try{
        $base= new PDO ('mysql:host=localhost; dbname:prueba', 'root','');
        $base->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT * FROM ARTÍCULOS WHERE NOMBRE_ARTICULO=$busqueda";
        $resultado=$base->prepare($sql);
        $resultado=execute(array("NOMBRE_ARTICULO"=>$busqueda));
        /*while($registro=$resultado->fetch(PDO::FETCH_ARRAY)){
            echo "Seccion" . $registro[0] . "Nombre articulo: " . $registro[1] . "Fecha: " . $registro[2] . "Pais de origen: " . $registro[3] . "Precio: " . $registro[3] . "<br>";
        }
        
     /*   <div>
    <form action="video_53.php" method="get">
        <label for="buscar"> Buscar </label>
        <input type="text" name="buscar">
        <input type="submit" name="enviando" value="Rajale!">
    </form>
</div>*/
        
        while($registro=$resultado->fetchAll(PDO::FETCH_ASSOC)){
            echo "Seccion" . $registro['SECCION'] . "Nombre articulo: " . $registro['NOMBRE_ARTICULO'] . "Fecha: " . $registro['FECHA'] . "Pais de origen: " . $registro['PAIS_DE_ORIGEN'] . "Precio: " . $registro['PRECIO'] . "<br>";
        $resultado->closeCursor();
        }
    }catch(Exeption $e){
        die('Error: ' . $e->GetMessage());
    }finally{
        $base=null;
    }
     
    ?>

</body>
</html>