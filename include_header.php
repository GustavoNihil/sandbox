<?php ob_start(); // ob_star deve estar na primeira linha de código ?>
<?php
    function redirect($location) {
        header("Location: " . $location); // Ao abrir a url da modularização o navegador redireciona para a página descrita.
        exit; // faz com q não execute o restante do código.
        // controle da saída de buffer. (Memória intermediária entre o código e o servidor. Permite que o header seja executado posteriormente)
    }

    redirect("Estudos_PHP.php");
    
    // criação de formulários. $_POST (superglobal) - forma de mandar informações sigilosas, diferente das enviadas por $_GET que ficam armazenadas na URL
    // script em "form.php".
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Gustavo Monteiro Laperriere">
    <title>Include</title>
</head>
<?php ob_end_flush(); // marcação de até que parte do código deve ser processado antes do re-direcionamento ?>


