<?php

while (true) {
  $entrada = rtrim(fgets(STDIN));
  $valores = explode(" ", $entrada);
  $h1 = (int) $valores[0];
  $m1 = (int) $valores[1];
  $h2 = (int) $valores[2];
  $m2 = (int) $valores[3];


  if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
    break;
  }

  $inicio = $h1 * 60 + $m1;
  $fim = $h2 * 60 + $m2;

  if ($fim < $inicio) {
    $fim += 24 * 60;
  }

  $duracao = $fim - $inicio;

  echo $duracao . "\n";
}

?>
