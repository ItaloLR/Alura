<?php

$massaC = 68;
$altura = 1.70;

if ($massaC / ($altura * $altura) < 18.5) {

    echo "IMC: Você está abaixo do peso!";

} else if ($massaC / ($altura * $altura) >= 18.5 || $massaC / ($altura * $altura) <= 24.9){

    echo "IMC: Seu peso está normal!";

} else if ($massaC / ($altura * $altura) >= 25.0 || $massaC / ($altura * $altura) <= 29.9) {

    echo "IMC: Você está com excesso de peso!";

} else if ($massaC / ($altura * $altura) >= 30.0 || $massaC / ($altura * $altura) <= 34.9) {
    
    echo "IMC: Você está com Obesidade Leve (Grau I)!";

} else if ($massaC / ($altura * $altura) >= 35.0 || $massaC / ($altura * $altura) <= 39.9) {
    
    echo "IMC: Você está com Obesidade Severa (Grau II)!";

} else {

    echo "IMC: Você está com Obesidade Mórbida (Grau III)!";

}