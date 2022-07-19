<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página 2">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Página 2</title>
</head>
<body>
    <?php
        // por questões de segurança o GET é utilizado apenas para informações públicas.
        print_r($_GET); // "&" para fazer mais atribuições ao array.
        $id = $_GET["id"]; // variável $id está recebendo o valor de "id" do array da URL.
        $name = $_GET["name"];
        echo "<br />". $id;
        echo "<br />". $name;
    ?>
    <p>Bem vindo à Segunda Página.
    
</body>
</html>