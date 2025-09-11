<?php

  $nomes = ["João", "Cléber", "José", "Rodrigo", "Lucas", "Pedro"];
  $nota1 = [10, 8, 9, 6, 2, 9];
  $nota2 = [9, 9, 7, 5, 3, 10];
  $media = 0;
  $situacao = '';

  for($i = 0; $i <= 5; $i++){
    echo "(Aluno ".$i + 1 . ": $nomes[$i])<br>| Nota 1: $nota1[$i] |<br>| Nota 2: $nota2[$i] |<br>";
    $media = 0;
    $media = ($nota1[$i] + $nota2[$i]) / 2;
    echo "[ Média: $media ]<br>";
    if($media < 4){
      $situacao = "Reprovado";
      echo "Situação: $situacao<br>";
    } else if($media >= 4 && $media < 7){
      $situacao = "Exame";
      echo "Situação: $situacao<br>";
    } else if($media >= 7){
      $situacao = "Aprovado";
      echo "Situação: $situacao<br>";
    }
    echo "---------------------------------------------------------<br>";
  }

