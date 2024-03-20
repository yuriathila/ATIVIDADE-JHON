<?php 

$entrada_1 = trim(fgets(STDIN));
$entrada_2 = trim(fgets(STDIN));

$numero_1 = intval($entrada_1);
$numero_2 = intval($entrada_2);

for($contador = $numero_1; $contador <= $numero_2; $contador++){

    if ($contador % 5 == 2 || $contador % 5 == 3){
    echo $contador . "\n";
    }
}


?>