<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
    <h1 class="text-center">
        CRUD 
    </h1>
    <h2>
        Video 70-73.
    </h2>

    <?php
    include("conexion.php");
    //$conexion=$base->query("SELECT * FROM datos_usuarios");//GENEREAMOS EL CODIGO SQL PARA INDICAR A QUE BASE DE DATOS VAMOS A TOMAR LA DATA
    //$registos=$conexion->fetchAll(PDO::FETCH_OBJ);// GENERA UN ARRAY DE LA PETICION A LA BASE DE DATOS 

    $registros=$base->query("SELECT * FROM datos_usuarios")->fetchAll(PDO::FETCH_OBJ);// LINEA DE CODIGO QUE HACE LO MISMO QUE LAS DOS ANTERIORES
        // peticion echa de forma asociativa

     if(isset($_POST["add"])){
         $nombre=$_POST["nombre"];
         $apellido=$_POST["apellido"];
         $celular=$_POST["celular"];

         $sql="INSERT INTO datos_usuarios (Nombre, Apellido, Celular) VALUES (:nom, :ape, :cel)";
         $resultado=$base->prepare($sql);
         $resultado->execute(array(":nom"=>$nombre, ":ape"=>$apellido, ":cel"=>$celular));
        header("Location:index.php");
     }   
    ?>

    <div class="container m-5 ">
    <h2 class="m-5">
        Tabla de información.
    </h2>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST"> 
    <table class="table m-3">
  <thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Celular</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($registros as $persona): ?>

    <tr >
      <td> <?php echo $persona->ID; ?></td>
      <td> <?php echo $persona->Nombre; ?></td>
      <td> <?php echo $persona->Apellido; ?></td>
      <td> <?php echo $persona->Celular; ?></td>
      <td><a href="editar.php?__id=<?php echo $persona->ID?> & nombre=<?php echo $persona->Nombre?> & apellido=<?php echo $persona->Apellido?> & cel=<?php echo $persona->Celular?>"> <button type="button" class="btn btn-primary m-0">Editar</button> </a></td>
      <td><a href="borra.php?__id=<?php echo $persona->ID?> "> <button type="button" class="btn btn-danger m-0">Borrar</button></a></td>
    </tr>
    <?php endforeach; ?>  

    <tr >
      <td> </td>
      <td> <input type="text" name="nombre"></td>
      <td> <input type="text" name="apellido"></td>
      <td> <input type="number" name="celular"></td>
      <td><button type="submit" class="btn btn-success m-0" name="add">Agregar</button></td>
    </tr>
    
  </tbody>
</table>
</form> 
</body>
</html>


