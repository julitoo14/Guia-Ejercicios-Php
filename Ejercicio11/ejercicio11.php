<?php

if (isset($_POST['cantidadDados'])) { // si recibo la cantidad lanzo los dados y les asigno valor al azar
    $cantidadDados = $_POST['cantidadDados'];
    $dados = [];
    $suma = 0;
    //Le asigno un valor al azar a cada dado y sumo el valor
    for ($i = 0; $i < $cantidadDados; $i++) {
        $numero = rand(1, 6);
        $dados[$i] = $numero;
        $suma += $numero;
    }
    echo '<h2>Dados lanzados</h2>';
    echo '<div class="dados">';
    foreach ($dados as $dado) { // traigo las imagenes de los dados correspondientes
        echo '<img class="dado" src="Ejercicio11/Dados/dice' . $dado . '.svg" alt="dado' . $dado . '">';
    }
    echo '</div>';
    echo '<h2>Puntaje obtenido</h2>';
    echo '<p>' . $suma . '</p>';
} else { // si no recibo la cantidad muestro el formulario
    echo '<h2>Cantidad de dados a lanzar</h2>';
    echo '<form action="index.php?ejercicio=11" method="post">';
    echo '<label for="cantidadDados">Cantidad de dados:</label>';
    echo '<select name="cantidadDados" id="cantidadDados">';
    for ($i = 1; $i <= 6; $i++) {
        echo '<option value="' . $i . '">' . $i . '</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '<input type="submit" value="Lanzar dados">';
    echo '</form>';
}

?>


