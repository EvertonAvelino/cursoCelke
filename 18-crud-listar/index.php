<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Celke</title>
    </head>
    <body>
        <h1>Listar usuário</h1>
        <?php
        require './Conn.php';
        
        $nome = "Everton";
        $conn = new Conn();
        //$result_user = "SELECT * FROM usuarios WHERE nome = :nome";
        $result_user = "SELECT * FROM usuarios";
        
        $resultado_user = $conn->getConn()->prepare($result_user);
        $resultado_user->bindParam(':nome', $nome, PDO::PARAM_STR);
        $resultado_user->execute();
        
        while($row_user = $resultado_user->fetch(PDO::FETCH_ASSOC)):
            echo "ID: " . $row_user['id'] . "<br>";
            echo "Nome: " . $row_user['nome'] . "<br>";
            echo "E-mail: " . $row_user['email'] . "<br>";
            echo "Usuario: " . $row_user['usuario'] . "<br>";
            echo "Inserido: " . date('d/m/Y H:i:s', strtotime($row_user['created'])) . "<br>";
            if(!empty($row_user['modified'])):
                echo "Alterado: " . date('d/m/Y H:i:s', strtotime($row_user['modified'])) . "<br>";
            endif;
            echo "<hr>";
        endwhile;
        ?>
    </body>
</html>
