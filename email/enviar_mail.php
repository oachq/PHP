<?php 

    $texto_mail=$_POST["comentario"];

    $destinatario=$_POST["email"];

    $asunto=$_POST["asunto"];

    $headers="MINE-Version: 1.0\r\n";

    $headers.="Content-type: text/html; charset=iso-8859-1\r\n";
    $headers.="From: prueba Oscar < alan_oscar52@hotmail.com > \r\n";

    $exito =mail($destinatario,$asunto,$texto_mail,$headers);

    if($exito){
        echo "Mensaje enviado con exito";
    }else{
        echo "Ha habido un error";
    }
?>