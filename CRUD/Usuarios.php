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
    
    <img id="fotoempleado" src="https://thumbs.dreamstime.com/b/perfil-avatar-hombre-persona-usuario-administrador-de-usuarios-empresario-humano-icono-g%C3%A9nero-ilustraci%C3%B3n-vectorial-profesor-uso-194810496.jpg"height="200" width="200">
    <div class="Usuarios" id="Formusuarios">
        <h2>Crear usuario</h2>
        <form action="Agregar_Usuario.php" method="POST">
        <input type="text" name="Id" placeholder="Id">
        <input type="text" name="Nombre" placeholder="Nombre">
        <input type="text" name="Apellido" placeholder="Apellido">
        <input type="text" name="Correo" placeholder="Correo">


    
        <button id="btnagg" type="submit" value="Agregar"><box-icon name='user-plus'></box-icon></box-icon></button>   
        
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
                    <th id="theditar">Editar</th>
                    <th id="theliminar">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['Id_Usuario'] ?></th>
                        <th><?= $row['Nombre'] ?></th>
                        <th><?= $row['Apellido'] ?></th>
                        <th><?= $row['Correo'] ?></th>
                        <th><a href="Actualizar_Usuario.php?id=<?= $row['Id_Usuario'] ?>"><box-icon type='solid' name='edit'></box-icon></a></th>
                        <th><a href="Eliminar_Usuario.php?id=<?= $row['Id_Usuario'] ?>"><box-icon type='solid' name='trash'></box-icon></a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>

    

</body>

</html>