<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis</title>
</head>
<body>
    <?php
        $nome = 'Gustavo';
        $sobrenome = 'Laperriere';
        $completo = $nome. " ". $sobrenome;
        // "." significa concatenação, portanto para atribuir um valor de variável com uma concatenção é possível usar ".="
        $numero = 28;
        $soma = $numero + 2;
        echo $completo, " - ", $soma;
        echo "<br />";
        echo " Meu nome é $nome $sobrenome.";
        echo "<br />";
        echo strlen($completo), " caracteres: ", strtolower($completo);
        echo "<br />";
        echo "A". trim(" B C D "). "E"; //retira os espaços do início e fim.
        echo "<br />";
        echo str_replace("Gustavo", "Centavo", $nome); //substitui o primeiro valor pelo segundo na variável definida
        echo "<br />";
        echo strpos($completo, " "); //informa a posição (inicia no 0)
        $float = 3.32;
        echo "<br />";
        echo round($float, 1); // 2° parâmetro diz quantas casas depois da vírgula serão mostradas.
        // ceil (arredonda para cima); floor (arredonda para baixo);
        echo "___", is_float($float), is_int($float); // False (0) é interpretado como vazio.
        
        
        // array (tuplas - valores fixos; porém podem receber indices específicos [assim como bibliotecas]) = arranjo ordenado e indexado de objetos.
        $contas = array('janeiro' => 'conta de água', 'fevereiro' => 'conta de luz', 'março' => 'conta de telefone');
        echo "<br />";
        echo $contas['fevereiro']; //usa-se couchetes ao invés de parênteses.
        $contas2 = array('conta de água', 'conta de luz', 'conta de telefone', ['conta de gás', 'conta de internet']); // pode ser definida apenas colocando entre "[]", assim como as túplas.
        echo '-', $contas2[3][1]; // inicia no "0".
        $contas2[] = 'conta de celular'; // pode ser declarado o índice, caso contrário é atribuído na última posição.
        echo '-', $contas2[4];
        $contas2[0] = 'conta_de_água';
        unset($contas2[0]); // deletar uma variável (caso não seja definido um índice a variável é apagada)

        echo "<pre>";
        print_r($contas2);
        echo "</pre>";

        $numeros = [10, 20, 30, 40, 50];
        print_r($numeros);
        echo "<br />";
        echo "A variável tem ". count($numeros). " elementos.";
        echo "<br />O maior valor é ". max($numeros);
        echo "<br />";
        rsort($numeros); // ordenar de forma decrescente.
        print_r($numeros);

        $string = implode(" ", $numeros); // primeiro parâmetro é oque separa os elementos;
        echo "<br />". $string;
        $novo_array = explode(" ", $string);
        echo "<br />";
        print_r($novo_array);
        echo "<br />". in_array(40, $novo_array); // buscar por elemento dentro do array.
        // ler a documentação do PHP, principalmente sobre "array".
        
        // constantes.
        define("CONSTANTE", 50);
        echo "<br />". "constante: ". CONSTANTE;


    ?>
</body>
</html>