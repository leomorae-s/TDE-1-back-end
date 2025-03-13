<?php
function contarBrinquedosAcessiveis($numeroBrinquedos, $altura, $alturasMinimas) {
    $contador = 0;

    for ($i = 0; $i < $numeroBrinquedos; $i++) {

        if ($altura >= $alturasMinimas[$i]) {

            $contador++;
        }
    }
    return $contador;
}


$numeroBrinquedos = 1;
$altura = 100;
$alturasMinimas = array(100);

$resultado = contarBrinquedosAcessiveis($numeroBrinquedos, $altura, $alturasMinimas);
echo $resultado;


//$numeroBrinquedos = 6;
//$altura = 120;
//$alturasMinimas = array(200, 90, 100, 123, 120, 169);

//$resultado = contarBrinquedosAcessiveis($numeroBrinquedos, $altura, $alturasMinimas);
//echo $resultado;
?>