<?php
include("Conectar.php");
$con = conectar();

$Id_Usuario = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];

$sql = "INSERT INTO infousuarios VALUES('$Id_Usuario','$Nombre','$Apellido','$Correo')";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>