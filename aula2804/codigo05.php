<?php
$frase = $argv[1];
$tamanho = strlen($frase);
echo "A frase tem $tamanho letras \n";
for ($i=0; $i < $tamanho; $i++) { 
    echo $frase[$i] . "\n";
}