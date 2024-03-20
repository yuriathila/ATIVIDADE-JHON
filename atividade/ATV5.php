<?php 


while (fscanf(STDIN, "%d", $Lesmas) == 1) {
    $veloz = explode(' ', trim(fgets(STDIN)));
    $mVelocidade = max($veloz);

    if ($mVelocidade < 10) {
        echo "1\n";
    } elseif ($mVelocidade < 20) {
        echo "2\n";
    } else {
        echo "3\n";
    }
}
?>