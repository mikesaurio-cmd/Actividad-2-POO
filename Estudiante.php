<?php
class Estudiante {
    private $nombre;
    private $id;
    private $edad;

    // Constructor
    public function __construct($nombre, $id, $edad) {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->edad = $edad;
    }

    // Métodos getter
    public function getNombre() {
        return $this->nombre;
    }

    public function getId() {
        return $this->id;
    }

    public function getEdad() {
        return $this->edad;
    }

    // Método para mostrar información del estudiante
    public function mostrarInfo() {
        return "ID: $this->id, Nombre: $this->nombre, Edad: $this->edad";
    }
}
?>
