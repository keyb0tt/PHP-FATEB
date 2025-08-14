<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor por número de dias</title>
</head>
<body>
    <h1>Conversor por número de dias</h1>
    <form method="post">
        Insira um número de dias: <input type="number" name="dias">
        <input type="submit" value="Enviar">
    </form>

    <?php

        if(isset($_POST["dias"])){
            $dias = $_POST["dias"];
            
            echo "$dias dias resultam em:". "<br>". number_format(($dias / 7),  0,",", ","). 
            " semanas, ". number_format(($dias / 30), 0, ",", ","). " meses e ". 
            number_format(($dias / 365), 2, ",", ","). " anos";
        } else {
            echo "aguardando envio...";
        }
    ?>
</body>
</html>