<?php
// Mostrar en pantalla un formulario con checkbox que permita elegir más de un paso en el menú de hoy: Entrada, plato principal, acompañamiento y postre.
//Una vez enviado el formulario, lea el archivo menu.ini, y muestre en pantalla sólo los pasos del menú que solicitó el comensal:
//menu.ini
//entrada=Snacks plato_principal=Milanesa acompañamiento=Papas fritas postre=helado
//Tip: Utilizar función parse_ini_file que permite leer archivos .ini de modo sencillo
//Tip: Si la letra ñ es un problema, no la utilice
//Tip: Puede cambiar los menú de comida por lo que prefiera, la intención es aprender a leer un archivo .ini y utilizar el array asociativo resultante

if (isset($_POST['enviar'])) {
    unset($_POST['enviar']); // Elimino valor de enviar
    $menu = parse_ini_file("menu.ini");
    echo "<h1>Menu</h1>";
    echo "<ul>";
    foreach ($_POST as $seleccion => $value) { // Recorro el array POST
        echo "<li>$seleccion: $menu[$value]</li>"; // Muestro el valor del array menu segun la seleccion
    }
    echo "</ul>";
} else {
    echo "<form action='index.php?ejercicio=13' method='post'>";
    echo "<input type='checkbox' name='entrada' value='entrada'>Entrada<br>";
    echo "<input type='checkbox' name='plato_principal' value='plato_principal'>Plato Principal<br>";
    echo "<input type='checkbox' name='acompaniamiento' value='acompaniamiento'>Acompaniamiento<br>";
    echo "<input type='checkbox' name='postre' value='postre'>Postre<br>";
    echo "<input type='submit' name='enviar' value='Enviar'>";
    echo "</form>";
}

?>