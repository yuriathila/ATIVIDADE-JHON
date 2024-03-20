<?php 

function criptografar($texto) {
    $resultado = '';

    for ($k = 0; $k < strlen($texto); $k++) {
        $caractere = $texto[$k];
        if (ctype_alpha($caractere)) {
            $caractere = chr(ord($caractere) + 3);

            if ((ctype_upper($texto[$k]) && $caractere > 'Z') || (ctype_lower($texto[$k]) && $caractere > 'z')) {
                $caractere = chr(ord($caractere) - 26);
            }
        }
        $resultado .= $caractere;
    }

    $resultado = strrev($resultado);
    $metadeTexto = strlen($resultado) / 2;
    for ($l = $metadeTexto; $l < strlen($resultado); $l++) {
        $caractere = $resultado[$l];
        if (ctype_alpha($caractere)) {
            $caractere = chr(ord($caractere) - 1);
        }
        $resultado[$l] = $caractere;
    }

    return $resultado;
}

$quantidadeCasos = intval(trim(fgets(STDIN)));

for ($m = 0; $m < $quantidadeCasos; $m++) {
    $quantidadeLinhas = intval(trim(fgets(STDIN)));
    for ($n = 0; $n < $quantidadeLinhas; $n++) {
        $linhaTexto = trim(fgets(STDIN));
        echo criptografar($linhaTexto) . "\n";
    }
}


?>