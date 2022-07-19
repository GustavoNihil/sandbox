<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Template</title>
</head>
<body>
    <pre>
        <?php 
        /*print_r($_POST);*/ // mostra o array POST com os índices de variável "user", "password" e "submit", com seus respectivos valores atribuídos
        
        if(isset($_POST["submit"])) { // só executa o código se o formulário tiver sido enviado.

            if(isset($_POST["user"])) {
                $username = $_POST["user"];
            }
            else {
                $username = "Anônimo";
            }
            if(isset($_POST["password"])) {
                $password = $_POST["password"];
            }
        }
        ?>
    </pre>
    <br />
    <?php 
    
    if(isset($password) && isset($password)) {
        echo "Nome de usuário: ". $username;
        echo "<br />" . "Senha: ". $password;
    }
    ?>
    
</body>
</html>