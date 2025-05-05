<?php

require_once __DIR__ . '/../model/Usuario.php';

class UsuarioController {

    private $usuario;

    public function __construct() {
        $this->usuario = new Usuario();
    }

    public function index() {
        $usuarios = $this->usuario->all();
        include __DIR__ . '/../views/usuarios/index.php';
    }

    public function find($id) {
        $usuario = $this->usuario->find($id);
        include __DIR__ . '/../views/usuarios/editar.php';
    }

    public function update($id, $name, $lastname, $telefono, $contraseña) {
        $userUpdate = $this->usuario->update($id, $name, $lastname, $telefono, $contraseña);
        header('Location: index.php');
    }

    public function delete($id){
        $userDelete = $this->usuario->delete($id);
        header('Location: index.php');
    }

    public function create() {
        include __DIR__ . '/../views/usuarios/create.php';
    }

    public function store($data) {
        $userCreate = $this->usuario->store($data);
        header('Location: index.php');
    }
}

?>