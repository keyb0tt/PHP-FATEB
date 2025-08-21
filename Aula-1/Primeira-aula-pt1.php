<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>

<body>
    <div>
        <h1>Aula de PHP</h1>
    </div>
</body>

</html>

<?php
echo " Comentário Tipo 1: #" . "<br>"; #comentário com hashtag
echo " Comentário Tipo 2: //" . "<br>"; //comentário com barra dupla
echo " Comentário Tipo 3: /* (comentário com fechamento) " . "<br>"; /*comentário com barra invertida*/

//Declaração, atribuição e utilização de variável
$nome = " Kaique Bosco "; //Declaração de variável com cifrão ($)
echo "Boa noite " . $nome . "<br>";//Para colocar tag html no texto, utiliza-se aspas duplas (") depois de outra concatenação
$nome = 10; //Outra atribuição substitui o valor original
echo $nome . "<br>";
echo "Boa noite " . $nome . "<br>"; //Concatena com ponto (.) atrás da variável

//Soma de variáveis
$num1 = 10;
$num2 = 20;
echo $num1 + $num2 . "<br>";

//No PHP, o valor numérico é interpretado mesmo em forma de string, mas não se deve utilizar desta maneira
$num1string = "10";
$num2string = "10";
echo $num1string + $num2string . "<br>";

//Uma variável pode conter um valor inteiro com atribuições que sigam as seguintes sintaxes:
$php = 1234; //inteiro positivo na base decimal
$php = -234; //inteiro negativo na base decimal
$php = 0234; //inteiro na base octal-simbolizado pelo 0 equivale a 156 decimal
$php = 0x34; //inteiro na base hexadecimal(simbolizado # pelo 0x) - equivale a 52 decimal.

//Números em Ponto flutuante (double ou float)
//Uma variável pode ter um valor em ponto flutuante com atribuições que sigam as seguintes sintaxes:
$php = 1.234;
$php = 23e4; # equivale a 230.000

// Strings podem ser atribuídas de duas maneiras:
// utilizando aspas simples ( ' ) - Desta maneira, o valor da variável será exatamente o texto contido entre as aspas (com exceção de \\ e \' - ver tabela abaixo)
// utilizando aspas duplas ( " ) - Desta maneira, qualquer variável ou caractere de escape será expandido antes de ser atribuído.

// Exemplo:
$teste1 = "Brasil";
$php1 = '---$teste--\n';
echo "$php1" . "<br>";
// A saída desse script será "---$teste--\n".

$teste2 = "Brasil";
$php2 = "---$teste2---\n";
echo "$php2";
// A saída desse script será "---Brasil--" (com uma quebra de linha no final).

?>