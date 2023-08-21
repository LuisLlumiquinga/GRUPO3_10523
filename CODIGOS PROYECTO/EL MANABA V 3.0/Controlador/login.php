<?php

include '../Modelo/conexion_db.php';

class LoginController {
    private $conexion;

    public function __construct() {
        $this->conexion = new ConexionDB();
    }

    public function login() {
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        $login = mysqli_query($this->conexion->getConexion(), "SELECT * FROM usuarios WHERE Usuario = '$usuario' and Contraseña = '$contraseña' ");

        if (mysqli_num_rows($login) > 0) {
            header("location: ../dash/index.html");
            exit;
        } else {
            echo '
            <script> 
                alert("El usuario no existe.");
                window.location ="../index.php";
            </script>
        ';
            exit;
        }
    }
}

$loginController = new LoginController();
$loginController->login();
