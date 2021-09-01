<?php
    //Aqui farei os tratamentos do login
    require_once 'config.php';
    if (isset($_POST['user'])){
        $_SESSION["usuario"] = $_POST['user'];
        $_SESSION["senha"] = $_POST['password'];
    }
    
   
    if(!($_SESSION["usuario"]=="admin" && $_SESSION["senha"]=="123")){
        header('Location: error.php');    
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Página Principal</title>
</head>
<body>
    <div class="container">
        <h1>Usuário Logado: <?=$_SESSION["usuario"]?></h1>
        <p>Aqui a vitrine da loja</p>
    </div>
    <a href="destroy.php">Efetuar Logoff</a>
</body>
</html>