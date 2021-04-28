<?php
function somar($a, $b){
    return $a + $b;
}

function subtrair($a, $b){
    return $a - $b;
}

function multiplicar($a, $b){
    return $a * $b;
}

function dividir($a, $b){
    return $a / $b;
}

function resto($a, $b){
    return $a % $b;
}

function potencia($base, $expoente){
    $mult = 1;
    for ($i=1; $i <= $expoente; $i++) { 
        $mult = $mult * $base;
    }
    return $mult;
}

