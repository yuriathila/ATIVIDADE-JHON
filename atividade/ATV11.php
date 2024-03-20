<?php 


function ordenarValores($array) {
    $evenNumbers = [];
    $oddNumbers = [];
    foreach ($array as $number) {
        if ($number % 2 == 0) {
            $evenNumbers[] = $number;
        } else {
            $oddNumbers[] = $number;
        }
    }
    sort($evenNumbers);
    rsort($oddNumbers);
    $sortedArray = array_merge($evenNumbers, $oddNumbers);
    return $sortedArray;
}

function ordenarEntrada(){
    $count = intval(fgets(STDIN));
    $inputValues = [];
    for ($i = 0; $i < $count; $i++) {
        $inputValues[] = intval(fgets(STDIN));
    }
    $sortedValues = ordenarValores($inputValues);
    return $sortedValues;
}

$resultado = ordenarEntrada();
print_r($resultado);


?>