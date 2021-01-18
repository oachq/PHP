<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php
    include("../modelo/manejo_objeto.php");
    try{
        $miconexion = new PDO ('mysql:host=localhost; dbname=data_base_blog', 'root', '');
        $miconexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $manejo_objetos=new Manejo_Objetos(($miconexion));

        $tabla_blog=$manejo_objetos->getContenidoPorFecha();
        if(empty($tabla_blog)){
            echo "No hay entradas de blog aun ";
        }else {
            foreach($tabla_blog as $valor ){
                echo "<h3>" . $valor->getTitulo() . "</h3>";
                echo "<h3>" . $valor->getFecha() . "</h3>";
                echo "<div style='width:400px'>";
                echo $valor->getComentario() . "</div>";
                if ($valor->getArchivo()!=""){
                    echo "<img src'../imagenes/";
                    echo $valor->getArchivo() . "'wicth='300px' height='200px' />";
                }
                echo "<hr/>";
            }
        }
    }catch(Exception $e){
        die ("Error: " . $e->getMessage());
    }
?>

<br>
<a href="formulario.php"> Volver ala pagina principal</a>

</body>
</html>