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
        Insira o valor da sua compra em reais: <input type="number" name="valorCompra"><br>
        Insira o valor pago em reais: <input type="number" name="valorPago"><br><br>
        <input type="submit" value="Enviar"><br>
    </form>

    <?php
        if(isset($_POST["valorCompra"]) && isset($_POST["valorPago"])){
            $valorCompra = $_POST["valorCompra"];
            $valorPago = $_POST["valorPago"];
            $troco = $valorPago - $valorCompra;

            echo "<br> No caso da sua compra ser R$". number_format($valorCompra, 2, ",", "."). 
            " e o valor pago ter sido R$". number_format($valorPago, 2, ",", "."). ", você irá receber R$".
            number_format($troco, 2, ",", "."). " de troco<br>";

            if($troco > 0){
                echo "Notas necessárias para o troco:<br>";
                
                $notas10 = floor($troco / 10);
                if($notas10 > 0){
                    echo "$notas10 nota(s) de R$10,00<br>";
                }
                
                $notas5 = floor($troco / 5);
                if($notas5 > 0){
                    echo "$notas5 nota(s) de R$5,00<br>";
                }
                
                $notas2 = floor($troco / 2);
                if($notas2 > 0){
                    echo "$notas2 nota(s) de R$2,00<br>";
                }
                
                $moedas1 = floor($troco / 1);
                if($moedas1 > 0){
                    echo "$moedas1 moeda(s) de R$1,00<br>";
                }
                
            } elseif($troco < 0) {
                echo "Valor pago é insuficiente! Faltam R$". number_format(abs($troco), 2, ",", "."). " para completar o pagamento.";
            } else {
                echo "Não há troco a ser devolvido.";
            }
        } else {
            echo "<br> Aguardando envio...";
        }
    ?>
</body>
</html>