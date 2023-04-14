<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>GET</title>
    </head>
    <body>

        <form action="exemplo_get.php" method="get">
            Nome: <input type="text" name="nome"><br>
            Email: <input type="text" name="email"><br>
            <input type="submit">
        </form>

        <?php
        if (isset($_GET['nome']) && isset($_GET['email'])) {
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo "Olá, $nome! Seu endereço de email é $email.";
        }
        ?>
        
    </body>
</html>