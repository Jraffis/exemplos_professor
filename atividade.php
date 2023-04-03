<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade</title>
    </head>
    <body>
        <?php
            for($numero=0; $numero<=100; $numero++){
                if($numero % 2 == 1){
                    echo $numero . "<br>";
                }
            }
        ?>
    </body>
</html>