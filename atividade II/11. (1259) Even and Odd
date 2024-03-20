<?php

$num_numeros = intval(fgets(STDIN));

$pares = array();
$impares = array();

for ($i = 0; $i < $num_numeros; $i++) {

  $numero = intval(fgets(STDIN));

  if ($numero % 2 == 0) {
    $pares[] = $numero;
  }
  else {
    $impares[] = $numero;
  }

}

sort($pares);

rsort($impares);

foreach ($pares as $numero) {
  echo "$numero\n";
}

foreach ($impares as $numero) {
  echo "$numero\n";
}

