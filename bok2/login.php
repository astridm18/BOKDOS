<?php

/**
* Este documento permite que el user (ya registrado) pueda iniciar sesión dentro de la página 
*
*
*/

session_start();

    $servidor = "Localhost";
    $user = "root";
    $pass = "";
    $dbname = "bokdos";

    $conn = new mysqli($servidor, $user, $pass, $dbname);
    
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$correos = $_POST['email'];
$claves = md5($_POST['pass']); // Utilizar md5() para cifrar la contraseña ingresada

$sql = "SELECT * FROM usuario WHERE correo = '$correos' AND clave = '$claves'";
$resultado = $conn->query($sql);

if ($resultado->num_rows == 1) {
    // Inicio de sesión exitoso
    $usuario = $resultado->fetch_assoc();

    // Establecer las variables de sesión
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['apellido'] = $usuario['apellido'];
    $_SESSION['correo'] = $correos;

    // Redireccionar al usuario a la página de bienvenida o a alguna otra página de tu elección
    header('Location: index.php');
    exit;
} else {
    // Error en las credenciales de inicio de sesión
    echo "Credenciales inválidas. Inténtalo nuevamente.";
}

$conn->close();

