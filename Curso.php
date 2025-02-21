<?php
require_once "Estudiante.php";

class Curso {
    private $nombreCurso;
    private $codigoCurso;
    private $estudiantes = [];

    // Constructor
    public function __construct($nombreCurso, $codigoCurso) {
        $this->nombreCurso = $nombreCurso;
        $this->codigoCurso = $codigoCurso;
    }

    // Método para inscribir un estudiante
    public function inscribirEstudiante($estudiante) {
        $this->estudiantes[] = $estudiante;
    }

    // Método para mostrar estudiantes inscritos
    public function mostrarEstudiantes() {
        echo "<h2>Estudiantes en el curso $this->nombreCurso:</h2>";
        foreach ($this->estudiantes as $est) {
            echo "<p>" . $est->mostrarInfo() . "</p>";
        }
    }
}
?>
