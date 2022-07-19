<?php
    require_once("validation.php");

    $erros = array();

    if(isset($_POST["submit"])) { // só executa o código se o formulário tiver sido enviado.

        $username = $_POST["username"];
        $password = $_POST["password"];

        foreach($_POST as $key => $field) {
            if(empty_value($field)) {
                $erros[$key] = $key. " invalid.";
            }
        }

        /* if(empty(trim($username)) && ($username != 0)) { // trim() retira os espaços no início e no fim.
            $erros["username"] = "Usuário inválido.";
        } */
        
        if(strlen($password) < 4) {
            $erros["curto"] = "Senha muito curta (mínimo de 4 caracteres).";
        }

        if(strlen($username) > 20) {
            $erros["longo"] = "Nome de usuário muito grande: ". strlen($username). " caracteres (máximo de 20).";
        }

        if(preg_match("/@/", $username)) { // comparação de se o campo de usuário possui um e-mail.
            $erros["email"] = "Confira se não foi inserido um e-mail no campo usuário.";
        }
        /*
        echo "<pre>";
        echo "Nome de usuário: ". $username;
        echo "<br />" . "Senha: ". $password;
        echo "</pre>";
        */
    } else {
        $erros["message"] = "Por favor efetue o login.";
        $username = "";
    }
    /* VALIDAÇÃO DE FORMULÁRIO:
    - validar presença: isset() - Informa se a variável foi iniciada.
    - informa se a variável está vazia: empty() - "0" retorna um valor TRUE.
    - tamanho da string: strlen() - definir um tamanho mínimo para o user ou password.
    - tipo da variável: is_string(); is_number()...
    -*** expressão regular: preg_match("/PATTERN/", $target) - Efetua comparação.
    */
?>
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
    <p><?php
        foreach($erros as $key => $erro) {
            echo "<br />";
            echo $erro;
        }
    ?></p>
    <!--CRIAÇÃO DE FORMULÁRIOS PHP-->
    <form action="form2.php" method="post"> <!--action recebe o nome do arquivo externo - que será executado para lidar com os dados após o envio do formulário-->
        Usuário: <input type="text" name="username" value="<?php echo $username; ?>" /> <!--Tipo de elementos associados à variável; nome da variável (índice do array post); valores atribuídos à variável-->
        <br />
        Senha: <input type="password" name="password" value="" />
        <br />
        <input type="submit" name="submit" value="Enviar" /> <!--O valor neste caso é oq ficará escrito dentro do botão-->
    </form> 

</body>
</html>