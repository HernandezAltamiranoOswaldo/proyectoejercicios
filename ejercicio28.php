<?php


try{
    $conexion= new PDO("mysql:host=localhost;dbname=album", "root", "");
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "ya estuvo";
}catch(PDOException $error){
echo "error ".$error;
}
?>