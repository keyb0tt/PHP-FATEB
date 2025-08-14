<!DOCTY html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor por número de dias</title>
</head>
<body>
    <h1>Conversor por número de anos</h1>
    <form method="post">
        Insira o número de anos: <input type="number" name="anos">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if(isset($_POST["anos"])){
            $anos = $_POST["anos"];
            
            echo "$anos anos resultam em:". "<br>". number_format(($anos * 12),  0,",", ","). 
            " meses, ". number_format(($anos * 52), 0, ",", ","). " semanas e ". 
            number_format(($anos * 365), 0, ",", ","). " dias";
        } else {
            echo "aguardando envio...";
        }
    ?>
</body>
</html>