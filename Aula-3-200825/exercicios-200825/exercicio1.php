<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de média</title>
</head>

<body>
  <h1>Calculadora de média</h1><br>
  <form method="post">
    Insira sua primeira nota: <input type="number" name="n1" step="0.1"> <br>
    Insira sua segunda nota: <input type="number" name="n1" step="0.1"> <br>
    <br><input type="submit" value="Enviar">
  </form>

  <?php
  if (isset($_POST["n1"]) + isset($_POST["n2"])) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];

    if (($n1 + $n2 / 2) >= 7.0) {
      echo "<br>Parabéns! Você foi aprovado";
    } else {
      echo "<br>Você não passou :(";
    }
  } else {
    echo "<br>(Aguardando envio...)";
  }
  ?>
</body>

</html>