<?php 
function calcularDiodos($numero) {

    $diodos_por_numero = array(6, 2, 5, 5, 4, 5, 6, 3, 7, 6);

    $total_diodos = 0;


    $numero_str = strval($numero);


    for ($i = 0; $i < strlen($numero_str); $i++) {
        $digito = intval($numero_str[$i]); 
        $total_diodos += $diodos_por_numero[$digito]; 
    }

    return $total_diodos;
}

function calcularDiodosEntrada() {
  $casos_teste = intval(fgets(STDIN));


    for ($i = 0; $i < $casos_teste; $i++) {

        $valor = intval(fgets(STDIN));

        $diodos = calcularDiodos($valor);
        echo $diodos . " diodos\n";
    }
}


calcularDiodosEntrada();


?>