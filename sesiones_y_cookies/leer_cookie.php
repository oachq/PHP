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
        leer cookie.
    </h1>
    <h2>
        video 63
    </h2>
    <?php
    // codigo de prueba para comprar si existe una cookie
   /* if (isset($_COOKIE["prueba"])){
        echo $_COOKIE["prueba"];
    }else{
        echo "la cookie no se ha creado";
    }*/
    if($_COOKIE["idioma_seleccionado"]){
        header("location:pag_idiomas.php");
    }else if($_COOKIE["idioma_sleccioado"]=='es'){
        echo "Bienvendio al idioma españil.";
    }else if($_COOKIE["idioma_sleccioado"]=='in'){
        echo "Welcome to lenguage english.";
    }
     ?>
     
</body>
</html>