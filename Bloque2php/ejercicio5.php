<?php
date_default_timezone_set("Europe/Madrid");

setlocale(LC_TIME, "es_ES.UTF-8", "es_ES", "spanish");//No lo coge

$fecha = strftime("%d de %B de %Y");
$hora = date("H:i:s");
$dias_mes = date("t");

echo "Cuando se cargó esta página eran las $hora del día $fecha.";
echo "<br>Este mes de " . strftime("%B") . " tiene $dias_mes días.";
