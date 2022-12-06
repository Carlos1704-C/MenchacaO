<?php
include("Conectar.php");
$con = conectar();

$Id=$_GET["id"];

$sql = "DELETE FROM infousuarios WHERE Id_Usuario = '$Id'";
$query = mysqli_query($con, $sql);

if($query=true){
    Header("Location: Usuarios.php");
}else{

}
?>
