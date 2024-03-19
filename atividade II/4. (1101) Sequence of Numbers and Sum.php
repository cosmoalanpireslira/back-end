<?php
while (true) {
  
    $input = fgets(STDIN);
    list($m, $n) = sscanf($input, "%d %d");

    if ($m <= 0 || $n <= 0) {
        break;
    }

    if ($m > $n) {
        $temp = $m;
        $m = $n;
        $n = $temp;
    }

    $sum = 0;
    for ($i = $m; $i <= $n; $i++) {
        echo $i . " ";
        $sum += $i;
    }

    echo "Sum={$sum}\n";
}
