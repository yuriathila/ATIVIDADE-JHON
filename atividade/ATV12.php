<?php 

function maxPilhaFigurinhas($pilha1, $pilha2) {
    $maior_divisor_comum = gcd($pilha1, $pilha2);
    return $maior_divisor_comum;
}

function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

$N = intval(fgets(STDIN));

for ($i = 0; $i < $N; $i++) {
    list($pilha1, $pilha2) = explode(" ", trim(fgets(STDIN)));
    echo maxPilhaFigurinhas($pilha1, $pilha2) . "\n";
}

?>