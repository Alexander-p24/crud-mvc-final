<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="util\bootstrap\js\bootstrap.min.js"></script>
    <title>.: Usuarios :.</title>
</head>
<body>
    <h1 style = "text-align: center">Lista de Usuarios</h1>
    <a href="index.php?action=create">Nuevo Usuario</a>
    <table class="table">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Lastname</td>
            <td>telefono</td>
            <td>contraseña</td>
            <td>Acciones</td>
        </tr>
        
        <?php
            foreach ($usuarios as $usuario) {
                //echo $usuario['id'];
                echo "<tr>
                        <td>$usuario[id]</td>
                        <td>$usuario[name]</td>
                        <td>$usuario[lastname]</td>
                        <td>$usuario[telefono]</td>
                        <td>$usuario[contraseña]</td>
                        <td>
                            <a href=index.php?action=editar&id=$usuario[id]&name=$usuario[name]&lastname=$usuario[lastname]&telefono=$usuario[telefono]&contraseña=$usuario[contraseña]>Editar</a>
                            <a href=index.php?action=eliminar&id=$usuario[id]&name=$usuario[name]&lastname=$usuario[lastname]&telefono=$usuario[telefono]&contraseña=$usuario[contraseña]>Eliminar</a>
                        <td>
                    </tr>";
            }
        ?>
    </table>
    <?php
        //var_dump($usuarios);
    ?>
</body>
</html>