<?php

//tratar as variáveis de envio
//verificar vazio
if( $_POST["inputUsuario"]=="" ||
     $_POST["inputSenha"]=="" || 
     $_POST["inputCidade"]=="" ||
     $_POST["inputEstado"]=="" ||
     $_POST["inputNome"]==""  ){
    echo "<h1>Favor preencher os campos corretamente</h1>";
    echo "<a href='formulario.php'>Voltar</a>";
    exit(1);
}

$usuario = $_POST["inputUsuario"];
$senha = $_POST["inputSenha"];
$nome = $_POST["inputNome"];
$email = $_POST["inputEmail"];
$cidade = $_POST["inputCidade"];
$estado = $_POST["inputEstado"];
//fechar o php
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados Recebidos</h1>
    <p>Usuário: <?=$usuario?> </p>    
    <p>Nome: <?=$nome?> </p>   
    <p>Email: <?=$email?> </p>     
    <p>Cidade: <?=$cidade?> </p>   
    <p>Estdo: <?=$estado?> </p>     
</body>
</html>
