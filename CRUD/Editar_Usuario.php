<?php
include("Conectar.php");
$con = conectar();

$Id_Usuario = $_POST['Id'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Correo = $_POST['Correo'];

$sql = "UPDATE infousuarios SET Id_Usuario='$Id_Usuario', Nombre = '$Nombre', Apellido = '$Apellido', Correo = '$Correo'
WHERE Id_Usuario = '$Id_Usuario";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}
?>
