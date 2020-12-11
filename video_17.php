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
        Condicionales 3 - Switch(case) 
    </h1>
    <h3>
        Video 17.
    </h3>
 
    <form name="form" method="post" action="">
    <label for="edad">ingrese la edad</label>
    <input type="text" name="edad" id="edad">
    <input type="submit" name="button" id="button" value="Enviar" onClick="reslutado()">
</form> 

    <?php
        // Switch (case)
        if(isset($_POST["button"])){
            $edad=$_POST["edad"];

            switch ($edad) { // cuando hay que evaluar muchos parametros en la condicion inicial se coloca asi Switch(true){}
                case $edad<18:
                    echo "eres menor de edad ";
                    break;
                
                case $edad<=35:
                    echo "eres mayor de edad "  ;
                    break;
                case $edad<=60:
                    echo "eres un maldito viejo"  ;
                    break;
                default:
                    echo "eres una persona que ya valio verga";
                    break;
            }
        }
      

    ?>  
</body>
</html>