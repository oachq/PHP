<style>
.resul{
    color:red;
}
</style>

<?php
        if (isset($_POST["button"])){

            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            calcular($operacion);
        } 

        function calcular ($calculo){ // se crea una funcion para separar las operaciones de la data de entrada
            if (!strcmp("suma",$calculo)){
                global $num1;
                global $num2;
                $resul= $num1+$num2; // se agrego la variable previamente para poder manipular el css del resultado.. 
                echo "<p class='resul'> el resultado es: $resul </p>" ;
            }
            if (!strcmp("resta",$calculo)){
                global $num1;
                global $num2;
                echo"el resultado es: ". ($num1-$num2);
            }
            if (!strcmp("multiplicacion",$calculo)){
                echo"el resultado es: ". ($num1*$num2);
            }
            if (!strcmp("division",$calculo)){
                global $num1;
                global $num2;
                echo"el resultado es: ". ($num1/$num2);
            }
            if (!strcmp("modulo",$calculo)){
                global $num1;
                global $num2;
                echo"el resultado es: ". ($num1%$num2);
            }
            if (!strcmp("incrementador",$calculo)){
                global $num1;
                //global $num2;
                $num1++;
                echo"el resultado es: ". ($num1);
            }
            if (!strcmp("decrementador",$calculo)){
                global $num1;
                //global $num2;
                $num1--;
                echo"el resultado es: ". ($num1);
            }
        }

        ?>