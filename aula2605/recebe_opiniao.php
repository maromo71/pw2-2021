<?php
$nota = $_POST["inputNota"];
$tipo = $_POST["inputTipo"];
$comentario = $_POST["inputComentario"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opinião sobre o site</title>
</head>
<body>
    <h1>Opinião do usuário</h1>
    <h2>Nota dada pelo usuário: <?=$nota?> </h2>
    <h2>Tipo mais locado: <?=$tipo?> </h2>
    <h2>Comentários do usuário:</h2>
    <p><?=$comentario?></p>
</body>
</html>
