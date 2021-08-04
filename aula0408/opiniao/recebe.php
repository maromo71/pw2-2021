<?php
    //Incluir o arquivo que contém a classe opinião
    include_once "opiniao.php";

    //instanciar uma nova opiniao (reservar memória para colocar os dados)
    $opiniao = new Opiniao;

    //Tratar os dados que vem do formulário
    if( $_POST["inputOpiniao"]=="" || 
        $_POST["inputProduto"]=="" ||
        $_POST["inputComentario"]=="") {
            echo "<h2>Erro</h2>";
            echo "<h3>Favor preencher todos o campos</h3>";
            echo "<a href='index.php'>Voltar</a>";
            exit(1); //força a saída
    }

    $opiniao->cadastrar_opiniao($_POST["inputOpiniao"], 
        $_POST["inputProduto"],
        $_POST["inputComentario"]);

    
    echo $opiniao->listar_opiniao();
