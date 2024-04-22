<?php
$directorio = 'imagenes/';
$imagenes = scandir($directorio);
$imagenes = array_diff($imagenes, array('.', '..'));

if (isset($_FILES['imagen'])) {
    $nombre = $_POST['nombre'];
    $nombreImagen = $_FILES['imagen']['name'];
    $ruta = $directorio . $nombreImagen;
    move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
    // redirijo a la misma pagina
    header('Location: index.php?ejercicio=9');
    exit();
}

?>

    <div class="ejercicio9">


        <h2>Imagenes</h2>
        <div class="imagenes">
            <?php
            foreach ($imagenes as $imagen) {
                echo '<img class="imagen" src="' . $directorio . $imagen . '" alt="' . $imagen . '">';
                echo '<p>' . $imagen . '</p>';
            }
            ?>
        </div>

        <form action="index.php?ejercicio=9" method="post" enctype="multipart/form-data">
            <br>
            <label for="imagen">Imagen:</label>
            <input type="file" name="imagen" id="imagen">
            <br>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre">
            <br>
            <input type="submit" value="Subir">
        </form>
    </div>
