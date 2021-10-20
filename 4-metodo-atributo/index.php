<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke - Metodos e Atributos</title>
    </head>
    <body>
        <?php
        require './Usuario.php';
        $usuario = new Usuario();
        $usuario->setUsuario("Cesar Szpak", "cesar@celke.com.br");
        
        echo $usuario->getUsuario();
        
        $usuario->setNota(5, 2);
        echo $usuario->getNota();
        echo "<hr>";
        ?>
    </body>
</html>
