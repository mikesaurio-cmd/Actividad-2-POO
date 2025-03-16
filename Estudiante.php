<?php
require_once "Persona.php";

// Clase Estudiante que hereda de Persona
class Estudiante extends Persona {
    private $carrera;

    public function __construct($nombre, $id, $edad, $carrera) {
        parent::__construct($nombre, $id, $edad);
        $this->carrera = $carrera;
    }

    // Método sobrescrito para incluir la carrera
    public function mostrarInfo() {
        return parent::mostrarInfo() . ", Carrera: $this->carrera";
    }
}
?>
