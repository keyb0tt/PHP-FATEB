<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de consumo de gasolina</title>
</head>
<body>
    <form method="post">
        <h1>Calculadora de gasto de gasolina em reais</h1>
        Insira (em km) a distância a ser percorrida: <input type="number" name="distancia"><br>
        Insira o valor do litro de gasolina: <input type="number" name="gasolinaValor"><br>
        <input type="submit" value="Enviar"><br><br>

        <?php   
            if(isset($_POST["distancia"]) && isset($_POST["gasolinaValor"])){
                $distancia = $_POST["distancia"];
                $gasolinaValor = $_POST["gasolinaValor"];

                echo "O valor a ser gasto com combustível em uma viagem de $distancia km será de: R$". number_format((($distancia / 12) * $gasolinaValor),2, ",", ",");
            }
        ?>
    </form>
</body>
</html>