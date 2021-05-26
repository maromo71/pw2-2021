<?php

    function fat($n){
        if($n == 1) return 1;
        return $n * fat($n - 1);
    }

    $numero = $argv[1];
    echo "\n";
    echo "Fatorial de $numero => " .  fat($numero) . "\n\n";