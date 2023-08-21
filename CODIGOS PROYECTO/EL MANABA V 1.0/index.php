<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante "El Manaba"</title>
     <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos_login.css">
    
</head>
<body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h1>El Manaba</h1>
                        <h2>RESTAURANTE</h2>
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Sabemos lo que es comer</p>
                        <button id="btn__iniciar-sesion">¡Ya estoy Registrado!!!</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h1>El Manaba</h1>
                        <h2>RESTAURANTE</h2>
                        <h3>¿No tienes cuenta?</h3>
                        <p>¡No esperes más!</p>
                        <button id="btn__registrarse">¡Regístrate!</button>
                    </div>
                </div>

                <!--Formulario de Login y de registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="Controlador/login.php" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <label>Usuario: <input type="text" name="usuario" autofocus required></label>
                        <label>Contraseña: <input type="password" name="contraseña" autofocus required></label>
                        <button>Ingresar</button>
                    </form>

                    <!--Register-->
                    <form action="Controlador/registroUsuariosController.php" method="POST" class="formulario__register">
                        <h2>Regístrate</h2>
                        <label>Nombre completo: <input type="text" name="nombre" autofocus required></label>
                        <label>Correo: <input type="email" value placeholder="prueba@espe.edu.ec" name="correo" autofocus required></label>
                        <label>Dirección: <input type="text" name="direccion" autofocus required></label>
                        <label>Usuario: <input type="text" name="usuario" autofocus required></label>
                        <label>Contraseña: <input type="password" name="contraseña" autofocus required></label>
                        <button>Registrarse</button>
                    </form>
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>