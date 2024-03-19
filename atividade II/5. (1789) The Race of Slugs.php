<?php

while ($line = fgets(STDIN)) { 
    $n = intval($line); 
    $speeds = explode(' ', fgets(STDIN)); 
    
    $max_speed = 0; 
    
    foreach ($speeds as $speed) { 
        $max_speed = max($max_speed, intval($speed)); 
    }
    
    if ($max_speed < 10) { 
        echo "1\n";
    } elseif ($max_speed >= 10 && $max_speed < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}

?>
