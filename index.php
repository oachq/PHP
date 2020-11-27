<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1 class="text_transform">pagina random</h1>


    <?php  
    $hola_mundo ="hola mundo___soy php";

    echo "$hola_mundo <br>";

    function texlave(){
        $xx = "hola texlave";
        
        echo "$xx <br>";
    }

    texlave();
    ?>

    <input type="button" class="btn" onClick="alert()" value="click here">
</body>
</html>