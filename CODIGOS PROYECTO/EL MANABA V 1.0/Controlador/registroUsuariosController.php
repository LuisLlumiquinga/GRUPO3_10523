<?php

include '../Modelo/conexion_db.php';

class RegistroUsuariosController {
    private $conexion;

    public function __construct() {
        $this->conexion = new ConexionDB();
    }

    public function registrarUsuario() {
        $nombre_completo = $_POST['nombre'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        $registro = mysqli_query($this->conexion->getConexion(), "INSERT INTO usuarios (Nombre, Correo, Direccion, Usuario, Contraseña) VALUES ('$nombre_completo', '$correo', '$direccion', '$usuario', '$contraseña')");

        if ($registro) {
            echo '
            <script> 
                alert("Registro exitoso. Por favor, inicia sesión.");
                window.location ="../index.php";
            </script>
        ';
            exit;
        } else {
            echo '
            <script> 
                alert("Error al registrar usuario.");
                window.location ="../index.php";
            </script>
        ';
            exit;
        }
    }
}

$registroUsuariosController = new RegistroUsuariosController();
$registroUsuariosController->registrarUsuario();