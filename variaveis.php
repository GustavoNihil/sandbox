<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Aprendendo PHP">
    <meta name="author" content="Gustavo Monteiro Laperriere">

    <title>Estudos PHP</title>
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

        // null e empty.
        $varN1 = NULL;
        $varN2 = "0";
        echo "<br />". is_null($varN1);
        echo empty($varN2); // empty é uma função que interpreta o null, 0 e "" como valores vazios.
        
        $foo = "0";
        echo "<br />". gettype($foo); //string
        $foo += 2;
        echo "<br />". gettype($foo); //inteiro
        $foo = $foo + 2.5;
        echo "<br />". gettype($foo); //float
        $foo = 5 + "10 carros";
        echo $foo. "-". gettype($foo);
        settype($foo, "string");
        echo "=>". gettype($foo). "-". $foo. gettype((integer) $foo); // ao declarar da última forma o valor é atribuído somente naquela linha.


        // if e else
        $idade = 30;
        if ($idade < 30) { // chave não é obrigatória, mas ajuda a organizar o código.
            echo "Você é jovem.";
        }
        elseif ($idade = 30) {
            echo "Você tem 30 anos.";
        }
        else {
            echo "Você é velho.";
        }

        // Operador "diferente" => "<>". Operador "não igual" => "!=".
        $x = 10;
        $y = 20;
        $z = 30;
        $n = 40;
        if(($x < $y) && ($z < $n)) {
            echo "X é menor que Y E Z é menor que N.";
            echo "<br />";
        }
        if(($x < $y) || ($z < $n)) {
            echo "X é menor que Y OU Z é menor que N.";
        }
        if(!isset($usuario)) { // "!" => negação.
            $usuario = "Gustavinho";
        }

        // switch.
        $contato = 'celular';

        switch ($contato) {
            case 'celular': // para ambos os casos o resultado na tela é o mesmo.
            case 'telefone':
                echo "<br />". "Contato via telefone.";
                break;
            case 'e-mail':
                echo "<br />". "Contato via e-mail.";
                break;
            default: // é o código executado caso nenhum dos casos acima for verdadeiro.
                echo "<br />". "Contato não definido.";
                break;
        }

        // while.
        $i = 0;

        while ($i <= 100) {
            echo $i. " ";
            $i += 1;
        }

        // for.
        for ($i = 0; $i <= 100; $i++)
            echo $i. " ";
        
        // foreach.
        $numeros2 = [1,2,3,4,5,6,7,8,9];
        echo "<br />";

        foreach ($numeros2 as $numero2) {
            echo "Número atual: ". $numero2;
            echo "<br />";
        }
        $meses = ["1" => "Janeiro",
        "2" => "Fevereiro",
        "3" => "Março",
        "4" => "Abril",
        "5" => "Maio",
        "6" => "Junho",
        "7" => "Julho",
        "8" => "Agosto",
        "9" => "Setembro",
        "10" => "Outubro",
        "11" => "Novembro",
        "12" => "Dezembro"];

        foreach ($meses as $numero => $mes) {
            echo "Mês $numero é $mes.";
            echo "<br />";
        }

        // break e continue.
        for ($i=0; $i<=10; $i++) {
            if ($i == 5) {
                continue; // pula para o próximo elemento. (break funciona da mesma forma q no Python.)
            }
            echo $i. " ";
        }

        // funções.

        function chamar_atencao($vitima) {
            echo "<br />". "Ei, $vitima, ATENÇÃO.";
        }

        chamar_atencao("Gustavo");
        chamar_atencao("André");

        function viajar($pessoa, $destino, $data) { // multiplos argumentos. (pode ser passado um argumento NULL)
            echo "<br />";
            echo "$pessoa vai viajar para $destino no dia $data.";
        }

        $d2345678 = "08/03/2023";
        viajar("Gustavo", "São Thomé das Letras", $d2345678);

        function soma($valor1, $valor2) {
            $resultado = $valor1 + $valor2;
            return $resultado; // return.
        }

        $total = soma(11,13);
        echo "<br />". $total;

        // Escopo de variáveis.

        $escopo = "global";

        function mudar_escopo() {
            global $escopo; // uma variável atribuída dentro de uma função tem valor "local". Portanto é necessário atribuir um valor "global" para usa-la no restante do código.
            $escopo = "local";
        }

        echo "<br />";
        echo $escopo;
        echo "<br />";
        mudar_escopo();
        echo $escopo;

        // Argumentos padrões.

        function criar_usuario($usuario="anônimo", $senha="1234") { // valores atribuídos aos argumentos caso sejam omitidos.
            // código de criação do usuário...
            return "Usuário: {$usuario} e Senha: {$senha} definidos com sucesso.";
        }

        echo "<br />". criar_usuario("Andrezinho", "jooj123");
        echo "<br />". criar_usuario();
        
        // debug.

        echo "<br />";
        var_dump($escopo); // assim como o "gettype", mostra o tipo de variável, e o valor contido.
        echo "<br />";

        echo "<pre>"; // pré-formatado. Conserva a estrutura, espaços e fonte.
        print_r(get_defined_vars()); // mostra todas as variáveis do código.
        echo "</pre>";

        echo "<br />";

        function ola($pessoa, $scr777=NULL) {
            echo "Olá {$pessoa}{$scr777}.";
            echo "<br />";
            var_dump(debug_backtrace()); // "traço de volta".
        }

        ola("Jorginho", ", Antônio"); // caso não seja atribuído o segundo valor, o array recebe valor nulo, portanto é tratado como se existisse apenas uma variável.



    ?>
</body>
</html>