<?php
include("Conectar.php");
$con = conectar();



    $Id_Usuario = $_GET['Id_Usuario'];

    $sql = "SELECT * FROM infousuarios WHERE Id_Usuario ='$Id_Usuario'";
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <body>

        <div class="Usuarios">
            <h2>Editar usuario</h2>
            <form action="Editar_Usuario.php" method="POST">
                <input type="text" name="Id" placeholder="Id" value="<? $row['Id_Usuario']?>">
                <input type="text" name="Nombre" placeholder="Nombre" value="<? $row['Nombre']?>">
                <input type="text" name="Apellido" placeholder="Apellido" value="<? $row['Apellido']?>">
                <input type="text" name="Correo" placeholder="Correo" value="<? $row['Correo']?>">



                <button type="submit" value="Actualizar">
                    <box-icon type='solid' name='chevron-up-circle'></box-icon>
                </button>

            </form>
        </div>
    </body>

</html>