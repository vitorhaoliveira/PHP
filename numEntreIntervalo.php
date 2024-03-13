<?php
function gerarNumerosInteiros($inicio, $fim) {
    if ($inicio <= $fim) {
        for ($i = $inicio; $i <= $fim; $i++) {
            echo $i . " ";
        }
    } else {
        gerarNumerosInteiros($fim, $inicio);
    }
}

$numero1 = 5;
$numero2 = 15;

gerarNumerosInteiros($numero1, $numero2);
