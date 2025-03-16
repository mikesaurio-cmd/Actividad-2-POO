<?php
require_once "Persona.php";

// Clase Profesor que hereda de Persona
class Profesor extends Persona {
    private $especialidad;

    public function __construct($nombre, $id, $edad, $especialidad) {
        parent::__construct($nombre, $id, $edad);
        $this->especialidad = $especialidad;
    }

    // Método sobrescrito para incluir la especialidad
    public function mostrarInfo() {
        return parent::mostrarInfo() . ", Especialidad: $this->especialidad";
    }
}
?>
