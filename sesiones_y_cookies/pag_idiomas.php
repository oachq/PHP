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
        Practica con cookies
    </h1>
    <h2>
        video 65
    </h2>
    <?php
  /*  if(isset($_COOKIE['idioma_seleccionado'])){
        if($_COOKIE["idioma_sleccioado"]=='es'){
            echo "USTED YA SELECCIONO EL IDIOMA ESPAÑOL.";
        }else if($_COOKIE["idioma_sleccioado"]=='in'){
            echo "USTED YA SELECCIONO EL IDIOMA INGLES.";
        }
    }*/
    ?>
<div class="container center">
<div class="row">
        <div class="col-6">
        <h1>
            <a href="cookie.php?idioma=es"> ESPAÑOL</a>
        </h1>
        </div>
        <div class="col-6">
        <h1>
            <a href="cookie.php?idioma=in"> ENGLISH</a>
        </h1>
        </div>
    </div>
</div>

    <?php 

    ?>
</body>
</html>