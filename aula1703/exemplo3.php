<?php
//Receber uma nota de 0 a 10
$nota = $argv[1];

//comparar e aplicar as menções de acordo com a Regra do prof. Maromo
//8 ... 10 -> MB
//6 ... 7.99 -> B
//4.5 .. 5.99 -> R
//Abaixo de 4.5 ele dançou -> I
if($nota < 4.5){
    $conceito = 'I';
}elseif($nota < 6){
    $conceito = 'R';
}elseif($nota < 8){
    $conceito = 'B';
}else{
    $conceito = 'MB';
}
echo "Aluno sua nota foi $nota, seu conceito é: $conceito \n";

