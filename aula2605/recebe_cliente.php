<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Resultados do Envio</title>
</head>
<body>
<?php
    $nome_cliente = $_POST["inputNome"];
    $idade = $_POST["inputIdade"];
?>
<div class="container">
    <div class="jumbotron">
        <h1>Dados Enviados</h1>
    </div>
</div>
<div class="container">
    <p>
        Nome completo do cliente: <?=$nome_cliente?>
    </p>
    <p>
        Idade completa do cliente: <?=$idade?>
    </p>
    <a class="btn btn-primary" href="form_cliente.html">Voltar Formulário</a>
</div>
</body>
</html>
