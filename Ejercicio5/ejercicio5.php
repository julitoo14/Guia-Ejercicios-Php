<?php

$array = [1, 2, 3, 4, 5];
echo 'Ejecuto la funcion sumatoria_a con valores 1, 2, 3, 4, 5 y obtengo: ' . sumatoria_a($array);
echo '<br>';
$array = [1, 1, 1, 1, 1];
echo 'Ejecuto la funcion sumatoria_b con valores 1, 1, 1, 1, 1 y obtengo: ' . sumatoria_b($array);
echo '<br>';
$array = [2, 2, 4, 4, 1];
echo 'Ejecuto la funcion sumatoria_c con valores 2, 2, 4, 4, 1 y obtengo: ' . sumatoria_c($array);
echo '<br>';


function sumatoria_a($array)
{
    $sumatoria = 0;
    for ($i = 0; $i < count($array); $i++) {
        $sumatoria += $array[$i];
    }
    return $sumatoria;
}

function sumatoria_b($array)
{
    $sumatoria = 0;
    foreach ($array as $valor) {
        $sumatoria += $valor;
    }
    return $sumatoria;
}

function sumatoria_c($array)
{
    $sumatoria = 0;
    $i = 0;
    while ($i < count($array)) {
        $sumatoria += $array[$i];
        $i++;
    }
    return $sumatoria;
}

?>
