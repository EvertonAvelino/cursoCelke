<!DOCTYPE html>

<html>
    <head>
        <meta charset="windows-1252">
        <title>Conexao Banco de dados</title>
    </head>
    <body>
        <?php
        require './Conn.php';
        $conn = new Conn();
        $conn->getConn();
        
        exit(var_dump($conn));
        ?>
    </body>
</html>
