<?php

include_once "aluno.php";

$objFernando = new Aluno;
$objDuda = new Aluno;

$objDuda->inicializar_aluno(101, "Maria Eduarda", 16);
$objFernando->inicializar_aluno(102, "Fernando", 16);

$objDuda->apresentar_aluno();
$objFernando->apresentar_aluno();
