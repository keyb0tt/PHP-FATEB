<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirâmide</title>
</head>

<body>
  <h1>Identificador de lados da pirâmide</h1><br>
  <form method="post">
    Insira o valor, em cm, dos 3 lados:<br>
    Lado 1: <input type="number" name="lado1"><br>
    Lado 2: <input type="number" name="lado2"><br>
    Lado 3: <input type="number" name="lado3"><br>
    <input type="submit" value="Enviar">
  </form>

  <?php
  if (isset($_POST["lado1"]) && isset($_POST["lado2"]) && isset($_POST["lado3"])) {
    $lado1 = $_POST["lado1"];
    $lado2 = $_POST["lado2"];
    $lado3 = $_POST["lado3"];

    if ($lado1 < $lado2 + $lado3 && $lado2 < $lado1 + $lado3 && $lado3 < $lado1 + $lado2) {
      echo "<br>Esses lados podem formar um triângulo";
    } else {
      echo "<br>Esses lados não podem formar um triângulo";
    }
  } else {
    echo "<br>(Aguardando valor...)";
  }
  ?>
</body>

</html>