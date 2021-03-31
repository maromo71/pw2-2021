<?php
    $clientes = [
        ["nome"=>"Marquinho", "idade"=>35], 
        ["nome"=>"Maromo", "idade"=>39], 
        ["nome"=>"Antonio", "idade"=>17]
    ];
    foreach ($clientes as $cliente) {
        foreach ($cliente as $chave => $valor) {
            echo " Dado $chave => $cliente[$chave] \n";    
        }
        echo "\n";
    }