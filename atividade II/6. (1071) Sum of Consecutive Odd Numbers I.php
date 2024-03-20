<?php

$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));

$start = min($a, $b);
$end = max($a, $b);

$sum = 0;

for ($i = $start + 1; $i < $end; $i++) {
    if ($i % 2 != 0) { 
        $sum += $i; 
    }
}

echo $sum . "\n";

?>
