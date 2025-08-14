<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo do gasto para pintura</title>
</head>
<body>
    <h1>Cálculadora de valor de pintura</h1><br>
    <form method="post">
        Insira a altura do muro (em cm): <input type="number" name="altura"><br>
        Insira o comprimento do muro (em cm): <input type="number" name="comprimento"><br><br>
        Insira o valor da lata de tinta (em reais): <input type="number" name="valorLata"><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["altura"]) && $_POST["comprimento"]){
            $altura = $_POST["altura"];
            $comprimento = $_POST["comprimento"];
            $valorLata = $_POST["valorLata"];
    
            $metroQuadrado = ($altura * $comprimento) / 10000;
            $litros = $metroQuadrado / 3;
            
            echo "<br> Você gastará R$". number_format(($litros * ($valorLata / 3)), 2, ",", ","). 
            " para pintar $metroQuadrado m² de uma parede usando ". number_format(($litros), 2, ",", ",").
            " litros de tinta.";
            
            if($litros <= 4) {
                echo "<br> Porém como cada lata possui 4 litros, você irá gastar R$40,00 para pintar sua parede";
            } else {
                $latas = ceil($litros / 4);
                echo "<br> Porém como cada lata possui 4 litros, você irá comprar $latas latas para pintar sua parede, gastando R$". 
                number_format(($latas * $valorLata), 2, ",", ",");
            }
        } else {
            echo "<br> Aguardando envio...";
        }

    ?>
</body>
</html>