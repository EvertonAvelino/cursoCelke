<?php

/**
 * Description of Nota
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Nota {
    public $Aluno;
    public $Prova;
    public $Trabalho;
    public $Disciplina;
    //public $Nota;
    
    function setProva($Prova) {
        $this->Prova = $Prova;
    }

    function setTrabalho($Trabalho) {
        $this->Trabalho = $Trabalho;
    }

    function setDisciplina($Disciplina) {
        $this->Disciplina = $Disciplina;
    }

        
    function setNota($Aluno, $Disciplina, $Prova, $Trabalho){
        $this->Aluno = $Aluno;
        $this->Disciplina = $Disciplina;
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
    }
       
    function getNota(){
        return "Nome do aluno: {$this->Aluno}<br> Disciplina: {$this->Disciplina}<br> Nota: " .($this->Prova +  $this->Trabalho) . "<br><hr>";
    }
    
}
