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
    $miconexion=mysqli_connect("localhost", "root", "", "data_base_blog");

    //comprobar conexion//
    if(!$miconexion){
        echo "la conexion ha fallado: " . mysqli_error();
        exit();
    }

    if($_FILES['archivo']['error']){
        switch ($_FILES['archivo']['error']) {
            case 1: // error exceso de tamaño de archivo en php.ini
                echo "el tamaño del archivo excede lo permitido por el servidor";
                break;
            case 2: // error de tamaño de archivo marcado desde formulario
                echo "el tamaño del archivo excede 2 MB";
                break;
            case 3: // error corrupcion de archivo
                echo "el envio del archivo se interrumpio.";
                break;   
            case 4: // no hay fichero
                echo "No se ha enviado ningun archivo ";
                break; 
        }
    }else{
        echo "Data subida correctamente <br>";

        if((isset($_FILES['archivo']['name']) && ($_FILES['archivo']['error'] == UPLOAD_ERR_OK))){

            $destino_de_ruta="imagenes/";
            /* move_uploaded_files es para guardar la img en la carpeta asignada, por alguna razon hay un error que no soluciene*/
           // move_uploaded_file($_FILES['archivo']['tmp_name'], $destino_de_ruta . $_FILES['archivo']['name']);
            echo "El archivo " . $_FILES['archivo']['name'] . "<br> <br> Se ha copiado en el directorio de img <br> <br>";
        }else{
            echo "El archivo no se ha podido copiar en el directorio de img <br><br>";
        }
    }

    $eltitulo=$_POST['campo_titulo'];
    $lafecha=date("Y-m-d H:i:s");
    $elcomentario=$_POST['area_comentarios'];
    $elarchivo=$_FILES['archivo']['name'];

    $miquery="INSERT INTO contenido (Titulo, Fecha, Comentario, img) VALUES ('" . $eltitulo . "', '" . $lafecha . "', '" .$elcomentario . "', '" .$elarchivo . "')";

    $resultado= mysqli_query($miconexion,$miquery);

    //cerramos conexion // 

    mysqli_close($miconexion);

    echo "<br> se ha agregado el comentario con exito. <br> <br>";

?>

<a href="formulario.php"> ir a pagina principal </a>
<br>
    <a href="mostrar_blog.php"> ver blog</a>
</body>
</html>