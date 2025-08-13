<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula de PHP</title>
</head>
<body>
    Digite uma frase:
    <form>
        <input type="text" name="frase">
        <input type="submit" value="Enviar">
    </form>
    <br>

    <?php
        @$frase = $_GET["frase"];
        echo "Você digitou: <b>" .$frase. "" 
    ?>
</body>
</html>

