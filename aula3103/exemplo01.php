<?php
$num = $argv[1];
$cont = 1;
// você não sabe a quantidade de vezes que seu bloco
// vai ser repetido. 
// O que define a quantidade de vezes é o que chamamos
// de sentinela [enquanto condição foi verdadeira ele
// repete o bloco] (CTRL + /)
while($num < 100){
    $num += 15;
    echo "$num na ${cont}ª passagem \n"; 
    $cont++;
}
echo "Acabou... \n";