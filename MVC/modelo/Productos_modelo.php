<?php
// codigo donde se genera la query de la base de datos y se almacena en un array
    class Productos_modelo{
        private $db;
        private $productos;

        public function __construct(){
          require_once("modelo/conectar.php");  
          $this->db=Conectar::conexion();
          $this->productos=array();
        }
        public function get_productos(){
            $consulta=$this->db->query("SELECT * FROM ARTÍCULOS");
            while($filas=$consulta->fetch(PDO::FETCH_ASSOC)){
                $this->productos[]=$filas;
            }
            return $this->productos;
        }
    }

?>