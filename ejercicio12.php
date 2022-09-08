<?php

if($_POST){
    //Recibir informacion del formulario
    $ValorA=$_POST['valora'];
    $Valorb=$_POST['valorb'];
    $suma=$ValorA+$Valorb;
    $resta=$ValorA-$Valorb;
    $multiplicacion=$ValorA*$Valorb;
    $division=$ValorA/$Valorb;
    echo "La suma es  ".$suma."<br>";
    echo "La resta es  ".$resta."<br>";
    echo "La multiplicacion es  ".$multiplicacion."<br>";
    echo "La division es  ".$division."<br>";
    if($ValorA==$Valorb){
        echo "El valor de a es igual a b <br>";
       }else{
           echo "El valor de a es diferente de b";
       }

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Aritmeticos</title>
</head>
<body>
    <form action="ejercicio12.php" method="post">
        Valor a:
        <input type="text" name="valora" id="">
        Valor b:
        <input type="text" name="valorb" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>