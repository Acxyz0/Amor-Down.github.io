<?php
// Realizar la conexión a la base de datos
$dbHost = 'localhost';
$dbName = 'amordown';
$dbUser = 'root';
$dbPass = '';

$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Obtener los datos del formulario
  $rol = $_POST['nombrerol']; 

  // Preparar la consulta SQL para insertar un nuevo usuario
  $query = "INSERT INTO roles (Rol) VALUES (?)";
  $stmt = $conn->prepare($query);
  $stmt->execute([$rol]);

  // Redirigir a la página principal después de agregar el usuario
  header('Location: IngresarUsuario.php');
  exit;
}
?>