<?php
if($_POST){
    $boton=$_POST['boton'];
    switch($boton){
        case 1:
            echo "Presiono el botón 1";
            break;
        case 2:
            echo "Presiono el botón 2";
            break;   
        case 3:
            echo "Presiono el botón 3";
            break;   
    
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ejercicio13.php" method="post">
        <input type="submit" name="boton" value="1">
        <br>
        <input type="submit" name="boton" value="2">
        <br>
        <input type="submit" name="boton" value="3">
    </form>
</body>
</html>