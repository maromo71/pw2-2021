<?php
    //Importar o arquivo que contém a classe
    include_once "aluno.php";
    

    //Declarar uma variável objeto. Ou seja, um Aluno (novo)
    $aluno = new Aluno;

    //Tratar os dados que vem do formulário
    if( $_POST["inputRM"]=="" || 
        $_POST["inputNome"]=="" ||
        $_POST["inputDisciplina"]=="" ||
        $_POST["selectConceito"]=="") {
            echo "<h2>Erro</h2>";
            echo "<h3>Favor preencher todos o campos</h3>";
            echo "<a href='formCadastrar.php'>Voltar</a>";
            exit(1); //força a saída
    }

    //Cadastrar o aluno
    $aluno->cadastrar_aluno($_POST["inputRM"], 
        $_POST["inputNome"], 
        $_POST["inputDisciplina"], 
        $_POST["selectConceito"]);
    
    //Mostrar na Tela o Conceito Deste Aluno
    echo "<h3>Conceito do Aluno: " . $aluno->mostrar_conceito() . "</h3>";

    echo "<p></p>";
    echo "<h4>Resultado</h4>";

    echo $aluno->mostrar_dados_do_aluno();