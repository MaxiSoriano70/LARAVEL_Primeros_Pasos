<?php
require_once "Persona.php";
require_once "Hogar.php";
echo "HOLA MUNDO!!! DESDE EL MAIN"."<br>";
$unapersona=new Persona("Karen","Dominguez");
echo $unapersona->getNombre()."<br>";
echo $unapersona->getApellido()."<br>";
//$unapersona->nombre="Celeste Severich";
/*$unapersona->apellido="Severich";
echo $unapersona->apellido;*/
$unapersona->setNombre("Celeste");
$unapersona->setApellido("Severich");
$unapersona->setEdad(23);
echo $unapersona->getNombre()."<br>";
echo $unapersona->getApellido()."<br>";
echo $unapersona->getEdad()."<br>";
$otrapersona=new Persona("Edin","Dzeko");
echo $otrapersona->getNombre()."<br>";
echo $otrapersona->getApellido()."<br>";
$unHogar=new Hogar("Calle Falsa 123");
echo $unHogar->getDireccion()."<br>";
$unHogar->agregarHabitante($unapersona);
$unHogar->agregarHabitante($otrapersona);
var_dump($unHogar->habitantes);
echo "<br>";
echo $unHogar->obtenerHabitantes();
?>