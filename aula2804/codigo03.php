<?php
$palavra = $argv[1];
$criptografada = sha1($palavra);
echo "Palavra digitada: $palavra \n";
echo "Criptografada: $criptografada \n";
