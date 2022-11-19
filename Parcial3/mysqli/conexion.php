<?php

$servidor = "localhost";
$basedatos = "prueba";
$usuario = "admin";
$password = "rEPB(3yt64_NwJ[V";
$port = "3308";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos,$port) or die("No se pudo conectar al localhost");
$consulta = "select * from usuarios";

$registros = mysqli_query($con,$consulta) or die("Problema con el select");

$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result); 
?>