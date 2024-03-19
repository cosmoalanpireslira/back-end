<?php
    $valores = explode(" ", fgets(STDIN));

    $maiorAB = ($valores[0] + $valores[1] + abs($valores[0] - $valores[1])) / 2;
    $maior = ($maiorAB + $valores[2] + abs($maiorAB - $valores[2])) / 2;
    
    echo "$maior eh o maior\n";
?>

<body>
# <h2> Resolução com explicação no Replit: </h2>
[URI 1013 php-replit](https://replit.com/@Cosmo-AlanAlan/1-1013-The-Greatest) 
</body>
