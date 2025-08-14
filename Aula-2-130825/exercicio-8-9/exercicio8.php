<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de troco</title>
</head>
<body>
    <h1>Calculadora de troco</h1>
    <form method="post">
        Insira o valor da sua compra em reais: <input type="number" name="valorCompra" step="0.1"><br>
        Insira o valor pago em reais: <input type="number" name="valorPago" step="0.1"><br><br>
        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        if(isset($_POST["valorCompra"]) && isset($_POST["valorPago"])){
            $valorCompra = $_POST["valorCompra"];
            $valorPago = $_POST["valorPago"];

            echo "<br> No caso da sua compra ser R$". number_format($valorCompra, 2, ",", "."). 
            " e o valor pago ter sido R$". number_format($valorPago, 2, ",", "."). ", você irá receber R$".
            number_format($valorPago - $valorCompra, 2, ",", "."). " de troco";
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>