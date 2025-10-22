<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "1641189"; // cambia si usas otro usuario
$password = "admin"; // cambia si tu usuario tiene contraseña
$dbname = "final";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los valores del formulario
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$username = $_POST['username'];  // Cambio aquí de 'usuario' a 'username'
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$password = $_POST['password'];  // Cambio aquí de 'contraseña' a 'password'
$sexo = $_POST['sexo'];
$documento = $_POST['documento'];
$numero = $_POST['numero'];

// Insertar los datos
$sql = "INSERT INTO registro (nombres, apellidos, username, direccion, correo, password, sexo, documento, numero)
VALUES ('$nombres', '$apellidos', '$username', '$direccion', '$correo', '$password', '$sexo', '$documento', '$numero')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Registro exitoso'); window.location.href='login.html';</script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar conexión
$conn->close();
?>