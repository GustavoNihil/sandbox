<?php
    // dados de cockies são facilmente acessados, portanto deve haver cuidado com os dados sigilosos do sistema. - é possível criptografar cockies.
    $name = "id";
    $value = 55;
    $expire = time() + (60*60*24*7*4*24); //pega o momento atual do computador do usuário e soma a quantidade de segundos para expirar (nesse caso 2 anos).
    
    setcookie($name, $value, $expire);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Cockies">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Cockies</title>
</head>
<body>
    
</body>
<!-- dá para usar "\n" no lugar de "<br />" para quebrar linha --> 
</html>