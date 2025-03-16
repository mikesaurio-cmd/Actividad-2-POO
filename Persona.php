<?php
// Clase base Persona
class Persona {
    protected $nombre;
    protected $id;
    protected $edad;

    // Constructor
    public function __construct($nombre, $id, $edad) {
        $this->nombre = $nombre;
        $this->id = $id;
        $this->edad = $edad;
    }

    // Método para mostrar información básica
    public function mostrarInfo() {
        return "ID: $this->id, Nombre: $this->nombre, Edad: $this->edad";
    }
}
?>

