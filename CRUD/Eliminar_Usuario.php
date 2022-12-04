<?php
include("Conectar.php");
$con = conectar();

$Id=$_GET["Id_Usuario"];

$sql="DELETE FROM users WHERE id='$Id'";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: Usuarios.php");
}else{

}
?>
