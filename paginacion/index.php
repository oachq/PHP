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
        Paginación 
    </h1>
    <h2>
        video 74
    </h2>

    <?php

        try{
            $base= new PDO("mysql:host=localhost; dbname=prueba", 'root', '');
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $base->exec("SET CHARACTER SET utf8");

            $tamano_pag=3;
                if(isset($_GET["pagina"])){
                    if($_GET["pagina"]==1){
                        header("Location:index.php");
                    }else{
                        $pagina=$_GET["pagina"];
                    }
                }else{
                    $pagina=1;
                }
               
            
            $empezar_desde=($pagina-1)*$tamano_pag;
            $sql_total="SELECT SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO FROM ARTÍCULOS WHERE SECCION='CERAMICA' ";
            $resultado=$base->prepare($sql_total);
            $resultado->execute(array());

            $num_filas=$resultado->rowCount();
            $total_pag=ceil($num_filas/$tamano_pag);
            echo "Nmero de registros de la consulta: " .$num_filas . "<br>";
            echo "Mostramos: " . $tamano_pag . "registros por pagina <br>";
            echo "Mostrando la pagina " . $pagina . " de " . $total_pag . "<br>";
            echo "<br>";
           /* while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Seccion: " . $registro['SECCION'] . " Nombre articulo: " . $registro["NOMBRE_ARTICULO"] . " Fecha: " . $registro['FECHA'] . " Pais origen: " . $registro['PAIS_DE_ORIGEN'] . " Precio: " . $registro["PRECIO"] . "<br>";
            }*/
            $resultado->closeCursor();

            $sql_limit="SELECT SECCION, NOMBRE_ARTICULO, FECHA, PAIS_DE_ORIGEN, PRECIO FROM ARTÍCULOS WHERE SECCION='DEPORTE' LIMIT $empezar_desde,$tamano_pag";
            $resultado=$base->prepare($sql_limit);
            $resultado->execute(array());
              while($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                echo "Seccion: " . $registro['SECCION'] . " Nombre articulo: " . $registro["NOMBRE_ARTICULO"] . " Fecha: " . $registro['FECHA'] . " Pais origen: " . $registro['PAIS_DE_ORIGEN'] . " Precio: " . $registro["PRECIO"] . "<br>";
            }
        }catch(Exception $e){
            echo "linea de error: " .$e->getLine();
        }


       // ________________________________PAGINACION________________________________

       for($i=1; $i<=$total_pag; $i++){
           echo "<a href='?pagina=" . $i . "'>" . $i . "</a>  ";
       }
    ?>
</body>
</html>