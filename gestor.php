<?php
require_once "Curso.php";

// Crear estudiantes
$est1 = new Estudiante("Miguel Olivares", 101, 20, "Ingeniería");
$est2 = new Estudiante("Deniss Garcia", 102, 22, "Matemáticas");

// Crear profesor
$prof1 = new Profesor("Gustavo Valdez", 201, 45, "Programación");

// Crear curso
$cursoPHP = new Curso("Actividad 3", "Herencia");

// Inscribir participantes
$cursoPHP->agregarParticipante($est1);
$cursoPHP->agregarParticipante($est2);
$cursoPHP->agregarParticipante($prof1);

// Mostrar participantes
$cursoPHP->mostrarParticipantes();
?>
