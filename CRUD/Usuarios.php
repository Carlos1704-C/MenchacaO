<?php
include('Conectar.php');
$con = conectar();
$sql = "SELECT * FROM infousuarios";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link rel="stylesheet" href="Usuarios.css">
    <title>Usuarios</title>
</head>
<body>
    <h1 id="Encabezado">Administrador de usuarios</h1>
    <div class="Usuarios" id="Formusuarios">
        <h2>Crear usuario</h2>
        <form action="Agregar_Usuario.php" method="POST">
        <input type="text" name="Id" placeholder="Id">
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="text" name="Correo" placeholder="Correo">


    
        <button type="submit" value="Agregar"><box-icon name='user-plus'></box-icon></box-icon></button>   
        
        </form>
    </div>

    <div class="users-table">
        <h3>Usuarios</h3>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['Id_Usuario'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Apellido'] ?></th>
                        <th><?= $row['Correo'] ?></th>
                        <th><a href="Actualizar_Usuario.php?id=<?= $row['Id_Usuario'] ?>">Editar</a></th>
                        <th><a href="Eliminar_Usuario.php?id=<?= $row['Id_Usuario'] ?>">Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

</body>

</html>