<?php
// video 57 y 58 misma data para video 57 y 58 
// archivo de conexion a data base. "conexion.php"
require ("config.php");

class Conexion{
    protected $conexion_db;

    public function Conexion (){
        // conexion con PDO y class de POO 
        try{
            $this->conexion_db=new PDO ('mysql:host=localhost; dbname=prueba', 'root', '');
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexion_db->exec("SET CHARACTER SET utf8");
            return $this->conexion_db;
        }catch(Exception $e){
            echo "la linea de error es: " . $e->getLine();
        }
        //_____________________________________________________________________________________________//
        // conexion por POO 
       /* $this->conexion_db = new mysqli(db_host, db_user, db_password, db_name);
        if ($this->conexion_db->connect_errno){
            echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(db_charset);*/
    }
}
?>