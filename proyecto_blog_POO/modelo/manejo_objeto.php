<?php 
    include_once("objeto_blog.php");
    class Manejo_Objetos{

        private $conexion;
        public function __construct($conexion){
            $this->setConexion($conexion);
        }
        public function setConexion(PDO $conexion){
            $this->conexion=$conexion;
        }
        public function getContenidoPorFecha(){
            $matriz=array();
            $contador=0;
            $resultado=$this->conexion->query("SELECT * FROM contenido ORDER BY Fecha");

            while ($registro=$resultado->fetch(PDO::FETCH_ASSOC)){
                $blog= new Objeto_blog();
                $blog->setId($registro["id"]);
                $blog->setTitulo($registro["titulo"]);
                //$blog->setFecha($registro["fecha"]);
                $blog->setComentario($registro["comentario"]);
                $blog->setArchivo($registro["archivo"]);

                $matriz[$contador]=$blog;
                $contador++;
            }
            return $matriz;
        }
        public function insertaContenido(Objeto_blog $blog){
            $sql="INSERT INTO contenido (Titulo, Fecha, Comentario, img) VALUES ('" . $blog->getTitulo() . "','" . $blog->getComentario() . "','" . $blog->getArchivo() . "')";
            $this->conexion-exec($sql);
         } 
    }
    

?>