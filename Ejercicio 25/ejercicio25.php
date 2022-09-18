<?php

class persona{

    public $nombre;//propiedades
    private $edad;
    protected $altura;


    public function setnombre($nuevonombre){//Accion o metodos
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

    class Trabajador extends persona{
        public $puesto;

        public function presentar(){
            echo "Hola soy ".$this->nombre." y  soy un ".$this->puesto;
        }

        public function setpuesto($puesto){
            $this->puesto=$puesto;
        }

    }



$objetoalumno = new persona();//Instancia o creacion de un objeto
$objetoalumno->setnombre("oswaldo");//llamando a un metodo
//echo $objetoalumno->nombre."<br>";
$objetoalumno->imprimirnombre();
$objetoalumno2 = new persona();
$objetoalumno2->setnombre("ariadna");
echo $objetoalumno2->nombre;

echo $objetoalumno->nombre;
echo $objetoalumno->getedad();


echo "-------------<br>";
$trabajador1 = new Trabajador();
$trabajador1->setnombre("Victor");
$trabajador1->setpuesto("Carpintero");
$trabajador1->presentar();

?>