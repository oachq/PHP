<?php
// video 58 
// archivo para tomar la data de la base de datos en este caso la tabla ARTICULOS con sql.
require "video_57.php";

class DevuelveProductos extends Conexion{
    
    public function DevuelveProductos(){
        parent::__construct();
    }
    public function get_productos($dato){
        // creacion de la query sql para PDO
        $sql="SELECT * FROM ARTÍCULOS WHERE PAIS_DE_ORIGEN='" .$dato . "'";
        $sentencia=$this->conexion_db->prepare($sql);
        $sentencia->execute(array());
        $resultado=$sentencia->fetchAll(PDO::FETCH_ASSOC);
        $sentencia->closeCursor();
        return $resultado;
        $this->conexion_db=null;
        /*$resultado=$this->conexion_db->query('SELECT * FROM ARTÍCULOS WHERE PAIS_DE_ORIGEN="' .$dato . '"' );
        $productos=$resultado->fetch_all(MYSQLI_ASSOC);
        return $productos;*/
    }
} 
?>