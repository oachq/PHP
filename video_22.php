<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
        Programacion orientada a objetos "POO"
    </h1>
    <h3>
        Video 22-24/2. 
    </h3>

    <?php
    // Introduccion a programacion orientada a objetos POO
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

       $renault = new coche(); //estado inicial a un objeto. 
       $mazda = new coche();
       $seat = new coche();

      // $mazda->arrancar();
      // echo $mazda->ruedas;

      $renault->establece_color("red", "Renault");
       
    ?>
</body>
</html>