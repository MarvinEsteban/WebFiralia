<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="CSS/login.css">
    <link rel="stylesheet" href="CSS/header.css">
</head>

<body>
<header>
        <div class="header">
            <div class="logo"><a href="homePage.html"><img src="images/IMG_0037.PNG" alt="Logo Firalia" ></a></div>
            <div class="menu">
                <a href="homePage.html">Home</a>
                <a href="recomendations.html">Recomendaciones</a>
                <a href="soon.html">Queda Poco</a>
                <a href="support.html">Soporte</a>
                
            </div>
            <div class="menu2">
                
                <a href="login.php">Iniciar Sesión</a>
                <a href="register.php">Registrarse</a>
            </div>
        </div>
    </header>
    <div class="login-container">
        <h2>Iniciar Sesión</h2>

        <?php
if (isset($_GET['error']) && $_GET['error'] == 1) {
    echo "<p style='color: red; text-align: center;'>Usuario o contraseña incorrectos.</p>";
}
?>

        <form action="PHP/login.php" method="POST">
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
                <a href="#" style="font-size: 80%;justify-content: space-around;">¿Olvidaste la
                    contraseña?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="register.php"
                    style="font-size: 80%;">Registrarse</a>
            </div>
            <div class="form-group">

            </div>


        </form>
    </div>
</body>

</html>