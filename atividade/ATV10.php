<?php 

function decifra_cesar($string, $deslocamento) {
    $decifrado = '';
    $tam_alfabeto = 26;

    
    for ($i = 0; $i < strlen($string); $i++) {
        $car = $string[$i];

        
        if (ctype_upper($car)) {
           
            $pos = ord($car) - ord('A');
            $nova_pos = ($pos - $deslocamento + $tam_alfabeto) % $tam_alfabeto;
            $car_decifrado = chr($nova_pos + ord('A'));
            $decifrado .= $car_decifrado;
        } else {
            
            $decifrado .= $car;
        }
    }

    return $decifrado;
}


$num_casos = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $num_casos; $i++) {
    $texto_codificado = trim(fgets(STDIN));
    $desloc = intval(trim(fgets(STDIN)));


    echo decifra_cesar($texto_codificado, $desloc) . "\n";
}



?>