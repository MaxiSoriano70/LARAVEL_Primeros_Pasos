<?php
class Persona{
    private $nombre;
    private $apellido;
    private $edad;
    //METODO CONSTRUCTOR
    public function __construct($parametroNombre,$parametroApellido){
        $this->nombre=$parametroNombre;
        $this->apellido=$parametroApellido;
    }
    //METODOS GETTERS Y SETTERS
    public function setNombre($parametroNombre){
        $this->nombre=$parametroNombre;
    }
    public function getNombre(){
        return $this->nombre;
    }

    /**
     * Get the value of apellido
     */ 
    public function getApellido()
    {
        return $this->apellido;
    }
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    } 
    public function getEdad()
    {
        return $this->edad;
    }
    public function setEdad($edad)
    {
        $this->edad = $edad;
    }
}

?>
<?php

?>