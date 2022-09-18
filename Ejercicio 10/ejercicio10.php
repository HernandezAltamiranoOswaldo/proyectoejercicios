<?php

if($_POST){
    //Recibir informacion del formulario
    $ValorA=$_POST['valora'];
    $ValorB=$_POST['valorb'];
    $ValorC=$_POST['valorc'];
   if(($ValorA > $ValorB)&& ($ValorC==9))   { // || OR && AND
    
       echo "El valor de A es mayor que el valor de B";
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
    <form action="ejercicio10.php" method="post">
        Valor a:
        <input type="text" name="valora" id="">
        Valor b:
        <input type="text" name="valorb" id="">
        Valor c:
        <input type="text" name="valorc" id="">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>