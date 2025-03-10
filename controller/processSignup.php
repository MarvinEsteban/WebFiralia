<?php



if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (!preg_match("/^[1-3]$/", $_POST["rol"])) {
    die("El rol tiene que ser 1, 2 o 3");
}

if (strlen($_POST["password"]) < 8) {
    die("La constraseña debe contener al menos 8 caracteres");
}


if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("La contraseña debe contener al menos 1 letra");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("La constraseña debe contener al menos 1 numero");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Las constraseñas deben coincidir");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

var_dump($password_hash);


print_r($_POST);


$mysqli = require __DIR__ . "/database.php";

$sql = "INSERT INTO users (name, lastname, email, password_hash, rol)//faltara añadir la foto user_image
        VALUES (?, ?, ?, ?, ?, ?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("sss",
                  $_POST["name"],
                 $_POST["lastname"],
                  $_POST["email"],
                  $_POST["rol"],
                  //$_POST["user_image"],
                  $password_hash);

 $stmt->execute();

 echo "Signup successful";


/*if ($stmt->execute()) {

  header("Location: signup-success.html");
   exit;                
    } else {
                    
        if ($mysqli->errno === 1062) {
           die("email already taken");
                } else {
               die($mysqli->error . " " . $mysqli->errno);
                    }
                }
                  */
