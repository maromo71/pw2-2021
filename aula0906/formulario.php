<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Cliente</title>
</head>
<body>
    <h1>Formulário de Cliente</h1>

    <form action="recebe.php" method="post">
    
    <label for="inputUsuario">Usuário</label>
    <input type="text" 
        name="inputUsuario" 
        id="inputUsuario" 
        size="50" maxlength="50" require >
    <br>

    <label for="inputSenha">Senha</label>
    <input type="password" 
        name="inputSenha" 
        id="inputSenha" 
        size="20" maxlength="20" require >
    <br>

    <label for="inputNome">Nome</label>
    <input type="text" 
        name="inputNome" 
        id="inputNome" 
        size="50" maxlength="50" >
    <br>

    <label for="inputEmail">Email</label>
    <input type="email" 
        name="inputEmail" 
        id="inputEmail" 
        size="70" maxlength="70" >
    <br>

    <label for="inputCidade">Cidade</label>
    <input type="text" 
        name="inputCidade" 
        id="inputCidade" 
        size="50" maxlength="50" require >
    <br>

    <label for="inputEstado">Estado</label>
    <input type="text" 
        name="inputEstado" 
        id="inputEstado"
        size="2" maxlength="2" require>
    <br>
    <input type="submit" value="Enviar">
    </form>
</body>
</html>