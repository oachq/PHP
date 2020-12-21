
<?php
    //POO  herencias.

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


class camion extends coche{ // camion se define como subclase y coche como la super clase.


function camion(){ // metodo contrusctor 
    $this->ruedas=8;
    $this->color="gris";
    $this->motor=2600;
}

function establece_color($color_camion, $nombre_camion){
    $this->color=$color_camion;
    echo "el color de " . $nombre_caminon . " es: " . $this->color . "<br>";
}


function arrancar(){
    parent::arrancar(); //esta funcion es para mandar llamar una funcion para ejecutarse primero que en este caso es la funcion arrancar de coche que es la funcion padre. 
    echo "camion arrancado....!";
}
}
?>


