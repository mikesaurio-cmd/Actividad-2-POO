<?php
require_once "Curso.php";

// Crear estudiantes
$est1 = new Estudiante("Miguel Olivares", 101, 20);
$est2 = new Estudiante("Deniss García", 102, 22);

// Crear curso
$cursoPHP = new Curso("Actividad 2 - POO", "PHP101");

// Inscribir estudiantes
$cursoPHP->inscribirEstudiante($est1);
$cursoPHP->inscribirEstudiante($est2);

// Mostrar lista de estudiantes
$cursoPHP->mostrarEstudiantes();
?>
