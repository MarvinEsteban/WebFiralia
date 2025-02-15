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
        header("Location: /WebFiralia/HTML/bienvenido.html"); // Redirigir a una página de bienvenida
        exit();
    } else {
        // Si las credenciales no coinciden, se muestra un mensaje de error
        $error = "Usuario o contraseña incorrectos.";
    }
}
        // Mostrar mensaje de error si las credenciales son incorrectas
        if (!empty($error)) {
            echo "<p style='color: red;'>$error</p>";
        }
        ?>
