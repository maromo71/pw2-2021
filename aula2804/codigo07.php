<?php
function paulistas(){
    $clubes[] = "São Paulo";
    $clubes[] = "Palmeiras";
    $clubes[] = "Santos";
    $clubes[] = "São Caetano";
    return $clubes;
}
$nomes = paulistas();
echo "Grandes clubes paulistas que integram a primeira divisão: \n\n";
for ($i=0 ; $i <sizeof($nomes); $i++){
    $ordem= $i + 1;
    echo "{$ordem}º) $nomes[$i] \n";
}
