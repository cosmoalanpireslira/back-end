<?php

$numCasosTeste = intval(fgets(STDIN));

for ($i = 0; $i < $numCasosTeste; $i++) {
    // Lê os valores de F e M
    $valores = explode(" ", fgets(STDIN));
    $f = intval($valores[0]);
    $m = intval($valores[1]);

    $a = max($f, $m);
    $b = min($f, $m);
    while ($b != 0) {
        $temp = $a % $b;
        $a = $b;
        $b = $temp;
    }
    $mdc = $a;

    echo $mdc . "\n";
}
