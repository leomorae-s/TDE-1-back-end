<?php

function calcularNota($nota1, $nota2) {

    if ($nota1 < 0 || $nota1 > 100 || $nota2 < 0 || $nota2 > 100) {

        return "Entrada inválida: as notas e a média devem estar entre 0 e 100.";
    }


    $resultado = 2 * $nota2 - $nota1;



    return $resultado;
}


$nota1 = 100;
$nota2 = 70;
echo calcularNota($nota1, $nota2);



//$nota1 = 80;
//$nota2 = 75;
//echo calcularNota($nota1, $nota2);



//$nota1 = 1;
//$nota2 = 50;
//echo calcularNota($nota1, $nota2);



?>