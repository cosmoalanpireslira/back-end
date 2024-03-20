<?php

$num_testes = intval(fgets(STDIN));

for ($i = 0; $i < $num_testes; $i++) {

  $string = trim(fgets(STDIN));

  $posicoes = intval(fgets(STDIN));

  $cifrada = "";

  for ($j = 0; $j < strlen($string); $j++) {

    $ascii = ord($string[$j]);

    $novo_ascii = $ascii - $posicoes;

    if ($novo_ascii < 65) {

      $novo_ascii += 26;
    }

    $cifrada .= chr($novo_ascii);
  }


  echo $cifrada . "\n";
}

?>
