<?php 

    class compra_vehiculo{
        private $precio_base;
//aplicar descuento estatico
        private static $ayuda=0;


        function compra_vehiculo($gama){
            if ($gama=="urbano"){
                $this->precio_base=10000;
            }else if ($gama=="compacto"){
                $this->precio_base=20000;
        }else if ($gama=="berlina"){
            $this->precio_base=30000;
        }
      }// fin constructor
    

    function climatizador() {
        $this->precio_base+=2000;
    }// fin climatizador

    function navegador_gps() {
        $this->precio_base+=2500;
    }// fin navegador gps

    function tapiceria_cuero($color){
        if($color=="blanco"){
            $this->precio_base+=3000;
        }else if ($color=="beige"){
            $this->precio_base+=3500;
        } else {
            $this->precio_base+=5000;
        }
    }// fin tapiceria


    static function descuento_gobierno(){ // creando un funcion static y condicionandola al momento de llamar al archivo final.
        if (date("m-d-y")>12-15-20){
            self::$ayuda=4500;
        }
    }
   // function precio_final() {
   //     return $this->precio_base;
   // }// fin precio final 

    function precio_final() {
     $valor_final=$this->precio_base-self::$ayuda;
     return $valor_final;
    }// fin precio final 
} // fin clase 

?>