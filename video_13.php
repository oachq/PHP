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
Operadores matematicos ||
</h1>
        <h3>
        Video 13 .
        </h3>

      <form name=" form1" method="post" action="calculadora.php">
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
        <option>incrementador </option>
        <option>decrementador </option>
        </select>
        </p>
        <p>
        <input type="submit" name="button" id="button" value="Enviar" onClick="prueba">

        </p>

      </form>

    <?php
    // mandamos llamar el archivo calculadora.php para utilizar la logica del mimso
    // el obejtivo del video es incrementar o drecementar un numero.
        include ('calculadora.php');


    ?>
</body>
</html>