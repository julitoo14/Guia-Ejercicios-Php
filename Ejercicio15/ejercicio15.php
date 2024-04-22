<?php
function buscar($clave, $texto) {
    $ocurrencias = 0;
    $clave = str_split($clave);
    $texto = str_split($texto);
    for ($i = 0; $i < count($texto); $i++) {
        $encontrado = true;
        for ($j = 0; $j < count($clave); $j++) {
            if ($texto[$i + $j] != $clave[$j]) {
                $encontrado = false;
                break;
            }
        }
        if ($encontrado) {
            $ocurrencias++;
        }
    }
    return $ocurrencias;
}

echo '<h2>Buscar ocurrencias</h2>';
echo 'ejecuto la funcion buscar con los parametros "la" y "hola unlam" y obtengo: ' . buscar('la', 'Hola unlam') . '<br>';