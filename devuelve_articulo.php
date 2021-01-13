<?php
// video 57  
// archivo para tomar la data de la base de datos en este caso la tabla ARTICULOS con sql.
require "video_57.php";

class DevuelveProductos extends Conexion{
    
    public function DevuelveProductos(){
        parent::__construct();
    }
    public function get_productos(){
        $resultado=$this->conexion_db->query('SELECT * FROM ARTÍCULOS');
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;
    }
} 
?>