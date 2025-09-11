<?php
  $vetor = [];
  $somaVetor = 0;

  //preenchendo o vetor
  for($i = 0; $i <= 29; $i++){
    $vetor[$i] = rand(1, 50);
  }

  //mostrando conteúdo do vetor
  foreach($vetor as $x){
    echo "$x ";
  }
  echo "<br>";

  //mostrar o maior número
  $maior = 0;
  for($i = 0; $i <= 29; $i++){
    if($vetor[$i] > $maior){
      $maior = $vetor[$i];
    }
  }
  echo "Maior número do vetor: $maior<br>";

  //mostrar o menor número
  $menor = $maior;
  for($i = 0; $i <= 29; $i++){
    if($vetor[$i] < $menor){
      $menor = $vetor[$i];
    }
  }
  echo "Menor número do vetor: $menor<br>";

  //mostrar a soma dos valores
  foreach($vetor as $x){
    $somaVetor += $x;
  }
  echo "Soma dos valores: $somaVetor<br>";

  //mostrar a média aritmética dos valores
  $mediaArit = $somaVetor / 30;
  echo "A Média aritmética dos valores é igual a: $mediaArit<br>";

  //localizar um numero
  $buscar = 10;
  for($i = 0; $i <= 29; $i++){
    if($vetor[$i] == $buscar){
      echo "Encontrou <br>";
    }
  }