<?php
$cadena = "Estas tias no se callan[Maria, Sandra]";
$cadena_modificada = preg_replace('/\[.*?\]/', '', $cadena);
echo $cadena_modificada;
