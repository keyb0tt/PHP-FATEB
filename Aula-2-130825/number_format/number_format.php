<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de área do triângulo</title>
</head>
<body>
    <h1>Calculádora de Área do triângulo</h1>
    <form method="post">
        Insira a base do triângulo em cm: <input type="number" name="base"><br>
        Insira a altura do triângulo em cm: <input type="number" name="altura"><br><br>
        <input type="submit" value="Enviar">
    </form>

        <?php
            if(isset($_POST["base"]) && isset($_POST["altura"])){
                $base = $_POST["base"];
                $altura = $_POST["altura"];

                $area = ($base * $altura ) /2;

                echo "<br> A área do seu triângulo é: ". number_format($area, 1, ',', '.'), " cm";
            } else {
                echo "<br>Aguardando confirmação...";
            }
        ?>
</body>
</html>