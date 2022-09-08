<?php
$frutas=array("f"=>"fresa","pera", "manzana");
print_r($frutas);
$frutasf=$frutas["f"];
echo $frutasf;
echo $frutas["1"];
foreach ($frutas as $fruta=>&$f){
    echo $f."Tiene el indice ".$fruta."<br>";

}
array_push($frutas, "uva");
print_r($frutas);

?>