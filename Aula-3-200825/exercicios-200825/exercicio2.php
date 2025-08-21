<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício compra</title>
</head>

<body>
  <form method="post">
    <h1>Calculadora de valor de compra</h1><br>
    Insira o valor da sua compra: <input type="number" name="valorCompra" step="0.01"><br>
    Insira o método da sua compra:
    <select name="metodo">
      <option value="1">Á vista com 10% de desconto</option>
      <option value="2">3x sem juros</option>
    </select>
    <br><br>
    <input type="submit" value="Enviar">
  </form>

  <?php
  if (isset($_POST["valorCompra"]) && isset($_POST["metodo"])) {
    $valorCompra = $_POST["valorCompra"];
    $metodo = $_POST["metodo"];

    switch ($metodo) {
      case 1:
        $desconto = $valorCompra * 0.1;
        $valorFinal = $valorCompra - $desconto;
        echo "<br>Você irá pagar R$$valorFinal, obtendo R$$desconto de desconto";
        break;
      case 2:
        $parcelas = $valorCompra / 3;
        $parcelasFormatadas = number_format($parcelas, 2, '.', '');
        $valorTotalFormatado = number_format($valorCompra, 2, '.', '');
        echo "<br>Você irá pagar um total de R$$valorTotalFormatado em 3 parcelas de R$$parcelasFormatadas cada.";
        break;
    }
  } else {
    echo "<br>(Aguardando envio...)";
  }
  ?>
</body>

</html>