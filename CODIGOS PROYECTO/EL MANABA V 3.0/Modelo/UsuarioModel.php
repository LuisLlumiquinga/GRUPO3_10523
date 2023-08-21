<?php

class UsuarioModel {
    private $conexion;

    public function __construct($conexion) {
        $this->conexion = $conexion;
    }

    public function insertarUsuario($nombre, $correo, $direccion, $usuario, $contraseña) {
        $encriptacion = hash('sha512', $contraseña);

        $query = "INSERT INTO usuarios (Nombre, Correo, Direccion, Usuario, Contraseña) 
                  VALUES ('$nombre', '$correo', '$direccion', '$usuario', '$contraseña')";

        $verificar_usuario = mysqli_query($this->conexion, "SELECT * FROM usuarios WHERE Correo = '$correo' OR Usuario = '$usuario'");

        if(mysqli_num_rows($verificar_usuario) > 0){
            return "El usuario o correo ya existen. Intente registrarse con otros datos.";
        }

        $execute = mysqli_query($this->conexion, $query);
        if($execute){
            return "Usuario registrado exitosamente.";
        }
        else{
            return "Hubo un problema, intentar nuevamente.";
        }
    }

    public function obtenerUsuario($usuario, $contraseña) {
        $query = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Contraseña = '$contraseña'";
        $login = mysqli_query($this->conexion, $query);

        if(mysqli_num_rows($login) > 0){
            return true;
        }
        else{
            return false;
        }
    }
}
?>
