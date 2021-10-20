<?php

/**
 * Descricao de ClientePessoaJuridica.class
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class ClientePessoaJuridica extends Cliente {

    public $Cnpj;
    public $NomeFantasia;

    function setCnpj($Cnpj) {
        $this->Cnpj = $Cnpj;
    }

    function setNomeFantasia($NomeFantasia) {
        $this->NomeFantasia = $NomeFantasia;
    }

    function verEndereco() {
        return "<p>Endereço pessoa Juridica. <br> Endereço: {$this->Endereco}<br> Bairro: {$this->Bairro} <br> Nome Fantasia: {$this->NomeFantasia} <br> CNPJ: {$this->Cnpj} </p>";
    }

}
