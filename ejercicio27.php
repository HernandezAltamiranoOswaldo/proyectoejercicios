<?php
class ejemplo{
    public static function metodo(){
        echo "Hola soy un método estatico <br>";
    }
}

$obj=new ejemplo();
$obj->metodo();

ejemplo::metodo();

?>
