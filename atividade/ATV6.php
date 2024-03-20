<?php 

$letraX = intval(fgets(STDIN));
$letraY = intval(fgets(STDIN));
$num_impar = 0;
for ($i = min($letraX, $letraY) + 1; $i < max($letraX, $letraY); $i++) {
   if ($i % 2 != 0) {
     $num_impar += $i;
     }
}
  echo $num_impar . "\n";


?>