<?php

$quantidadeCasosTeste = intval(fgets(STDIN));

for ($i = 0; $i < $quantidadeCasosTeste; $i++) {
    $string = trim(fgets(STDIN));
    
    $novaString = "";
    for ($j = 0; $j < strlen($string); $j++) {
        $caractere = $string[$j];
        if (ctype_alpha($caractere)) { 
            $novaString .= chr(ord($caractere) + 3);
        } else {
            $novaString .= $caractere;
        }
    }
    
    
    $novaString = strrev($novaString);
    
    
    $metade = intval(strlen($novaString) / 2);
    for ($j = $metade; $j < strlen($novaString); $j++) {
        $caractere = $novaString[$j];
        $novaString[$j] = chr(ord($caractere) - 1);
}
    
    echo $novaString . "\n";
}

?>
