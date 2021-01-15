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
        PAGINA DE EDITAR.
    </h1>

    <?php
        include("conexion.php");
    if (!isset($_POST["btn_actualizar"])){
        $id = $_GET["__id"];
        $nombre = $_GET["nombre"];
        $apellido= $_GET["apellido"];
        $celular = $_GET["cel"];
    }else{
        $id = $_POST["__id"];
        $nombre = $_POST["nombre"];
        $apellido= $_POST["apellido"];
        $celular = $_POST["celular"];
        
        $sql="UPDATE datos_usuarios SET Nombre=:Minombre, Apellido=:Miapellido, Celular=:Micel WHERE ID=:Miid";
        $resultado=$base->prepare($sql);
        $resultado->execute(array(":Miid"=>$id, ":Minombre"=>$nombre, ":Miapellido"=>$apellido, ":Micel"=>$celular));
       
        header("Location:index.php");
    }
      
         //$base->query("DELETE FROM datos_usuarios WHERE ID='$id'");

        // header("Location:index.php");
    ?>
<div class="container m-5">
<table class="table m-3">
  <thead class="border">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Celular</th>
      <th scope="col">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <form name="form1" method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" > 
    <tr >
      <td> <input type="hidden" name="__id"  value="<?php echo $id?>"> </td>
      <td> <input type="text" name="nombre" value="<?php echo $nombre?>"> </td>
      <td> <input type="text" name="apellido" value="<?php echo $apellido?>"></td>
      <td> <input type="number" name="celular" value="<?php echo $celular?>"></td>
      <td><button type="submit" class="btn btn-success m-0" id="btn_actualizar" name="btn_actualizar">Agregar</button></td>
    </tr>
    </form>
  </tbody>
</table>
</div>



</body>
</html>