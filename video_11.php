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
            Operadores matematicos! 
        </h1>
        <h3>
        Video 11.
        </h3>

      <form name=" form1" method="post" action="">
        <p>
        <label for="num1"></label>
        <input type="text" name="num1" id="num1">
        <label for="num2"></label>
        <input type="text" name="num2" id="num2">
        <label for="operacion"></label>
        <select name="operacion" id="operacion">
        <option>suma </option>
        <option>resta </option>
        <option>multiplicaicon </option>
        <option>division </option>
        <option>modulo </option>
        </select>
        </p>
        <p>
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

        </p>

      </form>
        
        <?php
        /*
        operadores php
        suma ---->    +
        resta---->    -
        multi---->    *
        division----> / 
        Modulo ----> %
        sumador----> ++ ó +=
        restador---->  -- ó -=
        */
        if (isset($_POST["button"])){

            $num1=$_POST["num1"];
            $num2=$_POST["num2"];
            $operacion=$_POST["operacion"];
            
            if (!strcmp("suma",$operacion)){
                echo"el resultado es: ". ($num1+$num2);
            }
            if (!strcmp("resta",$operacion)){
                echo"el resultado es: ". ($num1-$num2);
            }
            if (!strcmp("multiplicacion",$operacion)){
                echo"el resultado es: ". ($num1*$num2);
            }
            if (!strcmp("division",$operacion)){
                echo"el resultado es: ". ($num1/$num2);
            }
            if (!strcmp("modulo",$operacion)){
                echo"el resultado es: ". ($num1%$num2);
            }
        }

        ?>
</body>
</html>