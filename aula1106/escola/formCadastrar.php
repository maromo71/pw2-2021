<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Aluno</title>
</head>
<body>
    <h1>Cadastro Aluno</h1>  
    <form action="recebeDados.php" method="post">
        <p>
            <label for="inputRM">RM do Aluno:</label><br>
            <input type="text" name="inputRM" id="inputRM">
        </p>

        <p>
            <label for="inputNome">Nome do Aluno:</label><br>
            <input type="text" name="inputNome" id="inputNome">
        </p>

        <p>
            <label for="inputDisciplina">Nome da Disciplina:</label><br>
            <input type="text" name="inputDisciplina" id="inputDisciplina">
        </p>

        <p>
            <label for="selectConceito">Conceito Final:</label><br>
            <select name="selectConceito" id="selectConceito" >
                <option value="I">Insatisfatório</option>
                <option value="R">Regular</option>
                <option value="B">BOM</option>
                <option value="MB">Muito Bom</option>
            </select>
        </p>

        <input type="submit" value="Enviar">
        <input type="reset" value="Limpar">

    </form>  
</body>
</html>