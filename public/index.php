<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listas de usuarios</title>
    <link href="..\util\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <script src="..\util\bootstrap\js\bootstrap.min.js"></script>
</head>
<body>
  
    <?php 
        require_once __DIR__ . '/../controller/UsuarioController.php';

        $usuario = new UsuarioController();

        $action = $_GET['action'] ?? "index";
        $id = $_GET['id'] ?? null;

        switch($action) {
            case "index":
                $usuario->index();
                break;
            case "editar":
                $usuario->find($id);
                break;
            case "update":
                $id = $_GET['id'];
                $name = $_POST['name'];
                $lastname = $_POST['lastname'];
                $telefono = $_POST['telefono'];
                $contraseña = $_POST['contraseña'];
                $usuario->update($id, $name, $lastname, $telefono, $contraseña);
                break;
            case "eliminar":
                $usuario->delete($id);
                break;
            case "create":
                $usuario->create();
                break;
            case "store":
                $usuario->store($_POST);
                break;
        }

        //$usuario->index();
    ?>
</body>
</html>