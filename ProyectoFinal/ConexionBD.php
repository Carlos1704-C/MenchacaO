<?php
$servidor = 'localhost';
$basededatos = 'bdproyecto';
$usuario = 'admin';
$password = 'rEPB(3yt64_NwJ[V';
$port = '3308';

$con = mysqli_connect($servidor,$basededatos,$usuario,$password,$port) or die ("No se pudo conectar");
$consulta = 'select * from alumnos';

$registros = mysqli_query($con,$consulta) or die ("Problema con el query");

$result = mysqli_fetch_array($registros,MYSQLI_ASSOC);
echo json_encode($result);
?>