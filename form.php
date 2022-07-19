<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Formulário</title>
</head>
<body>
    <!--CRIAÇÃO DE FORMULÁRIOS PHP-->
    <form action="action.php" method="post"> <!--action recebe o nome do arquivo externo - que será executado para lidar com os dados após o envio do formulário-->
        Usuário: <input type="text" name="user" value="" /> <!--Tipo de elementos associados à variável; nome da variável (índice do array post); valores atribuídos à variável-->
        <br />
        Senha: <input type="password" name="password" value="" />
        <br />
        <input type="submit" name="submit" value="Enviar" /> <!--O valor neste caso é oq ficará escrito dentro do botão-->
    </form> 

</body>
</html>