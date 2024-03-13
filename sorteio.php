<?php 

$min = 1;
$max = 50;
$numSorteado = rand($min, $max);
$numEscolhido = 2;

echo $numSorteado.PHP_EOL;

if ($numEscolhido == $numSorteado) {
   echo "Você acertou! O número era $numSorteado";
} else {
   echo "Você errou!  O número era $numSorteado";
}
