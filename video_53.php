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
        video 53-54.
    </h2>


    <?php
    $busqueda= $_GET["buscar"]; 

    try{
        $base= new PDO ('mysql:host=localhost; dbname:prueba', 'root','');
        $base->setAttribute(
            PDO::ATTR_ERRMODE, 
            PDO::ERRMODE_EXCEPTION);
        
        $base->exec("SET CHARACTER SET utf8");

        $sql="SELECT * FROM ARTÍCULOS WHERE NOMBRE_ARTICULO= :n_art";
        $resultado=$base->prepare($sql);
        $resultado::execute(array(":n_art"=>$busqueda));

        /*while($registro=$resultado->fetch(PDO::FETCH_ARRAY)){
            echo "Seccion" . $registro[0] . "Nombre articulo: " . $registro[1] . "Fecha: " . $registro[2] . "Pais de origen: " . $registro[3] . "Precio: " . $registro[3] . "<br>";
        }*/
        
        
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