<?php
$imagenes = glob("img/*.{svg}", GLOB_BRACE);

$archivo = fopen("info_imagenes.txt", "w");

foreach ($imagenes as $imagen) {
    $tamaño = filesize($imagen);
    fwrite($archivo, basename($imagen) . "\t$tamaño bytes\n"); 


    echo "<img src='$imagen' alt='" . basename($imagen) . "' style='width:100px;height:auto;'>";
    echo "<p>" . basename($imagen) . "</p>";
}

fclose($archivo);

