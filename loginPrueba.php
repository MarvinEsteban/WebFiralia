<?php
// Iniciar sesión para poder utilizar variables de sesión
session_start();

// Definir credenciales de usuario válidas (en un entorno real, estos valores vendrían de una base de datos)
$usuario_valido = 'admin';
$contrasena_valida = '12345';

// Inicializar una variable para el mensaje de error
$error = "";

// Si se envía el formulario (POST), procesar el inicio de sesión
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['password'];

    // Validar credenciales
    if ($usuario === $usuario_valido && $contrasena === $contrasena_valida) {
        // Si las credenciales son correctas, se inicia sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenido.php"); // Redirigir a una página de bienvenida
        exit();
    } else {
        // Si las credenciales no coinciden, se muestra un mensaje de error
        $error = "Usuario o contraseña incorrectos.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="syles.css">
</head>
<body>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>
        <?php
        // Mostrar mensaje de error si las credenciales son incorrectas
        if (!empty($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <div class="form-group">
                <label for="usuario">Usuario:</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label><input type="checkbox" name="remember"> Recuérdame</label>
            </div>
            <div class="form-group">
                <button type="submit">Ingresar</button>
            </div>
            <div class="form-group">
               <a href="#" style="font-size: 80%;justify-content: space-around;">¿Olvidaste la contraseña?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" style="font-size: 80%;">Registrarse</a>
            </div>
            <div class="form-group">
               
            </div>


        </form>
    </div>
</body>
</html>
