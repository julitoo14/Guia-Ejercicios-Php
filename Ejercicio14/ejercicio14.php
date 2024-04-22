<?php

if (isset($_POST['dimension'])) { // Verifico si se envio el formulario
    $dimension = $_POST['dimension'];
    $matriz = array();
    $contador = 1;
    for ($i = 0; $i < $dimension; $i++) { // Creo la matriz de NxN
        for ($j = 0; $j < $dimension; $j++) {
            $matriz[$i][$j] = $contador;
            $contador++;
        }
    }
    // La muestro en pantalla
    echo "<h1>Matriz de $dimension x $dimension</h1>";
    echo "<table>";
    for ($i = 0; $i < $dimension; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $dimension; $j++) {
            echo "<td>" . $matriz[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    // Muestro las diagonales
    echo "<h2>Diagonal principal</h2>";
    for ($i = 0; $i < $dimension; $i++) {
        echo $matriz[$i][$i] . "<br>";
    }
    echo "<h2>Diagonal secundaria</h2>";
    for ($i = 0; $i < $dimension; $i++) {
        echo $matriz[$i][$dimension - $i - 1] . "<br>";
    }
    $suma = 0;
    for ($i = 0; $i < $dimension; $i++) {
        for ($j = 0; $j < $dimension; $j++) {
            $suma += $matriz[$i][$j];
        }
    }
    echo "<h2>Suma de todos los valores de la matriz: $suma</h2>";
} else {
    ?>
    <h1>Ingrese la dimension de la matriz</h1>
    <form action="index.php?ejercicio=14" method="post">
        <input type="number" name="dimension" required>
        <input type="submit" value="Enviar">
    </form>
    <?php
}