<?php

class persona{

    public $nombre;//propiedades
    private $edad;
    protected $altura;


    public function asignarNombre($nuevonombre){//Accion o metodos
        $this->nombre=$nuevonombre;
    }

    public function imprimirnombre(){
        echo "Hola soy: ".$this->nombre."<br>";  
    }

    public function getedad(){
        $this->edad=25;
        return $this->edad;
    }


}

$objetoalumno = new persona();//Instancia o creacion de un objeto
$objetoalumno->asignarNombre("oswaldo");//llamando a un metodo
//echo $objetoalumno->nombre."<br>";
$objetoalumno->imprimirnombre();
$objetoalumno2 = new persona();
$objetoalumno2->asignarNombre("ariadna");
echo $objetoalumno2->nombre;

echo $objetoalumno->nombre;
echo $objetoalumno->getedad();



?>