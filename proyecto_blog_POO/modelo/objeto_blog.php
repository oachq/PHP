<?php 

    class Objeto_blog{
        private $id;
        private $titulo;
        private $comentario;
        private $archivo;

        // metodos de acceso getters y setters
        public function getId(){
            return $this->id;
        }

        public function setId($id){
            $this->id=$id;
        }

        public function getTitulo(){
            return $this->titulo;
        }
        
        public function setTitulo($titulo){
             $this->titulo=$titulo;
        }

        public function getComentario(){
            return $this->comentario;
        }
        
        public function setComentario($comentario){
            $this->comentario=$comentario;
        }

        public function getArchivo(){
            return $this->archivo;
        }

        public function setArchivo($archivo){
            $this->archivo=$archivo;
        }
    }
?>