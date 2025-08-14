<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra por parcelas</title>
</head>
<body>
    <h1>Calculadora de compra por parcelas</h1><br>
    <form method="post">
        Insira o valor da sua compra em reais: <input type="number" name="valorCompra"><br>
        Insira o número de parcelas da sua compra: <input type="number" name="numeroParcelas"><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["valorCompra"]) && isset($_POST["numeroParcelas"])){
            $valorCompra = $_POST["valorCompra"];
            $numeroParcelas = $_POST["numeroParcelas"];

            echo "<br> Em uma compra de R$$valorCompra, ". "você irá pagar $numeroParcelas parcelas de R$". number_format(($valorCompra / $numeroParcelas), 2, ",", ".");
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>