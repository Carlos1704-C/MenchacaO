<?php
$servidor = "localhost";
$basededatos = "bdalumnos";
$usuario = "admin";
$password = "rEPB(3yt64_NwJ[V";
$port = "3308";

$Id_Producto = ['IdProducto'];
$Nombre_Producto = ['NombreProducto'];
$Precio_Producto = ['PrecioProducto'];
$Marca = ['Marca'];

$con = mysqli_connect($servidor, $usuario, $password, $basededatos, $port) or die("No se conecto");
$consulta = "insert into alumnos values(";

$registros = mysqli_query($con, $consulta) or die("Problema en el select");

$result = mysqli_fetch_all($registros);
mysqli_close($con);
echo json_encode($result);
?>