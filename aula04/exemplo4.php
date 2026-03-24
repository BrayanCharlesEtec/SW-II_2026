<?php
    // Função que retorna o resto da divisão por 2
    function resto($a) {
        return $a % 2;
    }

    $num1 = 7; // exemplo de número

    $resultado = resto($num1);

    if ($resultado == 0) {
        echo "PAR";
    } else {
        echo "IMPAR";
    }
?>