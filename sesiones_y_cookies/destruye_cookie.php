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
        Cookies 
    </h1>
    <h2>
        video 63
    </h2>

    <?php
    //codigo para destruir la cookie
    //setcookie("prueba", "the first infromation about the cookie!", time()-1); // agregar el -1 en el time para eliminar la cookie. 
    
    setcookie("idioma_seleccionado", $_GET["idioma"],time()-1);
    echo "cookie destruida.";
    ?>
</body>
</html>