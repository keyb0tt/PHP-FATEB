<?php
  $alunos = range(1, 50);
  $nota1 = [];
  $nota2 = [];

  shuffle($alunos);

  for($i = 0; $i <= 49; $i++){
    $nota1[$i] = rand(1, 10);
    $nota2[$i] = rand(1, 10);
    echo "(Aluno ".$i + 1 . ": $alunos[$i])<br><br>| Nota 1: $nota1[$i] |<br>| Nota 2: $nota2[$i] |<br>";
    $media = ($nota1[$i] + $nota2[$i]) / 2;
    echo "[ Média: $media ]<br><br>";
    if($media < 4){
      $situacao = "Reprovado";
    } else if($media >= 4 && $media < 7){
      $situacao = "Exame";
    } else if($media >= 7){
      $situacao = "Aprovado";
    }
    echo "->Situação: $situacao<-<br>";
    echo "---------------------------------------------------------<br>";
  }

