<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.: Eliminar :.</title>
</head>
<body>
    <h1 style = "text-align: center">Eliminar</h1>

    <form action="index.php?action=delete&id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="mb-3">

            <label for="" class="form-label">ID</label>
            <input type="text" class="form-control" name="id" disabled value=<?php echo $_GET['id']; ?>>

            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" placeholder="Ingresar un nombre ..." name="name" value=<?php echo $usuario['name'] ; ?>>

            <label for="" class="form-label">LastName</label>
            <input type="text" class="form-control" placeholder="Ingresar un apellido ..." name="lastname" value=<?php echo $usuario['lastname'] ; ?>>

            <label for="" class="form-label">Telefono</label>
            <input type="text" class="form-control" placeholder="Ingresar un apellido ..." name="lastname" value=<?php echo $usuario['telefono'] ; ?>>

            <label for="" class="form-label">Contraseña</label>
            <input type="text" class="form-control" placeholder="Ingresar un apellido ..." name="lastname" value=<?php echo $usuario['contraseña'] ; ?>>
        </div>
        
        <button type="submit" class="btn btn-primary"> Eliminar </button>
    </form>

</body>
</html>