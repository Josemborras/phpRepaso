<?php
date_default_timezone_set("Europe/Madrid");//Cambiamos la zona horaria por defecto a "Europe/Madrid"

$fecha_original = "2021-04-24";

$ultimo_dia = strftime("%A", strtotime("last day of " . substr($fecha_original, 0, 7)));

$ultimo_dia = mb_strtolower($ultimo_dia, "UTF-8");

echo "Fecha original: $fecha_original<br>";
echo "El último día del mes de abril del año 2021 fue: $ultimo_dia";

