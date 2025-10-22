<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

$conexion = new mysqli("localhost", "1641189", "admin", "final");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}

// Consulta segura con prepared statements para evitar inyección SQL
$stmt = $conexion->prepare("SELECT nombres, apellidos FROM registro WHERE username = ? AND password = ?");
$stmt->bind_param("ss", $username, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $_SESSION['username'] = $username;
    $_SESSION['nombres'] = $row['nombres'];
    $_SESSION['apellidos'] = $row['apellidos'];
    
    header("Location: inicio.php"); // Cambia a index.php para manejar sesiones y mostrar modal
    exit();
} else {
    echo "<script>alert('Usuario o contraseña incorrectos'); window.location='login.html';</script>";
    exit();
}
?>