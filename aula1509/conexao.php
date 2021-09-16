<?php
//variáveis com o usuário e a senha do banco de dados
$username = 'root';
$password = '1234';

try{
    //tentar abrir o banco
    $conn = new PDO('mysql:host=localhost;dbname=escola', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $erro){
    echo "Aconteceu o erro: " . $erro->getMessage();
    exit(1);
}