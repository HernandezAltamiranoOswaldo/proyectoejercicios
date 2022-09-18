<?php

class persona{

    public $nombre;//propiedades
    private $edad;
    protected $altura;

    function __construct($nombre){
        $this->nombre=$nombre;
    }
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

$persona=new Persona("Oswaldo Hernández");
$persona->imprimirnombre();


?>