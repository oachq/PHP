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
        BLOG
    </h1>
    <?php
      $miconexion=mysqli_connect("localhost", "root", "", "data_base_blog");

      //comprobar conexion//
      if(!$miconexion){
          echo "la conexion ha fallado: " . mysqli_error();
          exit();
      }
      $miquery="SELECT * FROM contenido ORDER BY Fecha DESC";
      if($resultado=mysqli_query($miconexion, $miquery)){
          while($registro=mysqli_fetch_assoc($resultado)){
              echo "<h3>" . $registro['Titulo'] . "</h3>";
              echo "<h4>" . $registro['Fecha'] . "<h4>";
              echo "<div style='width:400px'>" . $registro['Comentario']. "</div> <br> <br>";   
              if($registro['img']!=''){
                  echo "<img src='imagenes/" . $registro['img'] . "' width='300px' />";
              }
              echo "<hr/>";
          }
      }
    ?>
    <a href="formulario.php"> ir a pagina principal </a>
    <a href="mostrar_blog.php"> ver blog</a>
</body>
</html>