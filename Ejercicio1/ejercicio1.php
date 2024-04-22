<?php

echo 'Ejecuto la funcion semaforo_a con el valor "verde" y obtengo:  ';
echo semaforo_a('verde');
echo '<br>';
echo 'Ejecuto la funcion semaforo_b con el valor "amarillo" y obtengo:  ';
echo semaforo_b('amarillo');
echo '<br>';
echo 'Ejecuto la funcion semaforo_c con el valor "rojo" y obtengo:  ';
echo semaforo_c('rojo');


function semaforo_a($color)
{
    if($color === "rojo"){
        return "frene";
    }elseif ($color === "amarillo"){
        return "precaucion";
    }elseif ($color === "verde"){
        return "avance";
    }else{
        return "error, color no valido";
    }
}

function semaforo_b($color)
{
    return $color === "rojo" ? "frene" : ($color === "amarillo" ? "precaucion" : ($color === "verde" ? "avance" : "error, color no valido"));
}

function semaforo_c($color)
{
    switch ($color){
        case 'amarillo':
            return 'precaucion';

        case 'rojo':
            return 'frene';

        case 'verde':
            return 'avance';

        default:
            return 'error, color no valido';
    }
}