<?php

$casos_teste = intval(fgets(STDIN));

for ($i = 0; $i < $casos_teste; $i++) {
  $numero = trim(fgets(STDIN));
  $leds = 0;
  
  for ($j = 0; $j < strlen($numero); $j++) {
    switch ($numero[$j]) {
      case "0":
        $leds += 6;
        break;
      case "1":
        $leds += 2;
        break;
      case "2":
        $leds += 5;
        break;
      case "3":
        $leds += 5;
        break;
      case "4":
        $leds += 4;
        break;
      case "5":
        $leds += 5;
        break;
      case "6":
        $leds += 6;
        break;
      case "7":
        $leds += 3;
        break;
      case "8":
        $leds += 7;
        break;
      case "9":
        $leds += 6;
        break;
    }
  }
  
  echo "$leds leds\n";
}
