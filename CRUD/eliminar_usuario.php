<?php
// Realizar la conexión a la base de datos
$dbHost = 'localhost';
$dbName = 'amordown';
$dbUser = 'root';
$dbPass = '';

$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

// Obtener el ID del usuario a eliminar
$userId = $_POST['userId'];

// Preparar la consulta SQL para eliminar el usuario
$query = "DELETE FROM usuarios WHERE ID = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$userId]);

// Enviar una respuesta en formato JSON
$response = [
  'success' => true,
  'message' => 'El usuario ha sido eliminado correctamente.',
];
echo json_encode($response);
