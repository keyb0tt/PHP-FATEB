<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="ex8.php" method="post">
    Insira o valor da compra: <input type="number" name="vl_compra"> <br>
    Insira o valor pago: <input type="number" name="vl_pago"> <br>
    <input type="submit" value="Enviar">
  </form>
  <?php
  $vl_compra = $_POST["vl_compra"];
  $vl_pago = $_POST["vl_pago"];
  $vl_troco = $vl_pago - $vl_compra;

  if ($vl_troco < 0) {
    echo "O valor pago é insuficiente <br>";
    echo "Faltam: " . number_format($vl_troco, 2, ",", ".");
  }

  echo "<br>O valor do troco é: $vl_troco";
  ?>
</body>

</html>