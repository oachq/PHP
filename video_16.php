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
        Condicionales 2 operadores ternarios. 
    </h1>

    <h3>
        video 16.
    </h3>
 
<form name="form" method="post" action="">
    <label for="edad">ingrese la edad</label>
    <input type="text" name="edad" id="edad">
    <input type="submit" name="button" id="button" value="Enviar" onClick="reslutado()">
</form>       
         <br>
         <br>
         <br>
<!--formaulario para el sistema de login-->
<form name="form" method="post" action="">
    <label for="edad">ingrese user</label>
    <input type="text" name="user" id=""> <br>

    <label for="edad">ingrese password</label>
    <input type="text" name="password" id="">
    <input type="submit" name="login" id="" value="Enviar" onClick="reslutado()">
</form>   
    <?php //php para el verificador de edad
// operador ternario es un operador condicional que dismunuye el codigo del condicional if-else
// la cual se expresa en una sola linea de codigo. 

// ejemplo de operador ternario. 

    if(isset($_POST["button"])){
        $edad=$_POST["edad"];
       if($edad<18){
            echo "Eres menor de edad, acceso restringido!___NO TERNARIO------ <br>";
        }else {
            echo " Eres mayor de edad. Bienvenido!!!___NO TERNARIO------<br>";
        }

        $resultado=$edad<18 ? "eres menor de edad___TERNARIO" : "eres mayor de edadTERNARIO";

        echo $resultado;
    }
    ?>

    <?php //php para el formulario 
    if(isset($_POST["login"])){
        $user=$_POST["user"];
        $password=$_POST["password"];

        //aplicando operador ternario
        $resul= $user=="texlave" && $password=="123123" ? "Bienvenido" : "Acceso denegado, vuelva intentarlo.";

        echo $resul;
    }
    ?>
</body>
</html>