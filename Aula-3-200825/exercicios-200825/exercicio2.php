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
  Insira o valor da sua compra: <input type="number" name="valorCompra"><br>
  Insira o método da sua compra: <input type="number" name="metodo"> <br><br>
  1: Á vista com 10% de desconto <br>
  2: 3x sem juros <br><br>
  <input type="submit" value="Enviar">
  </form>

  <?php
    if(isset($_POST["valorCompra"]) + isset($_POST["aVista"]) + isset($_POST["parcelado"])){
      $valorCompra = $_POST["valorCompra"];
      $metodo = $_POST["metodo"];

      switch($metodo){
        case 1: $desconto = $valorCompra * 0.1;
        echo "<br>Você irá pagar R$". $valorCompra - $desconto. ", obtendo R$$desconto de desconto"; break;

        case 2: $parcelas = $valorCompra / 3;
        echo "<br>Você irá pagar 3 parcelas de R$". $parcelas = number_format($parcelas,2,'.',""); break;
      }
    } else {
      echo "<br>(Aguardando envio...)";
    }
  ?>
</body>
</html>