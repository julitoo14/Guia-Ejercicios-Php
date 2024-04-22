<?php

$numero = 5;
echo $numero . ' es el valor inicial <br>';
incrementar($numero);
incrementar($numero);
echo $numero . ' es el valor final';
echo '<br>';


function incrementar(&$numero)
{
    $numero++;
    echo 'Ejecuto la funcion incrementar';
    echo '<br>';
}
?>
