<?php
require_once "Curso.php";

// Crear estudiantes
$est1 = new Estudiante("Juan Pérez", 101, 20);
$est2 = new Estudiante("Ana López", 102, 22);

// Crear curso
$cursoPHP = new Curso("Desarrollo en PHP", "PHP101");

// Inscribir estudiantes
$cursoPHP->inscribirEstudiante($est1);
$cursoPHP->inscribirEstudiante($est2);

// Mostrar lista de estudiantes
$cursoPHP->mostrarEstudiantes();
?>
