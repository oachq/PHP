<?php
    //recibiendo los datos de la img.

    $nombre_img=$_FILES['img']['name'];
    $tipo_img=$_FILES['img']['type'];
    $tamano_img=$_FILES['img']['size'];
    //RUTA DE LA CARPETA DESTINO EN SERVIDOR
    $carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/img/';
   // $carpeta_destino=$_SERVER['/Users/oscarchavez/.bitnami/stackman/machines/xampp/volumes/root/htdocs/img/'] ;
    // movemos la img del directorio temporal al directorio escogido
   // echo $_FILES['img']['tmp_name'];
    move_uploaded_file($_FILES['img']['temp/opt/lampp/htdocs/'], $carpeta_destino . $nombre_img);
?>