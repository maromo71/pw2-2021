<?php
    require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login do Sistema</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="jumbotron">
            <h1 class="display-3">Login</h1>
        </div>
    </div>
    <div class="container">
        <h2>Inicie o sistema</h2>
    </div>
    <div class="container">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="home.php" method="post">
                <div class="form-group">
                  <label for="user">Usuário</label>
                  <input type="text" class="form-control" name="user" id="user">
                </div>
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" name="password" id="password">
                </div>
                <hr>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Logar</button>
                </div>
                
            </form>
        </div>
        <div class="col-4"></div>
    </div>
    
</body>
</html>