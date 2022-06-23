<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Página 1">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Página 1</title>
</head>
<body>
    <?php
        $link = "Segunda Página";
        // PHP transforma o valor atribuído ao "get" em um variável "super global" -> Disponível em todo o servidor.


    ?>
    <p>Link: <a href="page2.php?id=1"><!--Usando "?" é possível atribuir valores após a URL--><?php echo $link;?></a>.</p> <!-- Modelo em HTML -->
    

</body>
</html>