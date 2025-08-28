<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirâmide</title>
</head>

<body>
  <p class="tituloPrincipal">Identificador de lados da pirâmide</p><br>
  <div class="formPost">
    <form method="post">
      <p>Insira o valor, em cm, dos 3 lados:</p><br>
      <input type="number" name="lado1" placeholder="Lado 1"><br>
      <input type="number" name="lado2" placeholder="Lado 2"><br>
      <input type="number" name="lado3" placeholder="Lado 3"><br>
      <input type="submit" class="inputSubmit" value="Enviar">
    </form>
  </div>

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
  }
?>
</body>

</html>

<style>
  .tituloPrincipal{
    font-size: 36px;
    margin: 0;
    padding-top: 12px;
    display: flex;
    justify-content: center;
    text-align: center;
  }

  .formPost{
    display: flex;
    justify-content: center;
    text-align: center;
  }

  .inputSubmit{
    width: 185px;
    margin: 0;
  }

  p{
    margin: 0;
  }
</style>