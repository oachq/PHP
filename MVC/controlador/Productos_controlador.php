<?php
// se crea codigop que va a interacutar con el modelo y la vista. 
    require_once("modelo/Productos_modelo.php");
    $productos=new Productos_modelo();
    $matriz_productos=$productos->get_productos();


    require_once("vista/Productos_vista.php");
?>