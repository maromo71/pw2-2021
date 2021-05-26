<?php
//modelando a nossa classe aluno
class Aluno {
    //atributos da classe
    var $rm;
    var $nome;
    var $idade;

    //métodos da classe
    function inicializar_aluno($_rm, $_nome, $_idade){
        $this->rm = $_rm;
        $this->nome = $_nome;
        $this->idade = $_idade;    
    }

    function apresentar_aluno(){
        echo "\nAluno matriculado na ETEC, Dados: \n";
        echo "RM do Aluno: " . $this->rm . "\n";
        echo "Nome: " . $this->nome . "\n";
        echo "Idade do Aluno: " . $this->idade . "\n";
        echo "Matriculado no ETIM \n";
        echo "=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-\n";
    }
}