<?php
$matriz = [
    [1, 2, 3], 
    [4, 5, 6], 
    [7, 8, 9]
];
//Linha - usar a variável $i 
//Coluna - usar a variável $j
echo "\n----------\n";
for ($i=0; $i < 3; $i++) { 
    for ($j=0; $j < 3; $j++) { 
        if($j==0){
            echo "|" . $matriz[$i][$j] . " |";
        } else {
            echo  $matriz[$i][$j] . " |";
        }
    }
    echo "\n----------\n";
}