<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
/////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_POST["enviar"])){
    try{
        $base =new PDO ("mysql:host=localhost; dbname=prueba", "root", "");
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS=:usuario AND PASSWORD= :password";
        $resultado=$base->prepare($sql);
        $login=htmlentities(addslashes($_POST["usuario"]));
        $password=htmlentities(addslashes($_POST["password"]));
        $resultado->bindValue(":usuario", $login);
        $resultado->bindValue(":password", $password);
        $resultado->execute();

        $numero_registro=$resultado->rowCount();

        if ($numero_registro!=0){
            session_start();
            $_SESSION["usuario"]=$_POST["usuario"];
           // header("location:usuarios_registrados.php");
        }else{
          echo "Error. Usuario o contraseña incorrectos";
          //  header("location:login.php");
        }

    }catch(Exception $e){
        die ("Error "  . $e->getMessage());
    }
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>
    <h1>
        Sistema login en una sola pagina
    </h1>
    <h2>
        video 62.
    </h2>

<?php 
if(!isset($_SESSION['usuario'])){
    include("formulario_registro.html"); 
}else{
    echo "Usuario: " . $_SESSION["usuario"];
}
    ?>

<div class="container border mt-5">
    <h2>
        Contenido estatico una ves iniciada la session 
        
    </h2>
<button class="btn btn-danger btn-block">
    <a href="close_session.php"></a>
</button>

</div>
</body>
</html>