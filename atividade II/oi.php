<?php

     //ler os valores separados por espaço     
    $valores = explode(" ", fgets(STDIN));

    //compara o maior valor entre os 2 primeiros numeros, usando a formula passada 
    $maiorAB = ($valores[0] + $valores[1] + abs($valores[0] - $valores[1])) / 2;

    //compara o valor obitido com o ultimo, usando a formula passada
    $maior = ($maiorAB + $valores[2] + abs($maiorAB - $valores[2])) / 2;

    //imprime o resultado
    echo "$maior eh o maior\n";
?>
