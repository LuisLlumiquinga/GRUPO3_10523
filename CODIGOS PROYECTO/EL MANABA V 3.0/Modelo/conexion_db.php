<?php

class ConexionDB {
    private $host = "localhost";
    private $username = "root";
    private $password = "4189";
    private $database = "elmanaba_db";
    private $conexion;

    public function __construct() {
        $this->conexion = mysqli_connect($this->host, $this->username, $this->password, $this->database);
        if (!$this->conexion) {
            echo 'No conectado';
        }
    }

    public function getConexion() {
        return $this->conexion;
    }
}
