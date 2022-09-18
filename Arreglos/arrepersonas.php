<?php


class Persona
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function getdatos(){
        echo "Hola soy: ".$this->name."y tengo ".$this->age;
    
    }
}
class Examen
{
    public $name;
    public $calificacion;

    public function __construct($name, $calificacion)
    {
        $this->name = $name;
        $this->calificacion = $calificacion;
    }
  
}

$per1= new Persona("oswaldo", "25");
$per2= new Persona("Ariadna", "24");
$per3= new Persona("Lulu", "50");
$exa1= new Examen("español", "5");
$exa2= new Examen("matematicas", "9");
$exa3= new Examen("ciencias", "10");
$per1->getdatos();
$personas= array ($per1, $per2, $per3);
$examenes= array ($exa1, $exa2, $exa3);
print_r($personas);
foreach ($personas as $persona){
    foreach ($examenes as $examen){
    echo "Hola soy: ".$persona->name."y tengo ".$persona->age. "y en ".$examen->name."<br>";
    }
}

?>