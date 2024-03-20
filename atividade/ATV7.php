<?php 
while (true) {
  
    $input = fgets(STDIN);

    
    $values = explode(" ", $input);

   
    $h1 = intval($values[0]);
    $m1 = intval($values[1]);
    $h2 = intval($values[2]);
    $m2 = intval($values[3]);

    
    if ($h1 == 0 && $h2 == 0 && $m1 == 0 && $m2 == 0) {
        break;
    }

   
    $primeirosMinutos = $h1 * 60 + $m1;
    $segundosMinutos = $h2 * 60 + $m2;
    $alarme = abs($primeirosMinutos - $segundosMinutos);

   
    echo $alarme . "\n";
}


?>