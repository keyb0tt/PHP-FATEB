<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form method="post"> <br>
    Insira sua idade:<input type="number" name="idade"> <input type="submit" value="Enviar"> <br>
  </form>
</body>

<?php

$identificador = ($idade >= 18) ? '<br>Você é maior de idade' : '<br>Você é menor de idade';
echo $identificador;

?>

</html>