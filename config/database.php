<?php

class Database {

    public static function conectar() {
        $host = "localhost";
        $db = "escuela";
        $port = 3306;
        $user = "root";
        $password = "";

        $conexion = new PDO("mysql:host=$host;dbname=$db;port=$port",
                    $user, $password);
        return $conexion;
    }

}

?>