<?php
//nome da classe, primeira letra Maiúscula.
class Aluno {
    //Atributos da classe
    var $rm;
    var $nome;
    var $disciplina;
    var $conceito;

    //Métodos - funcionalidades de um objeto do tipo aluno
    function cadastrar_aluno($rm, $nome, $disciplina, $conceito){
        $this->rm = $rm;
        $this->nome = $nome;
        $this->disciplina = $disciplina;
        $this->conceito = $conceito; 
        echo "<p>Aluno $this->nome cadastrado com sucesso</p>";
    }

    function mostrar_conceito(){
        if($this->conceito == "I"){
            return "Insatisfatório";
        }
        if($this->conceito == "R"){
            return "Resgular";
        }
        if($this->conceito == "B"){
            return "Bom";
        }
        if($this->conceito == "MB"){
            return "Muito Bom";
        }
    }

    function mostrar_dados_do_aluno() {
        $texto = "Dados do aluno cadastrado <br>";
        $texto .= "RM do aluno: $this->rm <br>";
        $texto .= "Nome do aluno: $this->nome <br>";
        $texto .= "Disciplina do aluno: $this->disciplina <br>";
        $texto .= "Conceito do aluno: $this->conceito <br>";
        return $texto;
    }
}