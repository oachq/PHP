<?php
    // Introduccion a programacion orientada a objetos POO

    //SE CREA UNA FUNCION PARA CREAR POR SEPARADO LAS FUNCIONES Y REUTILIZARLAS EN DIFERENTES ARCHVIOS. 
    
        class coche {

            var $ruedas;
            var $color;
            var $motor;

            function coche(){ // metodo contrusctor 
                $this->ruedas=4;
                $this->color="";
                $this->motor=1600;


            }

            function arrancar (){
                echo "estoy arrancando<br>";
            }

            function girar (){
                echo "estoy girando<br>";
            }

            function frenar (){
                echo "estoy frenando<br>";
            }

            function establece_color($color_coche, $nombre_coche){
                $this->color=$color_coche;
                echo "el color de " . $nombre_coche . " es: " . $this->color . "<br>";
            }

        }
//___________________________________________________________________________


class camion {

    var $ruedas;
    var $color;
    var $motor;

    function camion(){ // metodo contrusctor 
        $this->ruedas=16;
        $this->color="";
        $this->motor=2600;
    }

    function arrancar (){
        echo "estoy arrancando<br>";
    }

    function girar (){
        echo "estoy girando<br>";
    }

    function frenar (){
        echo "estoy frenando<br>";
    }

    function establece_color($color_camion, $nombre_camion){
        $this->color=$color_camion;
        echo "el color de " . $nombre_caminon . " es: " . $this->color . "<br>";
    }

}
    ?>