<?php
    //recibiendo los datos de la img.

    $nombre_archivo=$_FILES['archivo']['name'];
    $tipo_archivo=$_FILES['archivo']['type'];
    $tamano_archivo=$_FILES['archivo']['size'];

    //RUTA DE LA CARPETA DESTINO EN SERVIDOR
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/img/';
  
    // movemos la img del directorio temporal al directorio escogido
   // echo $_FILES['img']['tmp_name'];
    move_uploaded_file($_FILES['archivo']['temp/opt/lampp/htdocs/'], $carpeta_destino . $nombre_archivo);
?>