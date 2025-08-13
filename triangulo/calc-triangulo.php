<?php

if(isset($_POST["base"]) && isset($_POST["altura"])){
    $base = $_POST["base"];
    $altura = $_POST["altura"];

    echo "<br> A área do seu triângulo é: ". ($base * $altura) / 2 . " cm";
    
    } else {
        echo "<br>Aguardando confirmação...";
    }
?>