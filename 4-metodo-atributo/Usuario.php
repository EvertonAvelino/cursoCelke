<?php

/**
 * Description of Usuario
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class Usuario {
    public $Nome;
    public $Email;
    public $Prova;
    public $Trabalho;
    public $Nota;
            
    function setUsuario($Nome, $Email){
        $this->Nome = $Nome;
        $this->Email = $Email;
    }
    
    function getUsuario(){
        return "Nome do aluno: {$this->Nome}<br> E-mail: {$this->Email}<br>";
    }
    
    function setNota($Prova, $Trabalho){
        $this->Prova = $Prova;
        $this->Trabalho = $Trabalho;
        $this->Nota = $this->Prova + $this->Trabalho;
    }
    
    function getNota(){
        return "Nota: " .$this->Nota;
    }
}
