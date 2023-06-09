<?php
// Realizar la conexión a la base de datos
$dbHost = 'localhost';
$dbName = 'amordown';
$dbUser = 'root';
$dbPass = '';

$conn = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);

// Obtener el ID del usuario a desactivar
$userId = $_POST['userId'];

// Preparar la consulta SQL para actualizar el estado del usuario a "inactivo"
$query = "UPDATE usuarios SET estado = 'inactivo' WHERE ID = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$userId]);

// Verificar si se actualizó correctamente el estado del usuario
if ($stmt->rowCount() > 0) {
    // Se actualizó el estado correctamente
    $response = [
        'success' => true,
        'message' => 'El usuario ha sido desactivado correctamente.',
    ];
} else {
    // No se pudo encontrar el usuario o el estado ya estaba como "inactivo"
    $response = [
        'success' => false,
        'message' => 'No se pudo desactivar el usuario.',
    ];
}

// Enviar una respuesta en formato JSON
echo json_encode($response);
?>
