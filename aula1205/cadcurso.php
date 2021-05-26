<?php
include_once "curso.php";

$curso = new Curso;
$curso->cadastrar_Curso(12,"ads",12,12);
$curso->apresentar_Curso();
