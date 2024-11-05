<?php
$origen = "img/";
$destino = "copiaseg/";
if (!file_exists($destino)) {
    mkdir($destino, 0777, true);
}
foreach (glob("$origen*.{svg}", GLOB_BRACE) as $archivo) {
    copy($archivo, $destino . basename($archivo));
}
echo "¡Copia hecha!.";
