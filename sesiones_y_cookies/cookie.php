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

    <?php ///metodo para crear una cookie
    //setcookie("prueba", "the first infromation about the cookie!", time()+100); //nombre de la cookie, valor de la cookie, tiempo de duracion de la cookie, url especifica de uso de cookie.
    // nota se puede agregar un tercer parametro que es especificar una sola url o path que deseasr leer la cookie creada


    // ejemplo para la practica 1 de la cookie 
    setcookie("idioma_seleccionado",$_GET['idioma'],time()+86400);
    header("location:leer_cookie.php");
    ?>


</body>
</html>