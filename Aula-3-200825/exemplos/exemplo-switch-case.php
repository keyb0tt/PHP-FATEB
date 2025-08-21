<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form method="post"><br>
    Insira a sigla do estado: <input type="text" name="uf"><input type="submit" value="Enviar"><br>
  <p>----------------------------------------------------------------------------------------------------</p>
  <br>
  </form>
</body>

<?php
  $uf = @$_POST["uf"];
  switch($uf){
    case "SP": echo "<br>Estado selecionado: São Paulo"; break;
    case "RJ": echo "<br>Estado selecionado: Rio de Janeiro"; break;
    case "MG": echo "<br>Estado selecionado: Minas Gerais"; break;
    default: echo "<br>Nenhum estado selecionado";
  }
?>
</html>