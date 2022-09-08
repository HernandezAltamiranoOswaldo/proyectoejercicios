<?php
$array = array(
    array("admin1", "sas", "administrador"),
    array("prof1", "prossaf1", "profesor"),
    array("alum1", "alusasm1", "alumno")
);


    for ($i = 0; $i < sizeof($array); $i++) {
        for ($j = 0; $j < sizeof($array[0]); $j++){
             echo "<br>".$array[$i][$j];
        }
    }

?>