<<?php 
$va = trim(fgets(STDIN));
$vb = trim(fgets(STDIN));
$vs = trim(fgets(STDIN));

$va = intval($va);
$vb = intval($vb);
$vs = intval($vs);


$maiorAB = ($va + $vb + abs($va - $vb)) / 2;
$maior = ($maiorAB + $s + abs($maiorAB - $s)) /2;

echo "$maior eh o maior\n";
?>