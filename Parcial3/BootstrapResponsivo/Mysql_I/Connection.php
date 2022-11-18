<?php

$servidor = "localhost";
$basedatos = "bdPagina";
$usuario = "root";
$password = "";

$con = mysqli_connect($servidor,$usuario,$password,$basedatos) or die("No se pudo conectar al localhost");
$consulta = "select * from empleado";

$registros = mysqli_query($con,$consulta) or die("Problema con el select");

$result = mysqli_fetch_all($registros);

mysqli_close($con);
echo json_encode($result);
?>