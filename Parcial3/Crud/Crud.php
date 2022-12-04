<?php
$servidor = "localhost";
$basededatos = "productos";
$usuario = "admin";
$password = "rEPB(3yt64_NwJ[V";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basededatos, $port) or die ("No se conecto");
$consulta = "select * from productos";

$registros = mysqli_query($con,$consulta) or die ("Problema en el select");

$result = mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);
?>