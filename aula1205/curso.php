<?php
class Curso {
    var $CodigoCurso;
    var $NomeCurso;
    var $QuantidadeHoras;
    var $ValorCurso;
 
    function cadastrar_Curso ($_CodigoCurso, $_NomeCurso, $_QuantidadeHoras, $_ValorCurso){
        $this->CodigoCurso = $_CodigoCurso;
        $this->NomeCurso = $_NomeCurso;
        $this->QuantidadeHoras = $_QuantidadeHoras;
        $this->ValorCurso = $_ValorCurso; 
    }
     function apresentar_Curso (){
         echo "Informações dos Cursos disponiveis: \n";
         echo "O Código do Curso: " . $this->CodigoCurso . "\n";
         echo "O Nome do Curso: " . $this->NomeCurso . "\n" ;
         echo "A Quantidade de Horas do Curso: " . $this->QuantidadeHoras . "\n" ;
         echo "O Valor do Curso: " . $this->ValorCurso ;
     }
 
}