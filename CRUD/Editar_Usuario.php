<?php

include("Conectar.php");
$con = conectar();

$Id=$_POST["IdActualizar"];
$Nombre = $_POST['NombreActualizar'];
$Apellido = $_POST['ApellidoActualizar'];
$Correo = $_POST['CorreoActualizar'];

$sql="UPDATE infousuarios SET Id_Usuario='$Id',Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo' WHERE Id_Usuario='$Id'";
$query = mysqli_query($con, $sql);

if($query = true){
    Header("Location: Usuarios.php");
}else{

}

?>
