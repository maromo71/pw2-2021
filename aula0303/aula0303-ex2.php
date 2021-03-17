<?php
$x = 10; 
$y = 20;
$num1 = 50;

function somar($num1, $num2)
{
    //num1 e num2 são locais a função somar
    return $num1 + $num2;
}

$resultado = somar($x, $y);

echo "valor de num 1:  $num1 \n"; //ele entende como outro num1 global
echo " A soma de $x e $y é igual a $resultado \n";
