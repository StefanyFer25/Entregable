<?php
$server = "localhost";
$user = "1641189";
$password = "admin";
$db = "final";

$conexion = mysqli_connect($server, $user, $password, $db);

if (mysqli_connect_errno()) {
    die("Conexion Fallida: " . mysqli_connect_error());
} else {
    echo "Conectado";
}
?>