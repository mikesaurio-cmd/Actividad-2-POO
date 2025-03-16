<?php
require_once "Estudiante.php";
require_once "Profesor.php";

class Curso {
    private $nombreCurso;
    private $codigoCurso;
    private $participantes = [];

    public function __construct($nombreCurso, $codigoCurso) {
        $this->nombreCurso = $nombreCurso;
        $this->codigoCurso = $codigoCurso;
    }

    // Método para agregar participantes
    public function agregarParticipante($persona) {
        $this->participantes[] = $persona;
    }

    // Mostrar todos los participantes
    public function mostrarParticipantes() {
        echo "<h2>Participantes en el curso $this->nombreCurso:</h2>";
        foreach ($this->participantes as $persona) {
            echo "<p>" . $persona->mostrarInfo() . "</p>";
        }
    }
}
?>
