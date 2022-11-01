<?php
class Hogar{
    private $direccion;
    public $habitantes;

    public function __construct($parametroDireccion){
        $this->direccion=$parametroDireccion;
        $this->habitantes=[];
    }

    public function getDireccion()
    {
        return $this->direccion;
    }
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }
    public function agregarHabitante($parametroPersona){
        array_push($this->habitantes,$parametroPersona);
    }
    public function cantidadHabitantes(){
        return count($this->habitantes);
    }
    public function obtenerHabitantes(){
        $i=1;
        $stringADevolver="";
        foreach($this->habitantes as $habitante){
            $stringADevolver.="El habitante ".$i." es: ".$habitante->getNombre()." ".$habitante->getApellido()."<br>";
            $i++;
        }
        return $stringADevolver;
    }
}
?>