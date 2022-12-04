<?php

$FechaHoy = date('Y/m/d H:i:s');
$siguienteSemana = time() + (7 * 24 * 60 * 60);
$fechaExpira = date('Y/m/d H:i:s', $siguienteSemana) . "<br>";

echo '<b>Fecha de creacion de cookie: </b>' . $FechaHoy . '<br>';
echo '<b>Fecha de vencimiento de la cookie: </b>' . $fechaExpira . '<br>';

setcookie("ultimavisita",$FechaHoy,time() + (7 * 24 * 60 * 60));
?>