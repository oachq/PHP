<?php
    // conexion por PDO 
    try{
        $base=new PDO ('mysql:host=localhost; dbname=prueba', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $base->exec("SET CHARACTER SET utf8");
    }catch(Exception $e){
        die('Error' . $e->getMessage());
        echo "Linea de error " . $e->getLine();
    }
?>