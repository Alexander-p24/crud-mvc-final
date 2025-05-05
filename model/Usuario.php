<?php

require_once __DIR__ . '/../config/database.php';

class Usuario {
    private $conexion;
    public function __construct() {
        $this->conexion = Database::conectar();
    }

    public function all(){
        $stmt = $this->conexion->query("SELECT * FROM empleados");
        $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $usuarios;
    }

    public function find($id){
        $stmt = $this->conexion->query("SELECT * FROM empleados WHERE id = $id");
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);
        return $usuario;
    }

    public function update($contraseña, $telefono, $lastname, $name, $id) {
        $stmt = $this->conexion->prepare("UPDATE empleados SET name=?, lastname=?, telefono = ?, contraseña = ? WHERE id=?");
        return $stmt->execute([$contraseña, $telefono, $name, $lastname, $id]);
    }

    public function delete($id) {
        $stmt = $this->conexion->prepare("DELETE FROM empleados WHERE id=?");
        return $stmt->execute([$id]);
    }

    public function store($data){
        $query = "INSERT INTO empleados(name, lastname, telefono, contraseña) VALUES(?,?,?,?)";
        $stmt = $this->conexion->prepare($query);
        return $stmt->execute([$data['name'], $data['lastname'], $data['telefono'], $data['contraseña']]);
    }

}

?>