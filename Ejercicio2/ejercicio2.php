<?php

echo 'Ejecuto la funcion binomioCuadradoPerfecto_a con valores 2 y 3 y obtengo: ';
echo binomioCuadradoPerfecto_a(2, 3);
echo '<br>';
echo 'Ejecuto la funcion binomioCuadradoPerfecto_b con valores 4 y 4 y obtengo: ';
echo binomioCuadradoPerfecto_b(4, 4);
echo '<br>';

function binomioCuadradoPerfecto_a($a, $b)
{
    return pow($a + $b, 2);
}

function binomioCuadradoPerfecto_b($a, $b)
{
    return $a**2 + 2*$a*$b + $b**2;
}
?>