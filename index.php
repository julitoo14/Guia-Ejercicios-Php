<html lang="es">
<head>
    <title>Practica 1</title>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    <?php
    include_once ('header.php');
    ?>

    <div class="ejercicio">
        <?php
        // Si se recibe un parametro ejercicio por GET, se incluye el archivo correspondiente
        if (isset($_GET['ejercicio'])) {
            $ejercicio = $_GET['ejercicio'];
            //Chequeo que el archivo exista
            if (file_exists("Ejercicio$ejercicio/ejercicio$ejercicio.php")) {
                require_once("Ejercicio$ejercicio/ejercicio$ejercicio.php");
            } else { // Si no existe muestro el home
                require_once ('home.php');
            }
        } else {
        // Si no se recibe un parametro ejercicio por GET, se incluye el archivo home.php
            require_once ('home.php');
        }
        ?>
    </div>

    <?php
    include_once ('footer.php');
    ?>
</body>
</html>

