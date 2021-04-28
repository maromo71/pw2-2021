<?php
$senha = $argv[1];
if (sha1($senha) === '03de6c570bfe24bfc328ccd7ca46b76eadaf4334'){
    echo "senha correta \n";
    echo "acesso permitido \n";
}else{
    echo "senha invalida \n";
    echo "sem acesso \n";
    exit(-1);
}

