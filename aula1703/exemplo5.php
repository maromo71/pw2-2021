<?php
//Exemplo de if ternário
$sexo = $argv[1];

switch($sexo){
    case 'M':
    case 'm':
        $sexo = "Masculino";
        break;
    case 'F':
    case 'f':
        $sexo = "Feminino";
        break;
    default:
        $sexo = "Inválido";
}

echo "Sexo: $sexo \n";
