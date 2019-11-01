<?php

$idade = 16;
$pessoa = 3;


echo "Você só pode entrar se tiver mais do que 18 anos." . PHP_EOL;

if ($idade >= 18) {

    echo "Você tem $idade anos. Pode entrar sozinho!" .PHP_EOL;
    
}  else if($idade < 18 && $pessoa > 1) {

    echo "Você está acompanhada de $pessoa pessoas. Pode entrar!";
} else {

    echo "Você só tem $idade anos. Não pode entrar!";

}

echo PHP_EOL;
echo "Adeus!";