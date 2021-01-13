<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<?php
    session_start(); 
    if (!isset($_SESSION['usuario'])){
        header('Location:login.php');
    }
?>
    
    <h1>
        Login 2, video 60 
    </h1>
    <h2>
        Bienvenido user: <?php echo $_SESSION["usuario"] . '<br>'; ?>
    </h2>

<button class="btn btn-block btn-info">
    <a href="close_session.php">Cerrar sesion </a>
</button>

</body>
</html>