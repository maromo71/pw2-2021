<?php
    //Como php entende os valores passado como argumentos para função

    
    function multiplicar($valor, $multiplicador = 1){
        $valor = $valor * $multiplicador;
        return $valor;
    }

    $x = $argv[1];
   // $y = $argv[2];
    echo multiplicar($x) . "\n";

