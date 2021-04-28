<?php
$palavra = $argv[1];
$maiuscula = strtoupper($palavra);
$nova = str_replace('E', '3', $maiuscula);
echo $maiuscula . "\n";
echo $nova . "\n";
$nova = str_replace('A', '4', $nova);
echo $nova . "\n";