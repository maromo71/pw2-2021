<?php
//receber dois numeros e mostrar o maior como resultado
$num1 = $argv[1];
$num2 = $argv[2];

//comparar os dois elementos e verificar qual é o maior ou se são iguais

if($num1 > $num2) {
    echo "O primeiro valor é maior \n";
} elseif($num2 > $num1) {
    echo "O segundo valor é maior \n";
} else {
    echo "Os valores são iguais \n";
}
echo "Acabou o programa \n";
