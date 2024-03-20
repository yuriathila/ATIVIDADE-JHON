<<?php 

$vl = trim(fgets(STDIN));

$vl = intval($vl);

echo $vl . "\n";

$dinhe = [100, 50, 20, 10, 5, 2, 1];

foreach ($dinhe as $dinhe_n){

    $quantidade = intdiv($vl, $dinhe_n);

    $vl %= $dinhe_n;

    echo $quantidade . " nota(s) de R$" . $dinhe_n . ",00\n";
}


?>