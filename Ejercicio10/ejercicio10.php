<?php
// Reutilizando el ejercicio anterior, realizar una web que liste todos los nombres de imagenes que contiene en la carpeta /imagenes cómo link, que al hacer clic, lleve a una segunda pantalla donde efectivamente se muestre dicha imagen.

$directorio = 'imagenes/';
$imagenes = scandir($directorio);
$imagenes = array_diff($imagenes, array('.', '..'));

// Si se recibe un parametro imagen por GET, se muestra la imagen
if (isset($_GET['imagen'])) {
    $imagen = $_GET['imagen'];
    echo '<img class="imagen" src="' . $directorio . $imagen . '" alt="' . $imagen . '">';
    echo '<p>' . $imagen . '</p>';
} else { // Si no se recibe un parametro imagen por GET, se listan las imagenes como links
    echo '<h2>Imagenes</h2>';
    echo '<div class="imagenes">';
    foreach ($imagenes as $imagen) {
        echo '<a href="index.php?ejercicio=10&imagen=' . $imagen . '">' . $imagen . '</a>';
        echo '<br>';
    }
    echo '</div>';
}