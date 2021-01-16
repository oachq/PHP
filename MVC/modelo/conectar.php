<?php 
 //archivo de conexion a data base 
class Conectar{
    public static function conexion(){
        try{
            $conexion= new PDO('mysql:host=localhost; dbname=prueba', 'root', '');
            $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conexion->exec("SET CHARACTER SET utf8");

        }catch(Exception $e){
            die("Error" . $e->getMessage());
            echo "Linea del error: " . $e->getLine();
        }
        return $conexion;
    }
}

?>