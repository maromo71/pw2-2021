<?php
class Opiniao {
    //Atributos
    var $opiniaoUsuario;
    var $produto;
    var $comentario;

    //Métodos
    function cadastrar_opiniao($opiniaoUsuario, $produto, $comentario){
        $this->opiniaoUsuario = $opiniaoUsuario;
        $this->produto = $produto;
        $this->comentario = $comentario;
        echo "<h2>Cadastro efetuado com sucesso. </h2>";
    }

    function listar_opiniao(){
        $texto = "<h2>Opinião Cadastrada foi </h2><br>";
        $texto .= "<strong>Opinião:</strong> $this->opiniaoUsuario <br>";
        $texto .= "<strong>Produto que mais consome:</strong> $this->produto <br>";
        $texto .= "<strong>Comentários do usuário:</strong>" . htmlspecialchars($this->comentario) . "<br>";
        return $texto;    
    }

}