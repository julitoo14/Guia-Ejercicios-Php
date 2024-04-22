<?php

echo 'Ejecuto la funcion concatenar con los parametros "Hola", "Mundo" y obtengo: ';
echo concatenar('Hola', 'Mundo');
echo '<br>';

function concatenar($texto1, $texto2)
{
    return $texto1 . ' ' . $texto2;
}

?>

