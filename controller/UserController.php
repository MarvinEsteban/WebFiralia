<?php
session_start();


$usuario_valido = 'usuario';
$contrasena_usuario_valida = '12345';
$admin_valido = 'admin';
$contrasena_admin_valida = '54321';


function login(){

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user= $_POST['usuario'];
    $password= $_POST['password'];


    
}
}

function logout(){

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $user= $_POST['usuario'];
        $password= $_POST['password'];
    
        
        
    }
    }

    function register(){

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name= $_POST['name'];
            $lastname= $_POST['lastname'];
            $email= $_POST['email'];
            $user= $_POST['user'];
            $password= $_POST['password'];
        
            
            
        }
        }
?>