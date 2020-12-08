<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="text_transform"> Operadores comparacion VIDEO 9</h1>
    
    <?php
//operadores de comparacion 
  /*  $var1 == Svar2 --> igual que | arrroja un true su son iguales
      $var1 === Svar2 --> identica que | true si las variables son identicas y del mismo tipo
      $var1 != Svar2 -->  diferente que | true si las dos variables no son iguales
      $var1 <> Svar2 --> diferente que |true si las dos variables no son iguales y ademas no son del mismo tipo
      $var1 < Svar2 --> menor que | true si var1 es menorque var2
      $var1 > Svar2 --> mayor que | true si var1 es mayor que var2
      $var1 <= Svar2 --> menor o igual que | true si var1 es menor o igual que $var2 
      $var1 >= Svar2 --> mayor o igual que | true si var1 es mato que var2
*/


$var1 = 8; //number 
$var2 = "8";//string
$var3 = "texlave"; //string

if ($var1===$var2){
    echo "son iguales";
}else {
    echo "no son iguales";
}
    ?>
</body>
</html>
