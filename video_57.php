<?php

// archivo de conexion a data base. "conexion.php"
require ("config.php");

class Conexion{
    protected $conexion_db;

    public function Conexion (){
        $this->conexion_db = new mysqli(db_host, db_user, db_password, db_name);
        if ($this->conexion_db->connect_errno){
            echo "Fallo al conectar a Mysql: " . $this->conexion_db->connect_error;
            return;
        }
        $this->conexion_db->set_charset(db_charset);
    }
}
?>