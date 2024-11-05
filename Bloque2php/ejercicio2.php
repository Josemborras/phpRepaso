<?php
$cadena = "Hay que quitar la ultima palabra";
$cadena_modificada = preg_replace('/\s+\S+$/', '', $cadena);
echo $cadena_modificada;
