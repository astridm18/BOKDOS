<?php

/**
* Este documento permite que el user pueda registrarse por primera vez dentro de la página web
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

$nombres = $_POST['nombre'];
$apellidos = $_POST['apellido'];
$correos = $_POST['email'];
$claves = md5($_POST['pass']); // Utilizar md5() para cifrar la contraseña

$sql = "INSERT INTO usuario (nombre, apellido, correo, clave) VALUES ('$nombres', '$apellidos', '$correos', '$claves')";

if ($conn->query($sql) === true) {
    // Establecer las variables de sesión
    $_SESSION['usuario_id'] = $conn->insert_id;
    $_SESSION['nombre'] = $nombres;
    $_SESSION['apellido'] = $apellidos;
    $_SESSION['correo'] = $correos;


    header('Location: index.php');
    exit;
} else {
    echo "Error en conexión: " . $conn->error;
    
}

$conn->close();