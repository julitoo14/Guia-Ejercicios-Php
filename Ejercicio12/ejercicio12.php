<?php
// Guardar visita
if (isset($_POST['nombre']) && isset($_POST['planeta'])) { //guardo valores del formulario
    $nombre = $_POST['nombre'];
    $planeta = $_POST['planeta'];
    $visita = [
        'nombre' => $nombre,
        'planeta' => $planeta
    ];
    $visitas = [];
    if (file_exists('visitas.json')) { // si existe el archivo lo traigo
        $visitas = json_decode(file_get_contents('visitas.json'), true);
    }
    $visitas[] = $visita;
    file_put_contents('visitas.json', json_encode($visitas)); // guardo el nuevo valor
}

// Mostrar visitas
$visitas = [];
if (file_exists('visitas.json')) { // si existe el archivo lo traigo
    $visitas = json_decode(file_get_contents('visitas.json'), true);
}
$contador = 0; // contador de visitas interplanetarias
foreach ($visitas as $visita) {
    if ($visita['planeta'] != 'Tierra') {
        $contador++;
    }
}

if (isset($_POST['nombre']) && isset($_POST['planeta'])) {
    echo '<h2>Visitas interplanetarias</h2>';
    echo '<p>Total de visitas que no pertenecen al planeta Tierra: ' . $contador . '</p>';
    echo '<table>';
    echo '<tr>';
    echo '<th>Nombre</th>';
    echo '<th>Planeta</th>';
    echo '</tr>';
    foreach ($visitas as $visita) {
        echo '<tr>';
        echo '<td>' . $visita['nombre'] . '</td>';
        echo '<td>' . $visita['planeta'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';
} else {
    echo '<h2>Formulario de ingreso</h2>';
    echo '<form action="index.php?ejercicio=12" method="post">';
    echo '<label for="nombre">Nombre:</label>';
    echo '<input type="text" name="nombre" id="nombre">';
    echo '<br>';
    echo '<label for="planeta">Planeta:</label>';
    echo '<select name="planeta" id="planeta">';
    echo '<option value="Tierra">Tierra</option>';
    echo '<option value="Marte">Marte</option>';
    echo '<option value="Jupiter">Jupiter</option>';
    echo '<option value="Saturno">Saturno</option>';
    echo '<option value="Urano">Urano</option>';
    echo '<option value="Neptuno">Neptuno</option>';
    echo '<option value="Pluton">Pluton</option>';
    echo '</select>';
    echo '<br>';
    echo '<input type="submit" value="Enviar">';
    echo '</form>';
}
?>
