<?php
include_once 'calculadora.php';

$num1 = $argv[1];
$num2 = $argv[2];
$operador = $argv[3];

switch($operador){
    case '+':
        $resultado = somar($num1, $num2);
        break;
    case '-':
        $resultado = subtrair($num1, $num2);
        break;
    case '*':
        $resultado = multiplicar($num1, $num2);
        break;
    case '/':
        $resultado = dividir($num1, $num2);
        break;
    case '%':
        $resultado = resto($num1, $num2);
        break;
    case '^':
        $resultado = potencia($num1, $num2);
        break;
    default:
        echo 'Este operador não existe';
        exit(-1);
}
echo "A operação escolhida foi com o operador $operador \n";
echo "O resultado da operação é: $resultado \n";

