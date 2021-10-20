<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <?php
        require './Cliente.php';
        require './ClientePessoaFisica.php';
        require './ClientePessoaJuridica.php';
        
        $cliente = new Cliente();
        $cliente->setEndereco('Av. Republica Argentina');
        $cliente->setBairro('Novo Mundo');
        echo $cliente->verEndereco();
        
        $clientePf = new ClientePessoaFisica();
        $clientePf->setCpf(54625487598);
        $clientePf->setNome('Cesar');
        $clientePf->setEndereco('Av. Republica Argentina');
        $clientePf->setBairro('Novo Mundo');
        echo $clientePf->verEndereco();
        
        $clientePj = new ClientePessoaJuridica();
        $clientePj->setCnpj('00.000.000/0000-00');
        $clientePj->setNomeFantasia('Celke');
        $clientePj->setEndereco('Av. Republica Argentina');
        $clientePj->setBairro('Novo Mundo');
        echo $clientePj->verEndereco();
        ?>
    </body>
</html>
