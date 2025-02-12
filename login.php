<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
        }
        .error {
            color: red;
        }
        .success {
            color: green;
        }
        .form {
            justify-content: center;
        }
    </style>
</head>
<body>


<h2>Iniciar Sesión</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $recordar = isset($_POST['recordar']);  // Verificamos si la casilla de "Recuérdame" fue marcada

    // Validación simple de usuario y contraseña
    if ($usuario === "admin" && $password === "1234") {
        echo "<p class='success'>Inicio de sesión exitoso. ¡Bienvenido $usuario!</p>";

        // Lógica para recordar al usuario
        if ($recordar) {
            // Crear una cookie para recordar al usuario por 30 días
            setcookie('usuario', $usuario, time() + (86400 * 30), "/"); // 86400 segundos en un día
            echo "<p>Te recordaremos la próxima vez.</p>";
        }
    } else {
        echo "<p class='error'>Usuario o contraseña incorrectos.</p>";
    }
}
?>



<form method="POST">
        <label>Usuario:</label><br>
        <input type="text" name="usuario" required><br><br>

        <label>Contraseña:</label><br>
        <input type="password" name="password" required><br><br>

        <input type="submit" value="Ingresar">

        <label>
        <input type="checkbox" name="recordar"> Recuérdame
    </label><br><br>
    </form>


</body>
</html>

